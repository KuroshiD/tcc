let menu_verifica = document.querySelector(".menu-verifica");
let menu = document.querySelector(".container-menu");

menu_verifica.addEventListener('click', function () {
    menu.classList.toggle("menu-abriu");
});


let menu_links = document.querySelectorAll(".link-item");

for (var i = 0; i < menu_links.length; i++) {
    menu_links[i].addEventListener("click", function (e) {
        this.classList.toggle("active-link");
    })
}