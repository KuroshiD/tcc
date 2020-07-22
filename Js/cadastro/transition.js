const linkLogin = document.getElementById('login');
const linkCadastro = document.getElementById('cadastro');
const formCad = document.querySelector('.cadastro');
const fromLog = document.querySelector('.login');
const pLog = document.querySelector('.p-log');
const pCad = document.querySelector('.p-cad');

linkCadastro.addEventListener('click', () => {
    formCad.classList.remove("tudo-none");
    fromLog.classList.add("tudo-none");
    pLog.classList.add("tudo-none");
    pCad.classList.remove("tudo-none");
});

linkLogin.addEventListener('click', () => {
    formCad.classList.add("tudo-none");
    fromLog.classList.remove("tudo-none");
    pLog.classList.remove("tudo-none");
    pCad.classList.add("tudo-none");
});