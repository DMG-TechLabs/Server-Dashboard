const container = document.getElementById("container");

window.onchange = e => {changeAspectRatio();};

function calculateAspectRatio(columns) {
    let num = projects.length;
  
    var rows = 1;
    if (num > 6) {
      rows = num / columns;
    }
  
    aspectRatio = columns.toString().concat(" / ".concat(rows));
  
    container.style.aspectRatio = aspectRatio;
  }
  
  function changeAspectRatio(){
      if (window.innerWidth <= 600) {
          calculateAspectRatio(3);
        } else if (window.innerWidth > 600 && window.innerWidth <= 800){
          calculateAspectRatio(4);
        } else {
          calculateAspectRatio(6);
        }
  }