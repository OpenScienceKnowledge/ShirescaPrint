<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="device-width, initial-scale=1.0">
		<title>Connexion</title>
		<Link rel="stylesheet"  href="insertion.css"/>
		
	</head>
	<body>
		<header>
			<h1> Imprimérie de Lubumbashi</h1>

			<img src="logo.png" class="logo_gauche" />
			<img src="logo.png" class="logo_droit" />
		</header>
		<div class="bienvenu">
			
			<img src="profil.jpg" class="profil"/>
			
			<a href="connexion.php" class="bouton_connex">Déconnexion</a>
			 <p class="date_h"><?php setlocale(LC_TIME, ['fr','fra','fr_FR']);
			echo strftime(' %d %B %Y').'<br/>';?></p><p class="heure"><?php echo  strftime('%H:%M'); ?><?php
			?>	

		</div>
		<div class="bloc_page">
			<nav>
				<ul>
					<li><a href="employe.php">Employé</a></li>
					<li><a href="presence.php">Présence</a></li>
					<li><a href="Livraison.php">Livraison</a></li>
					<li><a href="commande.php">Commande</a></li>
					<li><a href="transaction.php">Transaction</a></li>
					<li><a href="rapport.php">Rapport</a></li>
					<li><a href="tache.php">Tâche</a></li>
				</ul>
				<a href="employe.php"><img src="employe.png" class="img_empl"></a>
				<a href="presence.php"><img src="presence.png" class="img_pres"></a>
				<a href="livraison.php"><img src="livraison.png" class="img_livr"></a>
				<a href="commande.php"></a><img src="commande.png" class="img_com"></a>
				<a href="conge.php"><img src="transaction.png" class="img_conge"></a>
				<a href="rapport.php"><img src="rapport.png" class="img_rap"></a>
				<a href="tache.php"><img src="tache.png" class="img_tache"></a>

			</nav>
		<div class="corps">
			<div class="menu">
				<ul>
					<li><a href="commande1.php">Liste commandes</a></li>
					<li><a href="commande.php">Insérer</a></li>
					<li><a href="modifier.php">Modifier</a></li>
					<li><a href="suppression.php">Supprimer </a></li>
					<li><a href="commande_other.php">Autres Commandes </a></li>
				</ul>

			</div>
			<h3>Liste Commandes</h3>		
			<div class="tab_liste">
			<?php
		try{
			$bdd= new PDO('mysql:host=localhost;dbname=imp_lushi','william-kims','MAmy161998', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}catch(EXCEPTION $e)
		{
			die('Erreur'. $e->getMessage());
		}
		$req=$bdd->query('SELECT * FROM commande_syllabus');
		echo '<table>';
		echo '<tr><th>N°</th>
		<th>Cours</th>
		<th>Institution</th>
		<th>Faculté</th>
		<th>Département</th>
		<th>Promotion</th>
		<th>Nombre</th>
		<th>Date Commande</th></tr>';
		while($donnee=$req->fetch()){
			
				echo '<tr><td style="border:1px blue solid">'.$donnee['id_commande_sy'].'</td>
				<td style="border:1px blue solid">'.$donnee['cours'].'</td>
				<td style="border:1px blue solid">'.$donnee['institution'].'</td>
				<td style="border:1px blue solid">'.$donnee['faculte'].'</td>
				<td style="border:1px blue solid">'.$donnee['departement'].'</td>
				<td style="border:1px blue solid">'.$donnee['promotion'].'</td>
				<td style="border:1px blue solid">'.$donnee['nombre_commande_sy'].'</td>
				<td style="border:1px blue solid">'.$donnee['date_commande_sy'].'</td><tr>';
		
	}
	
		
		echo '</table></tr>';
	
		?>

			
			</div>
		</div>
		
	</body>
</html>
