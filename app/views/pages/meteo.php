<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container colormeteo">

<div class="container d-flex pt-4 pb-5 ctnrall">
	<a href="<?php echo URLROOT; ?>/posts">
		<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3 text-light"></i>
	</a>
	<h2 class="titrelog meteotitle pt-3 text-light">MÉTÉO</h2>
</div>


    <div class="container meteoctnr p-0 pb-4 animated animatedFadeInUp fadeInUp">
        <div class="app-title text-center">
            <p>Météo</p>
        </div>
        <div class="weather-container text-center">
            <div class="weather-icon">
                <img src="<?php echo URLROOT; ?>/images/icons/unknownS.png" alt="">
                <!--l'ajout du S sur l'image permet de ne rien affiché et éviter l'effet bizarre.-->
            </div>
            <div class="temperature-value">
                <p>- ° <span>C</span></p>
            </div>
            <div class="temperature-description">
                <p>-</p>
            </div>
            <div class="location">
                <p>-</p>
            </div>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>