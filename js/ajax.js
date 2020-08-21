function guardarL(a1, a2, a3, a4, a5, a6, a7, a8, a9, a0) {
    if (a1 == "" || a2 == "" || a3 < 1 || a4 < 1 || a5 < 1 || a6 < 1 || a7 < 1 || a8 < 1 || a9 == "" || a0 == "") {
        alert("Llenar Bien Por Favor :)");
    } else {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("todo").innerHTML = this.responseText;
            }
            if (this.status === 404) {
                alert('PAGINA NO ENCONTRADA');
            }
        };
        xhttp.open("GET", "guardarL.php?a=" + a1 + "&s=" + a2 + "&d=" + a3 + "&f=" + a4 + "&g=" + a5 + "&h=" + a6 + "&j=" + a7 + "&k=" + a8 + "&l=" + a9 + "&p=" + a0, true);
        xhttp.send();
    }

}


function iniciarsecion() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('iniciar').style.display = 'block';
            document.getElementById("iniciar").innerHTML = this.responseText;
        }
        if (this.status === 404) {
            alert('PAGINA NO ENCONTRADA');
        }
    };
    xhttp.open("GET", "php/nInicio.php", true);
    xhttp.send();
}

function registra() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('iniciar').style.display = 'block';
            document.getElementById("iniciar").innerHTML = this.responseText;
        }
        if (this.status === 404) {
            alert('PAGINA NO ENCONTRADA');
        }
    };
    xhttp.open("GET", "php/Registrar.php", true);
    xhttp.send();
}

function secion(a1,a2) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('iniciar').style.display = 'block';
            document.getElementById("quienes").innerHTML = this.responseText;
        }
        if (this.status === 404) {
            alert('PAGINA NO ENCONTRADA');
        }
    };
    xhttp.open("GET", "php/es.php?a=" + a1 + "&s=" + a2 , true);
    xhttp.send();
}
  function actu() {
location.href ="index.html";        
    }
function porfin(a1, a2, a3, a4, a5) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("registrado").innerHTML = this.responseText;
        }
        if (this.status === 404) {
            alert('PAGINA NOo ENCONTRADA');
        }
    };
    xhttp.open("GET", "php/guardarP.php?a=" + a1 + "&s=" + a2 + "&d=" + a3 + "&f=" + a4 + "&g=" + a5, true);
    xhttp.send();

}
function ya(a1, a2, a3, a4, a5) {
    if (a1 == "" || (a2 < 1 && a2 > 9999999999) || a3 == "" || a4 == "" || (a3 < 1 && a3 > 9999999999)) {
        alert("LLEnar Los Campos");
    } else {
        var filter6 = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
        if (filter6.test(a1)) {
            if ((!/^([0-9])*$/.test(a2) || a2 == "" || a2 == " ")) {
                alert("Cedula no Lleva Letras Ni Signo");
            } else {
                if (a2 > 1 && a2 < 9999999999) {
                    if ((!/^([0-9])*$/.test(a3) || a3 == "" || a3 == " ")) {
                        alert("Telefono no Lleva Letras Ni Signo");
                    } else {
                        if (a3 > 1 && a3 < 9999999999) {
                            if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(a4)) {
                                if (a3 == "" || a3 == " ") {
                                    alert("Clave Vacia");
                                } else {
                                    porfin(a1, a2, a3, a4, a5);
                                }
                            } else {
                                alert("La dirección de email es incorrecta.");
                            }
                        } else {
                            alert("Telefono Fuera De Rango");
                        }
                    }
                } else {
                    alert("Cedula Fuera De Rango");
                }
            }
        } else {
            alert("Los Nombre no Llevan Numero");
        }
    }
}
function intento(a1, a2) {
    if (a1 == " " || a1 == "" || a2 == "" || a2 == " "  ) {
        alert("LLEnar Los Campos");
    } else {
        if (/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(a1)) {
            if (a2.length < 2) {
                alert("La Clave es muy chica.");
            } else {
                secion(a1,a2);
                if(a1=="123@gmail.com" && a2=="123"){
                    location.href ="duenio.html";
                }
            }
        } else {
            alert("La dirección de email es incorrecta.");
        }
    }
}


////Ingresamos un mensaje a mostrar
//var mascota = prompt("¿Cuál es tu Clave?", (passward)"");
////Detectamos si el usuario ingreso un valor
//if (mascota == a){
//alert("Tu mascota favorita es " + mascota);
//}
////Detectamos si el usuario NO ingreso un valor
//else {
//alert("No has ingresado una mascota");
//}