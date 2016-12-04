function give_focuses(){

	document.getElementById("name").addEventListener("focus", name_focus);
  function name_focus(){
      document.getElementById("name_help").style.display = "block";
    }
  document.getElementById("name").addEventListener("blur", name_blur);
  function name_blur(){
      document.getElementById("name_help").style.display = "none";
    }
  
  document.getElementById("nick").addEventListener("focus", nick_focus);
  function nick_focus(){
      document.getElementById("nick_help").style.display = "block";
    }
  document.getElementById("nick").addEventListener("blur", nick_blur);
  function nick_blur(){
      document.getElementById("nick_help").style.display = "none";
    }
  
  document.getElementById("else").addEventListener("focus", else_focus);
  function else_focus(){
      document.getElementById("else_help").style.display = "block";
    }
  document.getElementById("else").addEventListener("blur", else_blur);
  function else_blur(){
      document.getElementById("else_help").style.display = "none";
    }

}
