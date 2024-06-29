let carrosselIndex = 0;
mostrarCarrossel();

function mostrarCarrossel() {
    let i;
    let slides = document.getElementsByClassName("meuCarrossel");
    let bolinhas = document.getElementsByClassName("bola");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    carrosselIndex++;
    if (carrosselIndex > slides.length) {carrosselIndex = 1}
    for (i = 0; i < bolinhas.length; i++) {
        bolinhas[i].className = bolinhas[i].className.replace(" ativo", "");
    }
    slides[carrosselIndex-1].style.display = "block";
    bolinhas[carrosselIndex-1].className += " ativo";
    setTimeout(mostrarCarrossel, 2000);
}