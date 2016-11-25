function window_resize()
{
	window.addEventListener("resize", resizeAction);
	
	function resizeAction()
	{
		if (window.innerHeight < 100)
		{
			document.writeln("<script>");
			document.writeln("window.addEventListener('resize', repairWindow);");
			document.writeln("function repairWindow() {if (window.innerHeight>100) {window.location.reload()}}");
			document.writeln("</script>");
			document.writeln("Ojejku! Wysokość strony jest zbyt mała, żeby ta strona mogła poprawnia funkcjonować. Wszystko się zepsuło!");
			
		}
	}
}


