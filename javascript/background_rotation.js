function background_rotation()
{
	var pattern = 1;
	var box = document.getElementById("background_box");
	document.getElementById("button_background_rotation").addEventListener("click", rotateBackground);
	
	function rotateBackground()
	{
		switch(pattern)
		{
			case 1:
				box.className="contents_rhombus";
				pattern = 2;
				break;
			case 2:
				box.className="contents_plain";
				pattern = 3;
				break;
			case 3:
				box.className="contents_star";
				pattern = 1;
				break;
		}
	}
}


