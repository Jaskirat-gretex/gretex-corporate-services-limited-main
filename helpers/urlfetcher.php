<?php
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
                 || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];

    // This will give something like '/Gretex Corporate main/' or '/' on live
    $projectDir = '';
    if (strpos($host, 'localhost') !== false) {
        // Only for localhost, extract the first directory from SCRIPT_NAME
        $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
        $parts = explode('/', trim($scriptDir, '/'));
        if (!empty($parts)) {
            $projectDir = '/' . $parts[0] . '/';
        }
    } else {
        $projectDir = '/';
    }

    return $protocol . $host . $projectDir;
}
?>

