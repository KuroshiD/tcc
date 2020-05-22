setTimeout(function() {
    window.location.reload(1);
}, 50000);

if(innerWidth < 935){

    $(".menu-verifica").click(function(){
        $(".menu-mobile").toggleClass("menu-mobile-abriu");
    });

    $(document).on('click', '.link-item', function(){
         $(this).addClass('active-link').siblings().removeClass('active-link')
    })

}else{

    $(".menu-verifica").click(function(){
        var novaURL = "Perfil-user.php";
        $(window.document.location).attr('href',novaURL);
    });

}


