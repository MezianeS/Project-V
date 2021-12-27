<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container d-flex pt-4 pb-5 mb-5">
		<a href="<?php echo URLROOT; ?>">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
		</a>
	
		<h2 class="titrelog pt-3">À Propos</h2>
	</div>

    <div class="card cardabout p-2 mx-auto">
  <img class="card-img-top" src="<?php echo URLROOT ;?>/images/hk16_img.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title titleabout mb-5"><?php echo $data['title'] ;?> </h5>
    <p class="card-text"><?php echo $data['description'] ;?>
    </p>
  </div>
  <div class="card-body d-flex justify-content-center align-content-center">
    <a href="<?php echo URLROOT; ?>/users/register" class="btn btnabout text-light m-2">Inscription</a>
    <a href="<?php echo URLROOT; ?>/users/login" class="btn btnabout text-light m-2">Connexion</a>
  </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>


