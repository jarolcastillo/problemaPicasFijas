const buttonIniciar = document.querySelector("#btnIniciar");
const buttonValidar = document.querySelector("#btnValidar");
const input = document.querySelector("#number");
var numero = '0000';

buttonIniciar.addEventListener("click", (event) => {
    input.removeAttribute("readonly");
    $("#btnValidar").show();
    $("#btnIniciar").hide();
    $('#notasDelJuego').html('Buena Suerte');
    $.ajax({
        type: "POST",
        url: "ajax/ajax.php",
        data:{
            "peticion": "obtenerCodigo",
        },
        dataType: "json",
        success: function(data){
            if(data.response == "correct"){
                numero = data.info;
            }
        },
        error: function(data){
            console.log("Error generando numero");
        }
    });
});

buttonValidar.addEventListener("click", (event) => {
    if($("#number").val().length > 4){
        window.alert('el numero debe tener maximo 4 digitos.');
        return false;
    }
    if($("#number").val().length < 4){
        window.alert('el numero debe tener minimo 4 digitos.');
        return false;
    }
    $.ajax({
        type: "POST",
        url: "ajax/ajax.php",
        data:{
            "peticion": "compararNumero",
            "numeroInicial": numero,
            "numeroComparar": $("#number").val()
        },
        dataType: "json",
        success: function(data){
            if(data.response == "correct"){
                if(data.info == 'VICTORIA'){
                    input.setAttribute("readonly",true);
                    $("#btnValidar").hide();
                    $("#btnIniciar").show();
                }
                if($('#notasDelJuego').html() != ''){
                    $('#notasDelJuego').html($('#notasDelJuego').html()+'<br>'+data.info); 
                }else{
                   $('#notasDelJuego').html(data.info); 
                }
            }else{
                window.alert(data.info);
            }
        },
        error: function(data){
            console.log("Error validando numero");
        }
    });
});

