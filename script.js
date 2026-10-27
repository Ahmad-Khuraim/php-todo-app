// checking emty task before submitting the FORM
document.getElementById("taskForm").addEventListener('submit', function(e) {
    var input = document.getElementById("taskInput");
    if (input.value.trim() === '') {
        e.preventDefault(); // form submission
        alert("Please enter a task before submitting.");
        input.focus(); // focus on the input field
    }
});



//confirmation before deleting a task
function confirmDelete() {
    return confirm("Are you sure you want to delete this task?");
}