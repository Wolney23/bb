// BLOQUEIO DE TECLA 
window.onkeydown = function() {
    var key = event.keyCode || event.charCode || e.which;
    if(key==123){
        alert('Proibido copia deste site.'); return false;
    }
}
document.onmousedown=click;

// MASCARA INPUT
function mascaraMike(format, field){
    var result = "";
    var maskIdx = format.length - 1;
    var error = false;
    var valor = field.value;
    var posFinal = false;
    if( field.setSelectionRange ){
        if(field.selectionStart == valor.length)
            posFinal = true;
    }
    valor = valor.replace(/[^0123456789Xx]/g,'')
    for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx){
        var chr = valor.charAt(valIdx);
        var chrMask = format.charAt(maskIdx);
        switch (chrMask){
            case '#':
                if(!(/\d/.test(chr)))
                    error = true;
                result = chr + result;
                --valIdx;
                break;
            case '@':
                result = chr + result;
                --valIdx;
                break;
            default:
                result = chrMask + result;
        }
    }

    field.value = result;
    field.style.color = error ? 'red' : '';
    if(posFinal){
        field.selectionStart = result.length;
        field.selectionEnd = result.length;
    }
    return result;
}

// PULAR CAMPO AO PREENCHER
function pulacampo(idobj, idproximo){
    var str = new String(document.getElementById(idobj).value);
    var mx = new Number(document.getElementById(idobj).maxLength);
    if (str.length == mx){
        document.getElementById(idproximo).focus();
    }
}

// PERMITIDO APENAS NUMEROS
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 47 && tecla < 58))return true;
    else{
        if (tecla != 8) return false;
        else return true;
    }
}