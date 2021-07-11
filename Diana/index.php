<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Сообщение об ошибке</title>
		<link rel="stylesheet" type="text/css" href="./Css/style.css">	
	</head>
	<body>
		<div class="message">
			<div class="title">
				Обратная связь.
			</div>
			<div class="div_input">
				<form method="POST" action="Action.php" enctype="multipart/form-data">
					<input type="email" name="email" placeholder="Email" id="input_email" class="div_input" >
					<input type="text" name="familia" placeholder="Фамилия" id="input_text_fam" class="div_input">
					<input type="text" name="name" placeholder="Имя" id="input_text_name" class="div_input">
					<input type="text" name="othestvo" placeholder="Отчество" id="input_text_othestvo" class="div_input">
					<textarea name="sms" placeholder="Сообщение" id="style_textarea"></textarea>
					<input id="sendbutton" class="function_button" type="submit" name="bt" value="Отправить" class="button">
					<input type="file" accept="image/png, image/jpeg" name="mypic">
				</form>
			</div>
		</div>
	</body>
</html>