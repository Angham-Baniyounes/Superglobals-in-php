<?php
    if (isset($_POST['url'])) {
        $URL = $_POST['url'];
        header("Location:$URL");
    }
?>