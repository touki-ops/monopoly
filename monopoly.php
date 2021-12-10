<!DOCTYPE html>
<html>
<head>
	<title>Monopoly</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="monopoly.css">

	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

	<script>
		function deResult(argument) {
			let randomNumber = Math.floor(Math.random() * 6) + 1;
			
			result.innerHTML = '<img src="dé/' + randomNumber +'.png" id="img_de">'
		}
	</script>

	<article>
		<input type="number" name="joueur" id="joueur" placeholder="Nombre De Joueur" min="1" max="6">
		<button id="de" onclick="deResult()">lancer le dé</button>
		<div id="result"></div>

		<ul id="bank">
			<li><img class="bank_pions" src="pions/pion (1).png"><p class="money">0$</p></li>
			<li><img class="bank_pions" src="pions/pion (2).png"><p class="money">0$</p></li>
			<li><img class="bank_pions" src="pions/pion (3).png"><p class="money">0$</p></li>
			<li><img class="bank_pions" src="pions/pion (4).png"><p class="money">0$</p></li>
			<li><img class="bank_pions" src="pions/pion (5).png"><p class="money">0$</p></li>
			<li><img class="bank_pions" src="pions/pion (6).png"><p class="money">0$</p></li>
		</ul>
	</article>

	<img src="PLATEAU.jpg" id="plateau">
	<section id="pions"></section>

	<script>
		const joueur = document.querySelector('#joueur');
		const result = document.querySelector('#result');
		const pions = document.querySelector('section');
		const plateau = document.querySelector('#plateau');		

		joueur.addEventListener('input', event => {
			const nombreJoueur = event.target.value;

			if else (nombreJoueur === 1) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png">'
			}
			if else (nombreJoueur === 2) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png"><img class="pion" src="pions/pion (2).png">'
			}
			if else (nombreJoueur === 3) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png"><img class="pion" src="pions/pion (2).png"><img class="pion" src="pions/pion (3).png">'
			}
			if else (nombreJoueur === 4) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png"><img class="pion" src="pions/pion (2).png"><img class="pion" src="pions/pion (3).png"><img class="pion" src="pions/pion (4).png">'
			}
			if else (nombreJoueur === 5) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png"><img class="pion" src="pions/pion (2).png"><img class="pion" src="pions/pion (3).png"><img class="pion" src="pions/pion (4).png"><img class="pion" src="pions/pion (5).png">'
			}
			if else (nombreJoueur === 6) {
				pions.innerHTML = '<img class="pion" src="pions/pion (1).png"><img class="pion" src="pions/pion (2).png"><img class="pion" src="pions/pion (3).png"><img class="pion" src="pions/pion (4).png"><img class="pion" src="pions/pion (5).png"><img class="pion" src="pions/pion (6).png">'
			}
		});
	</script>

</body>
</html>