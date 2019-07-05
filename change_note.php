<?php

session_start();
require_once "model.php";

$new_note = noteUpdate($_POST["id"], $_POST["new_note"]);
$result["new_note"] = $new_note;
echo json_encode($result);
