var wynik='';
		function Czysc()
		{
			wynik="";
			document.getElementById("ekran").value='';
		}
		function Dzialania(a)
		{			
			wynik=wynik+a.value;
			document.getElementById("ekran").value=wynik;
		}
		
		
		