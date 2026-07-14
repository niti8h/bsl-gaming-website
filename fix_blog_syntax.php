<?php
$files = glob('resources/views/blog/*.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, '{{ route(\'contact.submit\') }}') !== false || strpos($content, '@csrf') !== false) {
        $content = str_replace('{{ route(\'contact.submit\') }}', '<?php echo route(\'contact.submit\'); ?>', $content);
        $content = str_replace('@csrf', '<?php echo csrf_field(); ?>', $content);
        file_put_contents($file, $content);
    }
}
echo "Done fixing blog syntax";
