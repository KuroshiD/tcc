let back_img = document.querySelector(".back");

setTimeout(back_img.addEventListener('load', function () {
    let width = window.innerWidth;
    console.log("ola")

    if(width >= 935){
        console.log("oi");
    }
}),3000)