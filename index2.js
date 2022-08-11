const ch1 = document.getElementById('ch1');
const ch2 = document.getElementById('ch2');
const ch1n = document.getElementById('ch1n');
const ch2n = document.getElementById('ch2n');
const q1 = document.getElementsByClassName("q1");
const q2 = document.getElementsByClassName('q2');



ch1.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
        for (let i = 0; i < q1.length; i++) {
            q1[i].style.display = 'contents';
          } 
          ch1n.checked = false

    } else {

        for (let i = 0; i < q1.length; i++) {
            q1[i].style.display = 'none';
          }  
    }
  })

  ch1n.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
       ch1.checked = false
       for (let i = 0; i < q1.length; i++) {
        q1[i].style.display = 'none';
      }  

    }
  })

 

  ch2.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
        for (let i = 0; i < q2.length; i++) {
            q2[i].style.display = 'contents';
          } 
          ch2n.checked = false

    } else {

        for (let i = 0; i < q2.length; i++) {
            q2[i].style.display = 'none';
          }  
    }
  })

  ch2n.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
       ch2.checked = false
       for (let i = 0; i < q2.length; i++) {
        q2[i].style.display = 'none';
      }  

    }
  })

