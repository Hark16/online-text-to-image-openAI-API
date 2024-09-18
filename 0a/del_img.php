<?php

// Set the path to your images folder
$imagesFolder = './images';

// Check if the folder exists
if (is_dir($imagesFolder)) {

    // Check for existing zip files and delete them
    $existingZipFiles = glob('*.zip');
    foreach ($existingZipFiles as $zipFile) {
        unlink($zipFile);
    }

    // Create a zip file with the current date as the name
    $zipFileName = 'images_' . date('Y-m-d') . '.zip';
    $zip = new ZipArchive();
    if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {

        // Open the images folder
        $dir = opendir($imagesFolder);

        // Add each image to the zip file
        while (($file = readdir($dir)) !== false) {
            if ($file != '.' && $file != '..') {
                $filePath = $imagesFolder . '/' . $file;
                $zip->addFile($filePath, $file);
            }
        }

        // Close the images folder
        closedir($dir);

        // Close the zip file
        $zip->close();

        // Set headers for download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
        header('Content-Length: ' . filesize($zipFileName));
        ob_clean();
        flush();
        readfile($zipFileName);

        // Delete the zip file
        unlink($zipFileName);

        // Delete all images from the folder
        $dir = opendir($imagesFolder);
        while (($file = readdir($dir)) !== false) {
            if ($file != '.' && $file != '..') {
                $filePath = $imagesFolder . '/' . $file;
                unlink($filePath);
            }
        }
        closedir($dir);

        echo "Images downloaded, folder emptied, and zip file deleted successfully.";

    } else {
        echo "Failed to create zip file.";
    }

} else {
    echo "Images folder not found.";
}

?>
<script>
window.location.assign('https://texttoimagepro.com/my_space/index.php');
</script>

