<?php
$baseDir = __DIR__;
$localDir = $baseDir . '/public/img/aws-images';
$s3Prefix = 'https://wgeeks-site.s3.ap-south-1.amazonaws.com/';

function downloadUrl($url, $saveTo) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
    // Set timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $content = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode >= 200 && $httpCode < 300 && $content) {
        file_put_contents($saveTo, $content);
        return true;
    }
    return false;
}

$missingImages = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($baseDir . '/resources/views'));
foreach ($iterator as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), '.blade.php')) {
        $content = file_get_contents($file->getPathname());
        if (preg_match_all('#/img/aws-images/([^"\'\)\s]+)#', $content, $matches)) {
            foreach ($matches[1] as $img) {
                $localPath = $localDir . '/' . $img;
                if (!file_exists($localPath)) {
                    $missingImages[$img] = true;
                }
            }
        }
    }
}

$missingImages = array_keys($missingImages);
echo "Found " . count($missingImages) . " missing images.\n";

$downloadedCount = 0;
foreach ($missingImages as $img) {
    $localPath = $localDir . '/' . $img;
    
    // Try root
    if (downloadUrl($s3Prefix . $img, $localPath)) {
        echo "Downloaded: $img (from root)\n";
        $downloadedCount++;
        continue;
    }
    
    // Try Blogs/
    if (downloadUrl($s3Prefix . 'Blogs/' . $img, $localPath)) {
        echo "Downloaded: $img (from Blogs/)\n";
        $downloadedCount++;
        continue;
    }
    
    // Try blogs/
    if (downloadUrl($s3Prefix . 'blogs/' . $img, $localPath)) {
        echo "Downloaded: $img (from blogs/)\n";
        $downloadedCount++;
        continue;
    }
    
    // Try URL decoding the string in case it has %20
    $decodedImg = urldecode($img);
    if ($decodedImg !== $img) {
        if (downloadUrl($s3Prefix . $decodedImg, $localPath)) {
            echo "Downloaded URL-decoded: $img\n";
            $downloadedCount++;
            continue;
        }
    }
    
    // Try replacing + with space in url
    $spacedImg = str_replace('+', ' ', $img);
    if ($spacedImg !== $img) {
        // AWS expects spaces as %20
        $awsUrlSpaced = $s3Prefix . rawurlencode($spacedImg);
        if (downloadUrl($awsUrlSpaced, $localPath)) {
            echo "Downloaded spaced: $img\n";
            $downloadedCount++;
            continue;
        }
    }
    
    echo "FAILED to download: $img\n";
}

echo "Successfully downloaded $downloadedCount images.\n";
