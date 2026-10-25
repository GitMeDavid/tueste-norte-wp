const botonCatas = document.querySelector("#boton-catas");
const infoCata = document.querySelector("#info-cata");

infoCata.hidden = true;

botonCatas.addEventListener("click", function () {
    infoCata.hidden = false;

});