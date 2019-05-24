<?php
    $fileUrl = time().'.'.pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['file']['tmp_name'],$fileUrl);
    echo 1;
?>