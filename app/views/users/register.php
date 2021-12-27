<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="registerctnr container d-flex pt-4">
	<a href="<?php echo URLROOT; ?>">
		<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
	</a>
	
	<h2 class="titrelog pt-3">Inscription</h2>
</div>

<div class="container userregister">
	<div class="container usersinfo m-0 p-0 logrspns">
	<form action=" <?php echo URLROOT; ?>/users/register" method="post">
 		<div class="form-group pb-2 pt-2">
 			<label for="name"></label>
 			<input id="name" placeholder="pseudo" type="text" name="name" class="form-control form-control-lg  <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
 			<span class="invalid-feedback"> <?php echo $data['name_err']; ?></span>
 		</div>

 		<div class="form-group pb-2 pt-2">
 			<label for="email"></label>
 			<input id="email" placeholder="mail" type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
 			<span class="invalid-feedback"> <?php echo $data['email_err']; ?></span>
 		</div>

 		<div class="form-group pb-2 pt-2">
 			<label for="password"></label>
 			<input id="password" placeholder="mot de passe" type="password" name="password" class="form-control form-control-lg  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
 			<span class="invalid-feedback"> <?php echo $data['password_err']; ?></span>
 		</div>

 		<div class="form-group pb-2 pt-2">
 			<label for="confirm_password"></label>
 			<input id="confirm_password" placeholder="confirmer mot de passe" type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
 			<span class="invalid-feedback"> <?php echo $data['confirm_password_err']; ?></span>
 		</div>
		<div class="container ps-0">
 			<a href="<?php echo URLROOT; ?>/users/login" class="nolog">Déjà inscrit? Connectez-vous.</a>
			 <input type="submit" value="Connexion" class="btn bouton-lg text-white animated animatedFadeInUp fadeInUp">
 		</div>
 	</form>
</div> 
</div>	

<?php require APPROOT . '/views/inc/footer.php'; ?>