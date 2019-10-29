var largada = 0;
var posicao = 1;
var competidores = [];

function criaCompetidor(name, time, start)
{
  var competidor =
  {
    nome: name,
    tempo: time,
    largada: start
  }
  return competidor;

}

function addCompetidor() {
  let n1 = document.dados.nomeCompetidor
  let n2 = document.dados.tempo

  if (largada >= 6) {
    alert("Máximo de 6 competidores já atingido!!");
    return;
  }
  if (validar(n1, "alerta1", "labelCompetidor") && validar(n2, "alerta3", "labelTempo")) {

    largada += 1;
    let nome = document.dados.nomeCompetidor.value;
    let tempo = document.dados.tempo.value;

    //adicionando competidor na lista de competidores
    competidores.push(criaCompetidor(nome, tempo, largada));

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

function resultado()
{
  //Se a tabela estiver vazia não aparecerá resultado
  if (competidores.length == 0)
  {
    alert("Insira os competidores!!");
  } else
  {
    competidores.sort(function(a, b) {
      return a.tempo - b.tempo;
    });
    console.log("Competidores: ", competidores);

    let aux = true;

    competidores.forEach(function(competidor){

      //criar elementos
      var linha2 = document.createElement("tr");
      var campoPosicao = document.createElement("td");
      var campoLargada2 = document.createElement("td");
      var campoNome2 = document.createElement("td");
      var campoTempo2 = document.createElement("td");
      var campoResultado = document.createElement("td");

      //Criar nós e vincular os elementos
      let pos = competidores.indexOf(competidor) - 1;
      if (aux)
      { //Condicional para adicionar corretamente os vencedores em caso de empate
        campoPosicao.appendChild(document.createTextNode(posicao));
        campoResultado.appendChild(document.createTextNode("Vencedor(a) !"));
        aux = false;
      } else if ( (competidor.tempo == competidores[pos].tempo) && (posicao == 1) )
      {//se o tempo do competidor foor igual ao primeiro adiciona como vencedor também
        campoPosicao.appendChild(document.createTextNode(posicao));
        campoResultado.appendChild(document.createTextNode("Vencedor(a) !"));
      }else
      {
        if(competidor.tempo != (competidores[pos].tempo) )
        {//Só vai incrementar a posição caso o tempo seja diferente. Assim pode haver empates em outras posições.
          posicao += 1;
        }
        campoPosicao.appendChild(document.createTextNode(posicao));
        campoResultado.appendChild(document.createTextNode("--"));
      }

      campoLargada2.appendChild(document.createTextNode(competidor.largada));
      campoNome2.appendChild(document.createTextNode(competidor.nome));
      campoTempo2.appendChild(document.createTextNode(competidor.tempo));
      linha2.appendChild(campoPosicao);
      linha2.appendChild(campoLargada2);
      linha2.appendChild(campoNome2);
      linha2.appendChild(campoTempo2);
      linha2.appendChild(campoResultado);

      document.getElementById("corpoTabelaResultado").appendChild(linha2);

    });
    document.getElementById("home").style.display = "none";
    document.getElementById("tabelaResultado").style.display = "block";
    document.getElementById("btnVoltar").style.display = "block";
  }
}

// function novaCorrida() {
//   largada = 0;
//   posicao = 1;
//   competidores = [];
// }

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
