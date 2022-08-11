var categories=0;
var subcategories=1;
function genera_categoria() {
  subcategories=1;
  var body = document.getElementsByTagName("body")[0];
  var tabla   = document.getElementById("table");
  var tblBody = document.createElement("tbody");
  var celda = document.createElement("td");
  var textoCelda = document.createTextNode(categories+1);
  var hilera = document.createElement("tr");
  celda.appendChild(textoCelda);
  hilera.appendChild(celda);
  categories=categories+1;
    for (var j = 0; j <4; j++) {
      var celda = document.createElement("td");
      var textoCelda = document.createElement("input");
      textoCelda.setAttribute("type", "text");
      textoCelda.setAttribute("name", categories+"."+subcategories+'id');
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");
}

function genera_name() {
  var body = document.getElementsByTagName("body")[0];
  var tabla   = document.getElementById("table");
  var tblBody = document.createElement("tbody");
  var celda = document.createElement("td");
  var textoCelda = document.createTextNode("Titulo1");
  var hilera = document.createElement("tr");
  celda.appendChild(textoCelda);
  hilera.appendChild(celda);


      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Texto2");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);


      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Texto3");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Texto4");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Texto5");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    

  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");

}

function genera_subcategoria() {
  if (!categories == 0){
  var body = document.getElementsByTagName("body")[0];
  var tabla   = document.getElementById("table");
  var tblBody = document.createElement("tbody");
  var celda = document.createElement("td");
  var textoCelda = document.createTextNode(categories+"."+subcategories);
  var hilera = document.createElement("tr");
  celda.appendChild(textoCelda);
  hilera.appendChild(celda);
  hilera.setAttribute("id", categories+"."+subcategories+'id');
  subcategories=subcategories+1;
    for (var j = 0; j <4; j++) {
      var celda = document.createElement("td");
      var textoCelda = document.createElement("input");
      textoCelda.setAttribute("type", "text");
      textoCelda.setAttribute("name", categories+"."+subcategories+'id');
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");
  }
}

// function send() { 
//   var tabla   = document.getElementById("table");
//   print_r($_POST[tabla]);
//   }


