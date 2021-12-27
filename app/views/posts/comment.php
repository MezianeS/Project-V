<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container d-flex pt-4 ctnrall">
		<a href="<?php echo URLROOT; ?>/posts/show/<?php echo $data['id'] ?>">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
		</a>
		<h2 class="titrelog pt-3">Nouveau commentaire</h2>
	</div>


<div class="container">
	<div class="card m-1 mt-5 border-0 cardrspns">
		<form action=" <?php echo URLROOT; ?>/posts/comment/<?php echo $data['id']; ?> " method="post" class="postsformulaire m-3 text-center">
			<div class="form-group mt-3 mb-3">
 				<label for="commentbody"></label>
 				<textarea placeholder="Postez votre commentaire..." name="commentbody" class="addcommentstxt form-control form-control-lg <?php echo (!empty($data['commentbody_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['commentbody']; ?></textarea>
 				<span class="invalidchck invalid-feedback text-start"> <?php echo $data['commentbody_err']; ?></span>
 			</div>

			 <input type="submit" class="addboutonformulaire btn text-light animated animatedFadeInUp fadeInUp" value="Envoyer"> 
		</form>
	</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>