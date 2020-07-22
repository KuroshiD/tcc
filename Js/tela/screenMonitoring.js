
const screen = () => {
    const heightTela = this.screen.height;
    const contentMain = document.querySelector(".container-main");
    const contentBack = document.querySelector(".back");
    const contentInterface = document.querySelector(".interface").clientHeight;
    
    if (contentInterface < heightTela) {
        contentBack.style.height = heightTela + "px";
        contentMain.style.height = "100%";
        alert('if')
    } else if (contentInterface > heightTela) {
        contentBack.style.height = heightTela + "px";
        contentMain.style.height = '100%'
        alert('else if')
    }
}
window.onload = setInterval(screen(), 100)