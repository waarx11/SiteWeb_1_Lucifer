<?php

if (isset($_POST['isSubmit']) && $_POST['isSubmit']==1) {

	if (empty($_POST['Nom'])) {
		$errNom='le Nom doit être renseigné !';
	} else {
		$nom=$_POST['Nom'];
	}
	if (empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
		$errEmail='l\'email doit être renseigné !';
	} else {
		$email=$_POST['email'];
	}

	if (empty($_POST['desc'])) {
		$errDesc='la description doit être renseigné !';
	} else {
		$desc=$_POST['desc'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Contact</title>
	<link rel="icon" href="images/666.png" type="image/">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/contact.css" />
	<link rel="stylesheet" media="screen and (max-width:800px)" href="css/petitécran.css" type="text/css" />
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.html" class="menua borduredroit"> Accueil </a></li>
				<li class="deroulant"><a href="#" class="menua borduredroit">Biographie</a>
					<ul class="sous">
						<li><a href="biographieange.html" class="menua">La biographie des anges</a></li>
						<li><a href="biographiehumain.html" class="menua">La biographie des humains</a></li>
					</ul>
				</li>
				<li class="deroulant"><a href="#" class="menua borduredroit">Médias</a>
					<ul class="sous">
						<li><a href="photos.html" class="menua">Photos</a></li>
						<li><a href="videos.html" class="menua">Vidéos</a></li>
					</ul>
				</li>
				<li><a href="contact.php" class="menua"> Contact</a></li>
			</ul>
		</nav>
		<h1 class="titresouligner"><mark class="markh1">Toutes les nouveautés sur la série Lucifer</mark></h1>
		<img src="images/luciferhead.jpg" alt="Image" height="280" width="560">
	</header>
	<section>
		<article>
			<div>
				<h2 class="titresouligner"><mark class="markh2">Contact</mark></h2>
				<form action="contact.php" method="POST">
					<p>
						<?php if (isset($errNom)) { echo $errNom; } ?>
						<label for="Nom">Nom</label>
						<input type="text" name="Nom" id="Nom" placeholder="Nom"<?php if (isset($nom)) { echo 'value="'.$nom.'"';}  ?>>
					</p>
					<p>
						<?php if (isset($errEmail)) { echo $errEmail; } ?>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Email" <?php if (isset($email)) { echo 'value="'.$email.'"';}  ?>>
					</p>
					<p>
						<label for="tel">Téléphone</label>
						<input type="tel" name="tel" id="tel" placeholder="Téléphone" <?php if (isset($tel)) { echo 'value="'.$tel.'"';}  ?>>
					</p>
					<p>
						<label for="précisions">Précisions</label>
						<select name="précisions" id="précisions">
							<option value="Signaler un bug">S'agit-il d'un bug?</option>
							<option value="Signaler une amélioration possible">S'agit-il d'une amélioration?</option>
							<option value="Autre demande">Autre demande?</option>
						</select>
					</p>
					<p>
						<label for="btn_radio">Première visite?	</label>
					</p>
					<p>
						<label for="btn_radio1">Oui</label>
						<input type="radio" name="btn_radio" id="btn_radio1" value="Oui">
						<label for="btn_radio2">Non</label>
						<input type="radio" name="btn_radio" id="btn_radio2" value="Non">
					</p>
					<p>
						<?php if (isset($errDesc)) { echo $errDesc; } ?>
						<label for="desc" class="desc">Description</label>
						<textarea name="desc" id="desc" rows="10" cols="25"><?php if (isset($desc)) { echo "$desc";}  ?></textarea>
					</p>
					<p>
						<input type="hidden" name="isSubmit" value="1">
						<input type="submit" value="Envoie" class="Envoie">
					</p>
						<h3 class="titresouligner">Les informations saisies sont :</h3> <br>
					<p>	<?php if (isset($nom) && isset($email) && isset($desc)){
							if (!empty($_POST['tel'])) {
								echo '<strong>Numéro de téléphone :</strong>'.'<br>'.$_POST['tel'].'<br>';
							}
							if (!empty($_POST['précisions'])) {
								echo '<strong>Précisions?</strong>'.'<br>'.$_POST['précisions'].'<br>';
							}
							if (!empty($_POST['btn_radio'])) {
								echo '<strong>Première visite?</strong>'.'<br>'.$_POST['btn_radio'].'<br>';
							}
							echo "<strong>Nom :</strong> $nom <br> <strong>Email :</strong> $email <br> <strong>Description :</strong> $desc <br> <strong>Votre message a bien été envoyer<strong>";

						} ?>
					</p>
				</form>		

			</div>
		</article>
	</section>
	<footer>
		<a href="index.html" class="flooterelatif">
			Retour à l'accueil
		</a>

		<p class="signature">Nathan Verdier Groupe 2</p>
	</footer>
</body>
</html>