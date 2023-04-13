function createTask() {
    var inputText = document.getElementById("input-text").value;
    window.location.href = "./createATask.php?nameTask=" + encodeURIComponent(inputText);
}

