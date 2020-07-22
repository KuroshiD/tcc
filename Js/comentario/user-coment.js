var teste = 0;
window.onload = window.setInterval(function () {
    if (this.innerWidth >= 820 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 420;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    } else if (innerWidth >= 720 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 350;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    } else if (innerWidth >= 620 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 300;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    } else if (innerWidth >= 520 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 250;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    } else if (innerWidth >= 420 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 180;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    } else if (innerWidth >= 320 && (teste == 0 || teste != this.innerWidth)) {
        var leiamais_limit = 115;
        $(document).ready(() => {
            $('.leiamais').each(function () {
                var html = $(this).html();
                if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + '<a href="#" class="leiamais-btn">... leia mais</a><span class="leiamais-tail">' + html.substring(leiamais_limit) + '</span>');
            })
        })
        teste = this.innerWidth;
    }
}, 100);