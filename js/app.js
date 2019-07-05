function changeNote(id){
    var new_note = prompt("Enter your note : ", "your note here");
    fetch('change_note.php',{
        method: "POST",
        headers: {'Content-type': 'application/x-www-form-urlencoded'},
        body: 'id=' + id + '&new_note=' + new_note
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            var new_note = myJson.new_note;
            var td = document.getElementById("td-" + id);
            td.innerHTML = new_note;
        })
        .catch(function (e) {
            alert(e.message);
        })
}