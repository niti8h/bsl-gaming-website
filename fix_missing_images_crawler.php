<?php
$baseDir = __DIR__;
$localDir = $baseDir . '/public/img/aws-images';

function getUrlContent($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

echo "Fetching sitemaps...\n";
$sitemapIndex = getUrlContent('https://www.wagergeeks.com/sitemap_index.xml');
$sitemapUrls = [];
if (preg_match_all('/<loc>(.*?)<\/loc>/', $sitemapIndex, $matches)) {
    $sitemapUrls = $matches[1];
} else {
    $sitemapUrls = ['https://www.wagergeeks.com/page-sitemap.xml', 'https://www.wagergeeks.com/post-sitemap.xml'];
}

$pageUrls = [];
foreach ($sitemapUrls as $sitemapUrl) {
    echo "Fetching $sitemapUrl...\n";
    $sitemap = getUrlContent($sitemapUrl);
    if (preg_match_all('/<loc>(.*?)<\/loc>/', $sitemap, $matches)) {
        foreach ($matches[1] as $url) {
            $pageUrls[] = $url;
        }
    }
}

$pageUrls = array_unique($pageUrls);
echo "Found " . count($pageUrls) . " pages to scrape.\n";

$awsUrls = [];
foreach ($pageUrls as $i => $pageUrl) {
    // Only scrape a subset to avoid taking too long, or just do all
    echo "Scraping ($i/" . count($pageUrls) . "): $pageUrl\n";
    $html = getUrlContent($pageUrl);
    if (preg_match_all('/https:\/\/wgeeks-site\.s3\.ap-south-1\.amazonaws\.com\/[^"\'\)\s]+/', $html, $matches)) {
        foreach ($matches[0] as $url) {
            $awsUrls[$url] = true;
        }
    }
}

$awsUrls = array_keys($awsUrls);
echo "Found " . count($awsUrls) . " unique AWS URLs.\n";

$downloadedCount = 0;
foreach ($awsUrls as $url) {
    $basename = basename(parse_url($url, PHP_URL_PATH));
    $localPath = $localDir . '/' . $basename;
    
    if (!file_exists($localPath)) {
        echo "Downloading: $url\n";
        $content = getUrlContent($url);
        if ($content) {
            file_put_contents($localPath, $content);
            $downloadedCount++;
        } else {
            echo "Failed to download $url\n";
        }
    }
}

echo "Successfully downloaded $downloadedCount missing images.\n";
