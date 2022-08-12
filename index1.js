var categories=0;
var subcategories=1;
var catCurr = document.getElementById("numCats").value;
var currCat = 0;
$( "#form1" ).submit(function() {
  loadJson();
});

function genera_categoria() {
  catCurr =  Number(catCurr + 1);
  document.getElementById("numCats").value = catCurr;
  document.getElementById("currCat").value = catCurr;
  subcategories=1;
  var body = document.getElementsByTagName(catCurr);
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
      textoCelda.setAttribute("name", 'pos' + (j+1) + '-subcat-'+(catCurr -1));
      textoCelda.setAttribute('id', (catCurr -1)+'-'+(j+1));
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");

  $('<input>').attr({
    type: 'hidden',
    id: 'subcat-'+(catCurr -1),
  }).appendTo('form');
}

function genera_name() {
  catCurr =  Number(catCurr + 1);
  var body = document.getElementsByTagName(catCurr)
  var tabla   = document.getElementById("table");
  var tblBody = document.createElement("tbody");
  var celda = document.createElement("td");
  var textoCelda = document.createTextNode("Titulo1");
  var hilera = document.createElement("tr");
  celda.appendChild(textoCelda);
  hilera.appendChild(celda);


      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Pregunta");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);


      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Opción 1");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Opción 2");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);

      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("Visible");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    

  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");

}

function genera_subcategoria() {
  if (!categories == 0){
  var catFath = document.getElementById("currCat").value;
  catFath = catFath - 1;
  var SubCant = Number($("#subcat-"+catFath).val());
  SubCant = SubCant + 1;
  document.getElementById("subcat-"+catFath).value = SubCant;
  var body = document.getElementsByTagName("body")[0];
  var tabla   = document.getElementById("table");
  var tblBody = document.createElement("tbody");
  var celda = document.createElement("td");
  var textoCelda = document.createTextNode(categories+"."+subcategories);
 
  var hilera = document.createElement("tr");
  celda.appendChild(textoCelda);
  hilera.appendChild(celda);
  subcategories=subcategories+1;
    for (var j = 0; j <4; j++) {
      var celda = document.createElement("td");
      var textoCelda = document.createElement("input");
      textoCelda.setAttribute("type", "text");
      textoCelda.setAttribute("name", "fat"+catFath);
      textoCelda.setAttribute('id', 'cat-'+catFath+'-sub-'+SubCant+'-pos-'+(j+1));
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
  tblBody.appendChild(hilera);
  tabla.appendChild(tblBody);
  //body.appendChild(tabla);
  tabla.setAttribute("border", "1");
  }
}

function loadJson (){
  var catsJson = [];
  var cantCts = $("#numCats").val();
  for (var i = 1; i < cantCts; i++) {
    var currJsonCat = {};
    var valTxt1 = $("#"+i+'-1').val();
    var valTxt2 = $("#"+i+'-2').val();
    var valTxt3 = $("#"+i+'-3').val();
    var valTxt4 = $("#"+i+'-4').val();
    var currJson = {"txt1": valTxt1,"txt2": valTxt2,"txt3": valTxt3,"txt4": valTxt4};
    currJsonCat.id = i;
    currJsonCat.opts = currJson;
    currJsonCat.subCats = [];
    var cantSub = $("#subcat-"+i).val();
    if(cantSub != ''){      
      for (var a = 0; a < cantSub; a++) {
        var x = a + 1;
        var valTxt1 = $("#cat-"+i+"-sub-"+x+"-pos-1").val();
        var valTxt2 = $("#cat-"+i+"-sub-"+x+"-pos-2").val();
        var valTxt3 = $("#cat-"+i+"-sub-"+x+"-pos-3").val();
        var valTxt4 = $("#cat-"+i+"-sub-"+x+"-pos-4").val();
        var currJson = {"txt1": valTxt1,"txt2": valTxt2,"txt3": valTxt3,"txt4": valTxt4};
        currJsonCat.subCats.push(currJson);
      }
    }
    catsJson.push(currJsonCat);
  }
  str = JSON.stringify(catsJson);
  $("#result").val(str);
};