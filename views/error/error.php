<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anek Telugu">
	<title></title>
	<style type="text/css">

		body{
			font-family: 'Anek Telugu';
			background-color:rgb(255, 255, 255);
			flex:  1;
			flex-direction: column;
		}
		div
		{
			padding: 10px;
			align-content: center;
		}
	</style>
</head>
<body>
	<div>

		<h1 style="color:red;">Oops Ocorreu um Erro</h1>

		<h4 style="color:red;">Mensagem: </h4>

			<?php if(isset($erro['message'])): ?>
				<p style="
				color: red;
				background: black;
				border-radius: 8px;
				padding: 7px"> 
					<?= $erro['message'] ?> 
				</p>
			<?php endif; ?>

		<h4 style="color:red;">Log: </h4>

		<?php if(isset($erro['log'])):?>
			<pre style="color: red;background: black;padding: 14px;border-radius: 8px">
				<?= $erro['log']; ?>	
			</pre>
		<?php endif; ?>

	</div>
</body>
</html>