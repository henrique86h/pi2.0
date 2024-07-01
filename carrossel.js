function mostrarHora(){
    var horario = new Date();
    var h = horario.getHours();
    var m = horario.getMinutes();
    var s = horario.getSeconds();

    // se quiser posso colocar periodo

    // var periodo = "AM";
    
    // if(h == 0){
    //     h = 12;
    // }
    
    // if(h > 12){
    //     h = h - 12;
    //     periodo = "PM";
    // }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var hora = h + ":" + m + ":" + s ; //+ " " + periodo; caso queira colocar am, pm
    document.getElementById("relogioDigital").innerText = hora;
    document.getElementById("relogioDigital").textContent = hora;
    
    setTimeout(mostrarHora, 1000);
    
}

mostrarHora();