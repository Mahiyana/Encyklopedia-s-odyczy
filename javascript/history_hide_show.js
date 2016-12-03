function history_hide_show()
{	
	var history_box = document.getElementById('history_box');
	var history_general = document.getElementById('history_general');
	var bhide = document.getElementById('bhide');
	bhide.onclick = fhide;

	function fhide()
	{
		history_box.removeChild(history_general);
		history_box.removeChild(bhide);
		var btn = document.createElement("BUTTON");
		var txt = document.createTextNode("Pokaż");
		btn.appendChild(txt);
		btn.id = 'bshow';
		btn.onclick = fshow;
		history_box.appendChild(btn);
	}
	
	function fshow()
	{
		history_box.removeChild(document.getElementById('bshow'));
		history_box.appendChild(bhide);
		history_box.appendChild(history_general);
	}
}
