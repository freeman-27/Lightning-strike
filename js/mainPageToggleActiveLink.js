function toggleActiveClassMainPage(){

    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarCollapse");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("bg--main--link--active");
    current[0].className = current[0].className.replace(" bg--main--link--active", "");
    this.className += " bg--main--link--active";
    });
    }
}