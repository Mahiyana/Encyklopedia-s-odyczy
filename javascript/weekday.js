 function weekday(){
  switch (new Date().getDay()) {
      case 0:
          day = "niedziela";
          break;
      case 1:
          day = "poniedziałek";
          break;
      case 2:
          day = "wtorek";
          break;
      case 3:
          day = "środa";
          break;
      case 4:
          day = "czwartek";
          break;
      case 5:
          day = "piątek";
          break;
      case  6:
          day = "sobota";
          break;
    }
    document.getElementById('dzien').innerHTML = "Dziś mamy " + day +"!";
  }

