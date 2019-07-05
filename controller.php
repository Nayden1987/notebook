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
   //$note["subject"] = $_POST["subject"];
    $notes = getAllNotes();
    return $notes;
}


//$new_note = changeNote($id, $_POST["note"]);
//$result["new_note"] = $new_note;
//echo json_encode($result);
//
//
//if(isset($_POST["delete"])){
//    if(delete($id)){
//        header("Location: main.php");
//    }
//    else{
//        echo "Error";
//    }
//}