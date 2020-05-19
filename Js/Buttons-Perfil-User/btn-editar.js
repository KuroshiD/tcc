let btn_editar = document.querySelector(".btn-editar");
let menu_editar = document.querySelector(".container-menu-editar");
let icon_sair = document.querySelector(".icon-sair");

btn_editar.addEventListener('click', function(){
    menu_editar.classList.remove("active-menu-none");
});

icon_sair.addEventListener('click', function(){
    menu_editar.classList.add("active-menu-none");
});