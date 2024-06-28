function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var feedback = document.getElementById("feedback").value;
    var rating = document.getElementById("rating").value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (email == "") {
        alert("Email must be filled out");
        return false;
    }

    if (feedback == "") {
        alert("Feedback must be filled out");
        return false;
    }

    if (rating < 1 || rating > 5) {
        alert("Rating must be between 1 and 5");
        return false;
    }
}