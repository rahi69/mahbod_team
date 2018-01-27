<?php
$escape = new functions();
$id = $_GET['id'];
$escape->escape_string($id);

$sql = "DELETE FROM tbl_article WHERE id_article= '{$id}'";
$escape->query($sql);



