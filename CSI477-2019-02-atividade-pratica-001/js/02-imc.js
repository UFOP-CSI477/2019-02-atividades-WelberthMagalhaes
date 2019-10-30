function calcular() {
  let campoPeso = document.getElementById("peso");
  let campoAltura = document.getElementById("altura");

  if (validar(campoPeso, "alerta1") && validar(campoAltura, "alerta2")) {
    let imc = calculaIMC(campoPeso.value, campoAltura.value);

    classification(imc, campoAltura.value);
  }
}

function calculaIMC(peso, altura) {
  return peso / (altura * altura);
}

function calculaPeso(imc, altura) {
  return imc * (altura * altura);
}

function classification(imc, altura)
{
  let resultado = document.getElementById("modalResultado");
  let string = "Sua faixa de peso ideal é: ";
  let pesoIdeal1 = 0;
  let pesoIdeal2 = 0;

  if(imc<18.5)
  {//subnutrição
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  SUBNUTRIÇÃO!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-secondary");
    //exibir modal
    $("#modalResultado").modal();


  }else if (imc>=18.5 && imc<25)
  {//peso saudável
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  PESO SAUDÁVEL!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-success");

    //exibir modal
    $("#modalResultado").modal();

  }else if (imc>=25 && imc<30)
  {//sobrepeso
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  SOBREPESO!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-warning");
    //exibir modal
    $("#modalResultado").modal();

  }else if (imc>=30 && imc<35)
  {//Obesidade grau 1
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  OBESIDADE GRAU 1!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-danger");
    //exibir modal
    $("#modalResultado").modal();

  }else if (imc>=35 && imc<40)
  {//Obesidade grau 2
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  OBESIDADE GRAU 2!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-danger");
    //exibir modal
    $("#modalResultado").modal();

  }else
  {//Obesidade grau 3
    //calculando faixa de peso pesoIdeal
    pesoIdeal1 = calculaPeso(18.5, altura);
    pesoIdeal2 = calculaPeso(24.9, altura);
    //definir título do modal
    document.getElementById("modalTitulo").innerHTML = "IMC: ".concat(imc.toFixed(2)).concat("  OBESIDADE GRAU 3!");
    //definir texto do corpo do modal
    document.getElementById("modalCorpo").innerHTML = string.concat(pesoIdeal1.toFixed(2)).concat(" - ").concat(pesoIdeal2.toFixed(2));
    //cor do texto modal
    document.getElementById("modalContent").classList.add("text-danger");
    //exibir modal
    $("#modalResultado").modal();

  }
}
//LIMPAR CAMPOS AO FECHAR O MODAL
function clean(){
  let peso = document.getElementById("peso");
  let altura = document.getElementById("altura");
  let modalContent = document.getElementById("modalContent");
  peso.value = "";
  peso.classList.remove("is-valid");
  altura.value = "";
  altura.classList.remove("is-valid");
  modalContent.classList.remove("text-secondary");
  modalContent.classList.remove("text-success");
  modalContent.classList.remove("text-warning");
  modalContent.classList.remove("text-danger");

}

function validar(campo, alerta){
  let n = campo.value;

  if (n.length == 0) {
    //ERRO
    //Exibir alerta:
    document.getElementById(alerta).style.display = "block";

    //Reporte o campo como inválido
    campo.classList.add("is-invalid");

    //Reportar o label como inválido/atenção
    //document.getElementById(label).classList.add("text-danger");

    //Finalizar
    campo.value = "";
    campo.focus();
    return false;
  }

  //Ocultar alerta
  document.getElementById(alerta).style.display = "none";
  //Remover alert-danger do campo e adicionar alert-success
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");

  //document.getElementById(label).classList.remove("text-danger");
  //document.getElementById(label).classList.add("text-success");

  //Correto
  return true;
}
