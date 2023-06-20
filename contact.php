<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/css.css">
	<title>Document</title>
</head>

<body>


	<div class="contactcontainer">
		<div class="contact bgc">
			<div class="linkscontact"></div>
			<div class="rechtscontact">
				<form action="PHP/C/contactmail.php" method="post">
					<h2>Contacteer ons</h2>
					<input type="text" name="naam" class="txtveld" placeholder="Uw naam">
					<input type="text" name="email" class="txtveld" placeholder="uw email">
					<input type="text" name="telefoon" class="txtveld" placeholder="Uw telefoonnummer">
					<textarea placeholder="Wat is het probleem" name="bericht" class="txtarea"></textarea>
					<button class="btncontainer" type="submit">Verzend</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>