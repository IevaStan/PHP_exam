<?php
$error = $_FILES['file']['error'];
if ($error !== UPLOAD_ERR_OK) {
    echo 'Error uploading file';
    die();
}
if (!is_dir('/database')) {
    mkdir('/database', 0777);
}
$fileName = $_POST['filename'];
$fileTmpPath = $_FILES['file']['tmp_name'];
$fileInfo = pathinfo($_FILES['file']['name']);
$fileExt = $fileInfo['extension'];
$fileStoragePath = sprintf('database/%s', $fileName . '.' . $fileExt);

if (move_uploaded_file($fileTmpPath, $fileStoragePath)) {
    echo 'File uploaded successfully!';
}
header("refresh:2;url=index.php");
