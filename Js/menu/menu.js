let verificacao = document.querySelector(".verificacao");
let menu = document.querySelector(".container-menu");

verificacao.addEventListener('click', function () {
    menu.classList.toggle("menu-abriu");
});

let descendentes = document.querySelectorAll(".link-item");

for (var i = 0; i < descendentes.length; i++) {
    descendentes[i].addEventListener("click", function (e) {
        alert('O elemento clicado foi o ' + this.innerHTML);
    })
}