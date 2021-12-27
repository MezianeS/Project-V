<?php require APPROOT . '/views/inc/header.php'; ?>

	<div class="container d-flex pt-4 ctnrall">
		<a href="<?php echo URLROOT; ?>/posts">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
		</a>
		<h2 class="titrelog pt-3">Nouveau poste:</h2>
	</div>

	<div class="container">
		<div class="card m-1 mt-5 border-0 cardrspns">
			<form action=" <?php echo URLROOT; ?>/posts/add" method="post" class="postsformulaire m-3 text-center">
				<div class="form-group mt-3 mb-3"> 
 					<label for="title"></label>
 					<input placeholder="Titre" type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
 					<span class="invalidchck invalid-feedback text-start"> <?php echo $data['title_err']; ?></span>
 				</div>

				 <div class="form-group mt-3 mb-3">
					<label for="imgbg"></label>
					<input placeholder="Image" type="text" name="imgbg" class="form-control form-control-lg <?php echo (!empty($data['imgbg_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['imgbg']; ?>">
 					<span class="invalidchck invalid-feedback text-start"> <?php echo $data['imgbg_err']; ?></span>
				</div>

				<div class="form-group mt-3 mb-3">
					<label for="imgalt"></label>
					<input placeholder="Description de l'image" type="text" name="imgalt" class="form-control form-control-lg <?php echo (!empty($data['imgalt_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['imgalt']; ?>">
 					<span class="invalidchck invalid-feedback text-start"> <?php echo $data['imgalt_err']; ?></span>
				</div>

				<div class="form-group mt-3 mb-3">
 					<label for="body"></label>
 					<textarea placeholder="Texte" name="body" class="mytextarea addcommentstxt form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
 					<span class="invalidchck invalid-feedback text-start"> <?php echo $data['body_err']; ?></span>
 				</div>

				<input type="submit" class="addboutonformulaire btn text-light animated animatedFadeInUp fadeInUp" value="Envoyer">
			</form>	
		</div>
	</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>


