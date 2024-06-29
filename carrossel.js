function slide1(){
    document.getElementById('a').src="img/puma.jpg";
    setTimeout("slide2()", 2000)
}

function slide2(){
    document.getElementById('a').src="img/nike.jpg";
    setTimeout("slide3()", 2000)
}

function slide3(){
    document.getElementById('a').src="img/xbox.png";
    setTimeout("slide1()", 2000)
}