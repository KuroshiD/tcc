$(".icon-none").click(function(){
    $(".menu-mobile").toggleClass("menu-mobile-abriu");
});

$(document).on('click', '.link-item', function(){
    $(this).addClass('active-link').siblings().removeClass('active-link')
})

$(".img").click( 
    function () {
        $(".menuzinho-hover").toggleClass("hover-efeito");
    },
);


// $(".menu-verifica").click(function(){
//     var novaURL = "../user/Perfil-user.php";
//     $(window.document.location).attr('href',novaURL);
// });

// $(".sair").click(function(){
//     var novaURL = "./processos/user/logout.php";
//     $(window.document.location).attr('href',novaURL);
// });



