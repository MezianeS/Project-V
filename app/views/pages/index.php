<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container p-0 m-0">
		<div class="slideshow-container">
    		<div class="mySlides imgfade slide1">
    		</div>

    		<div class="mySlides imgfade slide2">
    		</div>

    		<div class="mySlides imgfade slide3">
    		</div>

   			<div class="mySlides imgfade slide4">
      		</div>
			  
			<div class="container-fluid buttonSlide text-center">
				<a class="btn indexbouton p-2 animated animatedFadeInUp fadeInUp" href="<?php echo URLROOT;?>/posts">DÉCOUVRIR</a>
			</div>
		</div>
</div>
	<!-- navbar -->

<div class="barnav">
    <div>
            <label for="check">
             <input type="checkbox" id="check" class="icon" onclick="myFunction()"/> 
             <span></span>
             <span></span>
             <span></span>
            </label>
    </div>
    <div id="menubar">
		<ul class="p-1">
			<li><a href=" <?php echo URLROOT; ?>">Home</a></li>
			<li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
			<?php if(isset($_SESSION['user_id'])) :  ?> 
			<li><a href="<?php echo URLROOT; ?>#">Bonjour  <?php echo $_SESSION['user_name']; ?></a></li>
			<li><a href="<?php echo URLROOT; ?>/users/logout">Au revoir</a></li>
			<?php else : ?>
			<li><a href="<?php echo URLROOT; ?>/users/login">Connexion</a></li>
			<li><a href="<?php echo URLROOT; ?>/users/register">Inscription</a></li>
			<?php endif; ?>
		</ul>
    </div>
 </div>
	<!-- navbar fin -->


	



<?php require APPROOT . '/views/inc/footer.php'; ?>


