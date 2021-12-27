<?php require APPROOT . '/views/inc/header.php'; ?>
	<div class="usercntr container d-flex pt-4">
		<a href="<?php echo URLROOT; ?>">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
		</a>
	
		<h2 class="titrelog pt-3">Connexion</h2>
	</div>
	
 	<div class="container userslog">
 		<div class="container usersinfo m-0 logrspns">
 			<?php flash('register_success') ?>
 			<form action=" <?php echo URLROOT; ?>/users/login" method="post">

 				<div class="form-group pb-3 pt-3">
 					<label for="email"></label>
 					<input id="email" placeholder="email" type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['email_err']; ?></span>
 				</div>

 				<div class="form-group pb-3 pt-3">
 					<label for="password"></label>
 					<input id="password" placeholder="mot de passe" type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
 					<span class="invalid-feedback"> <?php echo $data['password_err']; ?></span>
 				</div>

 				<div class="container ps-0">
 						<a href="<?php echo URLROOT; ?>/users/register" class="nolog">Pas de compte? Cliquez-ici.</a>
				</div>
				<input type="submit" value="Connexion" class="bouton-lg btn text-light animated animatedFadeInUp fadeInUp">

 			</form>
 		</div>	
 	</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>