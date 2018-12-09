// navbar
function navbar() {
    var x = document.getElementById("top-nav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
// header
