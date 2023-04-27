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

function validaForm() {
    if (controllaPassword()) {
        var remember = document.getElementById("rmb").checked;
        if (remember) {
            window.alert("Hai scelto di essere ricordato per i prossimi accessi");
        }
        else {
            window.alert("Hai scelto di non essere ricordato per i prossimi accessi");
        }
    }
    else return false;
}

function controllaPassword() {
    var x = 0;
    var password = document.getElementById('paswd').value;
    var bar = document.getElementById("bar");
    var al = document.getElementById("alert");
    var check1=/[0-9]/;
    if(!check1.test(password)){
        alert("La password deve contenere almeno un numero");
        return false;
    }
    var check2=/[a-z]/;
    if(!check2.test(password)){
        alert("La password deve contenere almeno un carattere minuscolo");
        return false;
    }
    var check3=/[A-Z]/;
    if(!check3.test(password)){
        alert("La password deve contenere almeno un carattere maiuscolo");
        return false;
    }
    var check4=/[$-/:-?{-~!"^_`\[\]]/;
    if(!check4.test(password)){
        alert("La password deve contenere almeno un carattere speciale");
        return false;
    }
    if(!(password.length >= 8)){
        alert("La password deve essere lunga almeno 8 caratteri");
        return false;
    }
    return true;
}

function sicurezzaPassword() {
    var x = 0;
    var password = document.getElementById('paswd').value;
    var b = document.getElementById("b");
    var a = document.getElementById("a");

    var check1=/[0-9]/;
    if(check1.test(password)){
        x = x + 20;
    }
    var check2=/[a-z]/;
    if(check2.test(password)){
        x = x + 20;
    }
    var check3=/[A-Z]/;
    if(check3.test(password)){
        x = x + 20;
    }
    var check4=/[$-/:-?{-~!"^_`\[\]]/;
    if(check4.test(password)){
        x = x + 20;
    }
    if(password.length >= 8){
        x = x + 20;
    }

    b.style.width = x + "%";
    if (x == 100) {
        b.style.backgroundColor = "green";
        a.innerHTML = "Molto forte";
    }
    if (x >60) {
        b.style.backgroundColor = "green";
        a.innerHTML = "Forte";
    }
    if (x <=40) {
        b.style.backgroundColor = "yellow";
        a.innerHTML = "Buona";
    }
    if (x <=20) {
        b.style.backgroundColor = "red";
        a.innerHTML = "Debole";
    }

    if(password.length == 0){
        x == 0;
        a.innerHTML = "";
    }

    var check5=/\s\S/;
    if(check5.test(password)){
        a.innerHTML = "Password must not contain white spaces";
        b.style.backgroundColor = "red";
    }
}

function Mostra() {
    var input = document.getElementById('paswd');
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }