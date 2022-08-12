$(document).on('change', '#selectOpts',  function(){
  var idsele = $("#selectOpts option:selected");
  var val = $(this).find(':selected').data('idcat')
  alert(val);
  val = Number(val - 1);
  $.getJSON("./data.json", function(data){
    var subCats = data[val]['subCats'];
    $('#selectdata').html('');
    $('#selectdata').append($('<option>', { 
      value: '',
      text : 'Seleccione...'
    }));
    subCats.forEach(e => {
      $('#selectdata').append($('<option>', { 
        value: e.txt1,
        text : e.txt1
      }));
    });
  }).fail(function(){
      console.log("No se pudo leer el archivo Json.");
  });
});