function recipes_mouseover()
{
	var przepis1 = document.getElementById("przepis1");
	var przepis2 = document.getElementById("przepis2");
	var recipeInfo = document.getElementById("recipeInfo");
	przepis1.addEventListener("mouseover", recipe1Mouseover);
	przepis1.addEventListener("mouseout", recipeMouseout);
	przepis2.addEventListener("mouseover", recipe2Mouseover);
	przepis2.addEventListener("mouseout", recipeMouseout);
	
	function recipe1Mouseover()
	{
		recipeInfo.innerHTML = "Szybki i prosty przepis na 6 babeczek ze świeżymi malinami.";
	}
	
	function recipe2Mouseover()
	{
		recipeInfo.innerHTML = "Łatwy przepis na znane na całym świecie naleśniki waniliowe! Doskonały pomysł na dobry początek dobrego dnia.";
	}
	
	function recipeMouseout()
	{
		recipeInfo.innerHTML = "Słodycze można też zrobić w domu! Po lewej znajdziecie listę przepisów nadesłanych przez czytelników naszej strony. (Jak chcecie więcej to nadsyłajcie na encyklopedia@słodyczy.pl)";
	}
}


