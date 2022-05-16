
<!doctype html>
<html>
	<head>		
	<meta charset="utf-8">	
	<title> kalkulator</title>	
	
	<script src="./zad3.js"></script>
	
	<style>
	.calosc
	{
		height:800px;
		width:200px;		
		margin-left:40%;
		margin-top:10%;
		
	}
	
	.guziki
	{
		height:600px;
		width:420px;
		text-align: center;
		margin-top:5px;
		
	}
	.cyfry
	{
		height:100px;
		width:100px;
		float:left;
		border-style:solid;
		text-align: center;
		background-color: #ff6fb1;
		color: white;
		font-size: 40px;		
	}
	.znaki
	{
		height:100px;
		width:100px;
		float:left;
		border-style:solid;
		text-align: center;
		background-color: #7b387b;
		color: white;
		font-size: 40px;	
	}
	.rowna
	{
		height:100px;
		width:400px;
		float:left;
		border-style:solid;
		text-align: center;
		background-color: #7b387b;
		color: white;
		font-size: 40px;	
	}
	.dzialanie	
	{
		height: 3em;
		width:391px;
		float:left;
		font-size: 15pt;
		text-align: center;
	
	}
	
	
	
	
	
	
	
	
	
	
	
	body {
        background-color: #ffa0cb;
        
      }
	   ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        ;
      }

      li {
        margin-right: 10px;


      }

      li a {
        display: inline;
        color: white;
        text-align: center;
        padding: 15px 50px;
        text-decoration: none;
        float: left
      }



      .home {
        background-color: #7b387b;

      }
	
	
	
	
	</style>
	</head>
	
	<body>
	
	<ul>
      <li><a class="home" href="#home">Strona Główna</a></li>
      <li><a href="zad3.html">O i X</a></li>      
      <li><a href="zad4.html">Zadanie 4</a></li>
    </ul>
	
	
	<?php
if(isset($_POST['ekran']))
{
	$dzialanie=$_POST['ekran'];
	$wynik=eval("return $dzialanie;");		

}	

?>
	<div class="calosc">
	
		<div class="guziki">
		<form action="./kalkulator.php" method="POST">
		<input class="dzialanie" type="text" maxlength="20" size="100" name="ekran" id="ekran" value="<?php if(isset($wynik)){ echo($wynik);} ?>" ></input>		
		<input class="rowna" value="=" type="submit" id="wynik" ></input>
		</form>
		
				
		<button class="cyfry" value="7" id="7" onclick="Dzialania(this)">7</button>
		<button class="cyfry" value="8" id="8" onclick="Dzialania(this)">8</button>
		<button class="cyfry" value="9" id="9" onclick="Dzialania(this)">9</button>
		<button class="znaki" value="+" id="dodaj" onclick="Dzialania(this)">+</button>
		<button class="cyfry" value="4" id="4"  onclick="Dzialania(this)">4</button>
		<button class="cyfry" value="5" id="5"  onclick="Dzialania(this)">5</button>
		<button class="cyfry" value="6" id="6"  onclick="Dzialania(this)">6</button>
		<button class="znaki" value="-" id="odejmij"  onclick="Dzialania(this)">-</button>
		<button class="cyfry" value="1" id="1"  onclick="Dzialania(this)">1</button>
		<button class="cyfry" value="2" id="2"  onclick="Dzialania(this)">2</button>
		<button class="cyfry" value="3" id="3"  onclick="Dzialania(this)">3</button>
		<button class="znaki" value="*" id="mnozenie"  onclick="Dzialania(this)">*</button>
		<button class="znaki" id="C" onclick="Czysc()">C</button>		
		
		<button class="cyfry" value="0" id="0"  onclick="Dzialania(this)">0</button>
		<button class="znaki" value="." id="kropka"  onclick="Dzialania(this)">.</button>
		<button class="znaki" value="/" id="dzielenie"  onclick="Dzialania(this)">/</button>
		
		
		</div>
			
	</div>
	
	

	
	
	</body>
</html>




















