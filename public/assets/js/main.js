function cartHover() {
    let menuBar = document.getElementById("menuBar");
    var overlay = document.getElementById("overlay")

    menuBar.classList.toggle("menuBarStyle");
    overlay.classList.toggle("overlayStyle");
}

function profileHover() {
    let profileBar = document.getElementById("profileBar");
    var overlay = document.getElementById("overlay")

    profileBar.classList.toggle("profileBarStyle");
    overlay.classList.toggle("overlayStyle");
}