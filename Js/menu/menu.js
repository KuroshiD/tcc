


$(".icon-none").click(function(){
    $(".menu-mobile").toggleClass("menu-mobile-abriu");
});

$(document).on('click', '.link-item', function(){
    $(this).addClass('active-link').siblings().removeClass('active-link')
})


$(".menu-verifica").click(function(){
    var novaURL = "../user/Perfil-user.php";
    $(window.document.location).attr('href',novaURL);
});




