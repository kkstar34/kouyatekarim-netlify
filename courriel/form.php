<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-Nous</title>
</head>
<body>
    
<div class="container">
<div class="container">
		<h1>Formulaire de contact</h1>
		<form action="" method="post">
			<fieldset>
				<legend>Remplissez les champs</legend>
				
				<div class="form-group">
					<label for="nom">Entrez votre nom &amp; prénom</label>
					<input type="text" class="form-control" id="nom" name="nom" placeholder="">
				</div>
				
				<div class="form-group">
					<label for="email">Entrez votre mail</label>
					<input type="email" class="form-control"  name="email" id="email" placeholder="">
				</div>
			
				<div class="form-group">
					<label for="bio">Saisissez votre préoccupation</label>
					<textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn-primary" name="send"> Envoyez le formulaire</button>

                
                <?php
	if(isset($_POST['send'])){
		$mail = htmlspecialchars($_POST['email']);
		$header="MIME-Version: 1.0\r\n";
		$header.='From:kouyatekarim02@gmail.com'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';
		$message='
		<html>
		   <body>
			  <div align="center">
				 <a href="http://127.0.0.1/Tutos%20PHP/%2314%20%28Espace%20membre%29/confirmation.php?pseudo">Confirmez votre compte !</a>
			  </div>
		   </body>
		</html>
		';
		mail($mail, "Confirmation de compte", $message, $header);
		if($retour) {
			echo '<p>Votre message a bien été envoyé.</p>';
		}
	}
	?>
</body>
</html>