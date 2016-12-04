function counter(){
  var num = document.images.length;
  console.log(typeof(num));
  console.log(num);
  var text = ":)";

  switch (num){
    case 0: 
      text = "Niestety nie mamy obrazków tego słodycza :<";
      break;
    case 1:
      text = "A pod spodem znajduje się obrazek pokazujący opisywany słodycz.";
      break;
    case 2:
      text = "A pod spodem znajdują się dwa obrazki pokazujące opisywany słodycz.";
      break;
    case 3:
      text = "A pod spodem znajduje się, nie jeden, nie dwa, ale aż trzy obrazki pokazujące opisywany słodycz!";
      break;
    case 4:
      text = "A pod spodem znajdują się całe cztery obrazki pokazujące opisywany słodycz!";
      break;
    case 5:
      text = "A pod spodem znajduje się pięć obrazków z opisywanym słodyczem! To już mini galeria!";
      break;
    default:
      text = "A pod spodem znajduje się cała galeria z opisywanym słodyczem! Miłego oglądania!";
      break;
  }

  document.getElementById('img_count').innerHTML = text;  
}
