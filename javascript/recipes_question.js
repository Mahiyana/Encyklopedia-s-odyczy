function recipes_question()
{
	var amount_of_recipes = 2;
	var input_box = document.getElementById("recipes_prepared");
	var answer_p = document.getElementById("answer");
	document.getElementById("recipes_prepared_button").addEventListener("click", reactToAnswer);
	
	function reactToAnswer()
	{
		var input_number = parseInt(input_box.value);
		console.log(input_number);
		if (isNaN(input_number))
		{
			answer_p.innerHTML="Ojejku ale to nie jest liczba!";
		}
		else
		{
			if (input_number > amount_of_recipes)
			{
				answer_p.innerHTML="Nie mamy tyle przepisów na naszej stronie, ale doceniamy chęci! Brawo!";
			}
			else
			{
				if (input_number == amount_of_recipes)
				{
					answer_p.innerHTML="Przygotowałeś/aś wszystkie nasze słodkie przepisy! Jesteśmy zaszczycone.";
				}
				else
				{
					answer_p.innerHTML="Mamy nadzieję, że ci zmakowały i skusisz się na jeszcze więcej przepisów z naszej strony!";
				}
			}
		}
	}
}


