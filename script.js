const wrappen= document.querySelector('.wrappen');
const loginLink= document.querySelector('.login-link');
const registerLink= document.querySelector('.register-link');
const btnPopup= document.querySelector('.btnLogin-popup');
const iconClose= document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=>{
    wrappen.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    wrappen.classList.remove('active');
});

btnPopup.addEventListener('click', ()=>{
    wrappen.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=>{
    wrappen.classList.remove('active-popup');
});
