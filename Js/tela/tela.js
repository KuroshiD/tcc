const heightTela = screen.height;
const contentMain = document.querySelector(".container-main");
const contentBack = document.querySelector(".back");
const contentInterface = document.querySelector(".interface").clientHeight;

const verificaTela = () => {
    if (contentInterface < heightTela) {
        contentBack.style.height = heightTela + "px";
        contentMain.style.height = "100%";
    } else if(contentInterface > heightTela){
        contentBack.style.height = "100%";
    }
}

window.onload = setInterval(verificaTela(), 100)

