<?php
// Handle remote upload
if (isset($_POST['fileName']) && isset($_POST['boardName']) && isset($_POST['extraName']) && $_POST['fileData']) {
// Save uploaded file
    $uploadDir = dirname(__FILE__) .'/../upload/'.$_POST['boardName'].'/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777);
    }
    $uploadDir .= $_POST['extraName'].'/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777);
    }
    file_put_contents($uploadDir . $_POST['fileName'], base64_decode($_POST['fileData']));

// Done
    echo "Success";
} else {
    echo 'Fail';
}