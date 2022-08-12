$(document).on('click', '.chck',  function(){
  var idcat = $(this).data('idcat');
  var val = $(this).val().toLowerCase();
  var group = "input:checkbox[name='opt-" + idcat + "']";
  $(group).prop("checked", false);
  $(this).prop("checked", true);
  if(val == 'si'){
    $(".subcats-"+idcat).addClass("subcatsActive");
  }else{
    $(".subcats-"+idcat).removeClass("subcatsActive");
  }
});
$(document).on('click', '.chcksub',  function(){
  // var idcat = $(this).data('idcat');
  // var val = $(this).val().toLowerCase();
  // var group = "input:checkbox[name='optsub-" + idcat + "']";
  // $(group).prop("checked", false);
  // $(this).prop("checked", true);
});