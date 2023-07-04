function cargar(){
    document.location.reload();
}
function comprobar() {
    var contador =0;
    if($('#check1').prop('checked')){
        contador = contador + 1;
    }
    if($('#check2').prop('checked')){
        contador = contador + 1;
    }
    if($('#check3').prop('checked')){
        contador = contador + 1;
    }
    if($('#check4').prop('checked')){
        contador = contador + 1;
    }
    if($('#check5').prop('checked')){
        contador = contador + 1;
    }
    if($('#check6').prop('checked')){
        contador = contador + 1;
    }
    if($('#check7').prop('checked')){
        contador = contador + 1;
    }
    if($('#check8').prop('checked')){
        contador = contador + 1;
    }
    $('#aciertos').text(contador + " / 8");
    contador = 0;
}
