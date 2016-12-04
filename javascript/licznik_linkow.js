function link_counter(){
  var num = document.links.length;
  var text;
  if(num == 0){
    text = "Niestety dziś nie ma w co klikać :< Przepraszamy ;_;";
  }else{
   text = "Czy wiesz, że na tej stronie możesz kliknąć w aż " + num + " linków?!";
  }
  document.getElementById('link_count').innerHTML = text;

  var num2 = document.anchors.length;
  var text2;
  if(num2 == 0){
    text2 = "A anchorów niestety nie ma :(";
  }else{
   text2 = "A do tego można kliknąć w " + num2 + " anchorów <3";
  }
  document.getElementById('anchor_count').innerHTML = text2;
  
}
