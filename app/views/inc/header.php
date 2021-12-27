<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--Fontawesome-->
	<script src="https://kit.fontawesome.com/e5e1e3260a.js" crossorigin="anonymous"></script>
	<!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!--Outfit-->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<!--Roboto-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;1,300;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!--TINYMCE-->
	<script src="https://cdn.tiny.cloud/1/4aujdfy7lg9y7mbnb1liux5qp4h7wq88erysl7kvrvvtowbp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({ selector: '.mytextarea', menubar:false, });</script>
	<!--CSS-->
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/users.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/postes.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/responsivetabpc.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/weatherapp.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/about.css">
	<title><?php echo SITENAME; ?></title>
</head>
<body>

	<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container p-0 m-0">
	<!--/div est sur footer-->