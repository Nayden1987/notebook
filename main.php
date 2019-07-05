<?php
require_once "controller.php";

$notes = showAllNotes();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
</head>
<body>
<table id=table_with_notes cellspacing="0">
    <tr>
        <th>Notes</th>
        <th>Edit Note</th>
        <th>Delete Note</th>
    </tr>
    <?php
    foreach ($notes as $note) { ?>
        <tr>
            <td id="td-<?= $note["id"] ?>"><?php echo $note["note"]; ?></td>
            <td><button onclick="changeNote(<?php echo $note["id"]; ?>)">Change</button></td>
            <td><input type="submit" name="delete" value="Delete"></td>
    <?php } ?>

        </tr>

</table>
<br>
<button><a href="add_note.html">Add note</a></button>
<br>

</body>
</html>