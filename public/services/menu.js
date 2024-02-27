var menuburger = document.getElementById("menu");
var liste = document.getElementById("list");
var chevron = document.getElementById("chevron");
var offres = document.getElementById("offres");


chevron.addEventListener("click",displaOffres);
function displaOffres(){
    if (offres.style.display === "none") {
        offres.style.display = "block";
    } else {
        offres.style.display = "none";
    }
}

menu.addEventListener("click",displaMenu);
function displaMenu(){
    if (list.style.display === "none") {
        list.style.display = "block";
    } else {
        list.style.display = "none";
    }
}

