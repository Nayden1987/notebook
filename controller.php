<?php
session_start();

require_once "model.php";

if (isset($_POST["submit"])) {
    $note = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    addComment($name, $email, $note);
    include "main.php";
}

function showAllNotes(){
    $notes = [];
    $notes = getAllNotes();
    return $notes;
}
