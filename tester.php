<!DOCTYPE html>
<head>
	<meta name="author" content="http://renjithvk.com">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			font-family: 'Inconsolata', 'Monospace';
		}
	</style>
</head>

<body>
<?php 
	if(version_compare(PHP_VERSION, '5.6.4', '<=' )) {
		$errors[0] = 'Please upgrade PHP version to 5.6.4+';
	}

	if (extension_loaded ('openssl') == false) {
		$errors[1] = 'Please Enable <mark>OpenSSL<mark> PHP extension';
	}

	if (extension_loaded ('pdo') == false) {
		$errors[2] = 'Please Enable <mark>PDO<mark> PHP extension';
	}

	if (extension_loaded ('mbstring') == false) {
		$errors[3] = 'Please Enable <mark>Mbstring<mark> PHP extension';
	}

	if (extension_loaded ('tokenizer') == false) {
		$errors[3] = 'Please Enable <mark>Tokenizer<mark> PHP extension';
	}
?>

	<div class="form-group"></div>
	<div class="col-md-4 col-md-offset-4">
	<?php if (isset($errors)): ?>
		<?php foreach ($errors as $error): ?>
			<div class="alert alert-danger text-center">
	 			<li><?php echo $error; ?></li>
	 		</div>
		<?php endforeach; ?>
	<?php else: ?>
		<div class="alert alert-success text-center">
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			Your server meets the requirements
		</div>
	<?php endif; ?>
	</div>
</body>
</html>
