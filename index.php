<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Jsnack PHP blocco 1 & blocco 2</title>
	</head>
	<body>
    <?php
			/*

			PHP Snack 1:
			Creiamo un array 'matches' contenente altri array i
			quali rappresentano delle partite di basket di
			un’ipotetica tappa del calendario. Ogni array della
			partita avrà una squadra di casa e una squadra
			ospite, punti fatti dalla squadra di casa e punti fatti
			dalla squadra ospite.
			Stampiamo a schermo tutte le partite con questo
			schema:
			Olimpia Milano - Cantù | 55-60

		 */
		?>
		<style>
			.versus {
				color:blue;
			}
      .points {
				color:black;
			}
			.red {
				color:red;
			}
			.green {
				color:green;
			}
		</style>
		<h1>JSNACK PHP 1</h1>

		<?php
       $matches = [    /* creo array con 4 squadre / 4 sotto array */

				  [
					 'home' => 'Olimpia Milano',
					 'away' => 'Cantù',
					 'home_points' => rand(1, 100),
					 'away_points' => rand(1, 100)
				  ],
					[
					 'home' => 'OriOra Pistoia',
					 'away' => 'Segafredo Virtus Bologna',
					 'home_points' => rand(1, 100),
					 'away_points' => rand(1, 100)
				  ],
					[
					 'home' => 'Virtus Roma',
					 'away' => 'VL Pesaro',
					 'home_points' => rand(1, 100),
					 'away_points' => rand(1, 100)
				  ],
					[
					 'home' => ' Germani Basket Brescia',
					 'away' => 'Dolomiti Energia Trento',
					 'home_points' => rand(1, 100),
					 'away_points' => rand(1, 100)
					]

			 ]
		 ?>
     <?php
		   for ($i=0; $i < count($matches) ; $i++) {
         $match = $matches[$i];
			?>
			<h1>
				<?php echo $match['home'];?> <span class="versus">vs</span> <?php echo $match['away']; ?>
			</h1>
			<?php if ($match['home_points']>$match['away_points']): ?>
				<h1>
					<span class="green"><?php echo $match['home_points'];?></span>
					<span class="points">-</span>
					<span class="red"><?php echo $match['away_points']; ?></span>
 			 </h1>
			<?php else: ?>

				<h1>
					<span class="red"><?php echo $match['home_points'];?></span>
					<span class="points">-</span>
					<span class="green"><?php echo $match['away_points']; ?></span>
			 </h1>

			<?php endif; ?>

	  	<?php } ?>

		<?php
			/*

			PHP Snack 2:
			Passare come parametri GET name, mail e age e
			verificare (cercando i metodi che non
			conosciamo nella documentazione) che:
			1. name sia più lungo di 3 caratteri,
			2. che mail contenga un punto e una chiocciola
			3. e che age sia un numero.
			Se tutto è ok stampare “Accesso riuscito”, altrimenti
			“Accesso negato

		 */
		?>
		<h1>JSNACK PHP 2</h1>
		<!-- creo 3 GET query  -->
		<?php

				$_GET['name'];
				$_GET['email'];
				$_GET['age'];

		 ?>
		 <!-- Inizio con le condizioni if per far stampare i vari risultati -->
		 <?php
				if (strlen($_GET['name']) < 3) {
				 echo "Accesso negato - nome sbagliato";
			 	} else if (strpos($_GET['email'],'.') == false || strpos($_GET['email'],'@') == false ){
				 echo "Accesso negato - email sbagliata";
			  } else if (is_numeric($_GET['age']) === false) {
	       echo "Accesso negato - età sbagliata";
		  	} else {
				 echo 'Nome: ' . $_GET['name'] . '<br>';
	       echo 'E-mail: ' . $_GET['email'] . '<br>';
	       echo 'Età: ' . $_GET['age'] . '<br>';
	       echo 'Accesso riuscito!';
			  }
			?>

	</body>
</html>
