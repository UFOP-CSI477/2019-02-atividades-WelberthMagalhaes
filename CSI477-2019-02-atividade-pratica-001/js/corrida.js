var largadas = [];
var nomes = [];
var tempos = [];

function addCompetidor() {
  let largada = document.dados.pLargada.value;
  let nome = document.dados.nomeCompetidor.value;
  let tempo = document.dados.tempo.value;



  //adicionando competidor na lista de competidores
  largadas.push(largada);
  nomes.push(nome);
  tempos.push(tempo);

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
