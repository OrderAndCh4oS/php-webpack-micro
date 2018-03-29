<?php
/**
 * @param string $file eg main.js or main.css
 * @return string
 */
function assets($file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $fileName = pathinfo($file, PATHINFO_FILENAME);
    $re = "/{$fileName}\..*?\.{$ext}/";

    $file = json_decode(file_get_contents(__DIR__.'/../assets/manifest.json'));
    if(is_array($file->$fileName)) {
        foreach($file->$fileName as $x) {
            preg_match($re, $x, $matches);
            if ($matches) {
                return $matches[0];
            }
        }
    }

    return $file->$fileName;
}
