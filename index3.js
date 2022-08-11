function selectoroptions(){
    const days = document.getElementsByClassName("day");
    const stagings = document.getElementsByClassName('staging');

    
    var sel = document.getElementById("Opciones");
    var text= sel.options[sel.selectedIndex].text;

    if (text=='Selecciona una opcion'){
        for (let i = 0; i < stagings.length; i++) {
            stagings[i].style.display = 'none';
          }
          for (let i = 0; i < days.length; i++) {
            days[i].style.display = 'none';
          }

    }

    else if (text=='Que dia es hoy ?'){
        for (let i = 0; i < days.length; i++) {
            days[i].style.display = 'contents';
          } 
          for (let i = 0; i < stagings.length; i++) {
            stagings[i].style.display = 'none';
          }

    }else{
        for (let i = 0; i < stagings.length; i++) {
            stagings[i].style.display = 'contents';
          } 
          for (let i = 0; i < days.length; i++) {
            days[i].style.display = 'none';
          }



    }

}