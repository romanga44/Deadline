var modal = document.getElementById('Modal');
var button = document.getElementById("Btn");
var spanish = document.getElementsByClassName("close")[0];
button.onclick = function() {
    modal.style.display = "block";
}
spanish.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}