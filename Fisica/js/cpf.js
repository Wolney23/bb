String.prototype.replaceAll = function (find, replace) {
    var str = this;
    return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
};

function checkCPF() {
    var Soma;
    var Resto;
    Soma = 0
	
	var strCPF = $("#cpf").val();
	strCPF = strCPF.replaceAll('.', '');
	strCPF = strCPF.replaceAll('-', '');
			
	if (strCPF == "00000000000") return false;
    
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
	
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function ucfirst (str) {
  str += ''
  var f = str.charAt(0)
    .toUpperCase()
  return f + str.substr(1)
}

// function TestaCPF(elemento) {
//   cpf = elemento.value;
//   cpf = cpf.replace(/[^\d]+/g, '');
//   if (cpf == '') return elemento.style.borderColor = "red";
  
//   if (cpf.length != 11 ||
//     cpf == "00000000000" ||
//     cpf == "11111111111" ||
//     cpf == "22222222222" ||
//     cpf == "33333333333" ||
//     cpf == "44444444444" ||
//     cpf == "55555555555" ||
//     cpf == "66666666666" ||
//     cpf == "77777777777" ||
//     cpf == "88888888888" ||
//     cpf == "99999999999")
//     return elemento.style.borderColor = "red";
  
//   add = 0;
//   for (i = 0; i < 9; i++)
//     add += parseInt(cpf.charAt(i)) * (10 - i);
//   rev = 11 - (add % 11);
//   if (rev == 10 || rev == 11)
//     rev = 0;
//   if (rev != parseInt(cpf.charAt(9)))
//     return elemento.style.borderColor = "red";
  
//   add = 0;
//   for (i = 0; i < 10; i++)
//     add += parseInt(cpf.charAt(i)) * (11 - i);
//   rev = 11 - (add % 11);
//   if (rev == 10 || rev == 11)
//     rev = 0;
//   if (rev != parseInt(cpf.charAt(10)))
//    return elemento.style.borderColor = "red";
//   return elemento.style.borderColor = "#e1e3e7";
// }