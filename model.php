<?php

require_once "connect.php";


function addComment($name, $email, $note)
{
    /** @var PDO $pdo */
    $pdo = $GLOBALS["PDO"];
    $stmt = $pdo->prepare("INSERT INTO comments (id,first_name, email, note) VALUES (?,?,?,?)");
    $stmt->execute(array($pdo->lastInsertId(),
        $name,
        $email,
        $note));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllNotes()
{
    /** @var \PDO $pdo */
    $pdo = $GLOBALS["PDO"];
    $query = "SELECT id,note FROM comments";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $notes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $notes;
}

function delete($id)
{
    /** @var PDO $pdo */
    $pdo = $GLOBALS["PDO"];
    $query = "DELETE id,notes_name FROM notes WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array("id" => $id));

}

function noteUpdate($note_id, $new_note){

    /** @var PDO $pdo */
    $pdo = $GLOBALS["PDO"];

    $query = "UPDATE comments SET note = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array($new_note, $note_id));
    return $new_note;
}