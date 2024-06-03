<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = (string) $_POST['search'];
    $search = str_replace('../','',$search);
    include("/var/www/html/" .$search);
} else {
    echo "No file specified.";
}
?>
