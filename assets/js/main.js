// Validation users
function validateForm() {
    var name = document.forms["userForm"]["name"].value;
    if (name == null || name == "") {
        alert("Name?");
        return false;
    }

    var nick = document.forms["userForm"]["nick"].value;
    if (nick == null || nick == "") {
        alert("Nickname?");
        return false;
    }

    var date = document.forms["userForm"]["date"].value;
    if (date == null || date == "") {
        alert("Birthday?");
        return false;
    }
}

function validateFormRecords() {
    var name = document.forms["recordForm"]["name_record"].value;
    if (name == null || name == "") {
        alert("Title?");
        return false;
    }

    var nick = document.forms["recordForm"]["recird"].value;
    if (nick == null || nick == "") {
        alert("Record?");
        return false;
    }

}
