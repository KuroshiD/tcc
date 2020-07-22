$(document).ready(function () {
    
    var abaAtual = "#aba_1";
    $("div.aba:not("+abaAtual+")").hide();
    $(abaAtual).show();
    
    $(document).on('click', '.btns-interacoes', function () {
        $(this).addClass('active').siblings().removeClass('active');

        $(abaAtual).hide();
        abaAtual = $(this).attr("href");
        $(abaAtual).show();
    
    });
});