<?php

include_once('../database/connect.php');
include_once('../database/types.php');
?>

<?php
$result = getAllTypes();
echo json_encode($result);
?>
