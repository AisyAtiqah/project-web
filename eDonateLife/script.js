function changeContent(id) {
    var i, content;
    content = document.getElementsByClassName("content-blood");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    document.getElementById(id).style.display = "flex";
}
function toggleColor(element) {
    element.classList.toggle('clicked');
}