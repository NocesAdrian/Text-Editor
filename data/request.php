<?php

function isExist($filename, &$arr) {
    if (in_array($filename, $arr)) {
        return false;
    } else {
        $arr[] = $filename;
        return json_encode($arr);
    }
}


function sanitize_filename($filename) {
    
    // Remove any leading or trailing spaces
    $filename = trim($filename);

    // Replace any non-alphanumeric characters with an underscore
    $filename = preg_replace('/[^a-zA-Z0-9-_\.]/', '_', $filename);

    // Remove any double underscores or similar patterns
    $filename = preg_replace('/_{2,}/', '_', $filename);

    // Optionally, convert to lowercase (to avoid case issues on different OSes)
    $filename = strtolower($filename);

    // add .txt if it doesnt contain extension and if input is not empty
    if (empty($filename) !== true && strpos($filename, ".") === false) {
        $filename = $filename.".txt";
    } else if(empty($filename)) {
        $filename = 'untitled.txt';
    }

    return $filename;
}


if($_SERVER['REQUEST_METHOD'] === "POST") {
    $filename = $_POST['filename'];
    $content = $_POST['content'];

    $filename = sanitize_filename($filename);

    $filePath = "data/files/"."/".$filename;

    $file = fopen($filePath, "w");
    fwrite($file, $content)

}
?>