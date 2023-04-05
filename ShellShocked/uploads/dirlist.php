    <?php
    $dir = 'uploads/';
    $files = scandir($dir);
    echo "Directory contents: \n";
    print_r($files);
    ?>