function form_counter(){
  var num = document.forms.length;
  var text = ":)";

  switch (num){
    case 0: 
      text = "Haha, tylko żartowałyśmy - nie ma tu żadnego formularza do wypełnienia :D";
      break;
    case 1:
      text = "Czeka Cię cały jeden formularz!";
      break;
    case 2:
      text = "Przed Tobą dwa fascynujące formularze";
      break;
    case 3:
      text = "Pora na trzy wspaniałe formularze";
      break;
    default:
      text = "Czeka nas wiele radosnych formularzy! Bierzmy się do wypełniania <3";
      break;
  }

  document.getElementById('form_count').innerHTML = text;  
}
