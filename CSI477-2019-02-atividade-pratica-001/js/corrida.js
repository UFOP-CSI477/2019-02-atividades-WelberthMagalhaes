var largadas = [];
var nomes = [];
var tempos = [];
var auxTempos = [];
var largada = 0;
var posicao = 1;

function addCompetidor() {
  let n1 = document.dados.nomeCompetidor
  //let n2 = document.dados.pLargada
  let n3 = document.dados.tempo
  //validar(n2, "alerta2", "labelLargada") &&
  if (largada >= 6) {
    alert("Máximo de 6 competidores já atingido!!");
    return;
  }
  if (validar(n1, "alerta1", "labelCompetidor") && validar(n3, "alerta3", "labelTempo")) {

    //let largada = document.dados.pLargada.value;
    largada += 1;
    let nome = document.dados.nomeCompetidor.value;
    let tempo = document.dados.tempo.value;

    //adicionando competidor na lista de competidores
    largadas.push(largada);
    nomes.push(nome);
    tempos.push(tempo);
    auxTempos.push(tempo);

    //criar elementos
    var linha = document.createElement("tr");
    var campoLargada = document.createElement("td");
    var campoNome = document.createElement("td");
    var campoTempo = document.createElement("td");

    //Criar nós e vincular aos elementos
    campoLargada.appendChild(document.createTextNode(largada));
    campoNome.appendChild(document.createTextNode(nome));
    campoTempo.appendChild(document.createTextNode(tempo));
    linha.appendChild(campoLargada);
    linha.appendChild(campoNome);
    linha.appendChild(campoTempo);
    document.getElementById("corpoTabelaLargada").appendChild(linha);
  }
}

function validar(campo, alerta, label) {
  let n = campo.value;

  if (n.length == 0) {
    //ERRO
    //Exibir alerta:
    document.getElementById(alerta).style.display = "block";

    //Reporte o campo como inválido
    campo.classList.add("is-invalid");

    //Reportar o label como inválido/atenção
    document.getElementById(label).classList.add("text-danger");

    //Finalizar
    campo.value = "";
    campo.focus();
    return false;
  }

  document.getElementById(alerta).style.display = "none";
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");

  document.getElementById(label).classList.remove("text-danger");
  document.getElementById(label).classList.add("text-success");

  //Correto
  return true;
}

function resultado()
{
  //Se a tabela estiver vazia não aparecerá resultado
  if (largadas.length == 0)
  {
    alert("Insira os competidores!!");
  } else
  {
    console.log("auxTempos: ", auxTempos);
    auxTempos.sort(function(a, b) {
      return a - b;
    });
    console.log("auxTemposOrder: ", auxTempos);

    auxTempos.forEach(function(elemento){

      let pos = tempos.indexOf(elemento);
      //corrigir indice de nomes iguais. x = 0; entrou adiciona 1;

      //criar elementos
      var linha2 = document.createElement("tr");
      var campoPosicao = document.createElement("td");
      var campoLargada2 = document.createElement("td");
      var campoNome2 = document.createElement("td");
      var campoTempo2 = document.createElement("td");
      var campoResultado = document.createElement("td");

      //Criar nós e vincular os elementos
      if (auxTempos[0] == tempos[pos]) { //Condicional para adicionar corretamente os vencedores em caso de empate
        campoPosicao.appendChild(document.createTextNode(posicao));
        campoResultado.appendChild(document.createTextNode("Vencedor(a) !"));
      } else {
        posicao += 1;
        campoPosicao.appendChild(document.createTextNode(posicao));
        campoResultado.appendChild(document.createTextNode("--"));
      }

      campoLargada2.appendChild(document.createTextNode(largadas[pos]));
      campoNome2.appendChild(document.createTextNode(nomes[pos]));
      campoTempo2.appendChild(document.createTextNode(tempos[pos]));
      linha2.appendChild(campoPosicao);
      linha2.appendChild(campoLargada2);
      linha2.appendChild(campoNome2);
      linha2.appendChild(campoTempo2);
      linha2.appendChild(campoResultado);

      document.getElementById("corpoTabelaResultado").appendChild(linha2);

    });
  }

  document.getElementById("home").style.display = "none";
  document.getElementById("tabelaResultado").style.display = "block";

}

function voltar()
{
  document.getElementById("home").style.display = "block";
  document.getElementById("tabelaResultado").style.display = "none";
}
