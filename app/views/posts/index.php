<?php require APPROOT . '/views/inc/header.php'; ?>
	<?php flash('post_message'); ?>

	<div class="container d-flex pt-4 ctnrall">
		<a href="<?php echo URLROOT; ?>">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3"></i>
		</a>
		<h2 class="titrelog pt-3">Postes</h2>
	</div>

	<div class="container">
		<div class="row justify-content-center articlesdim animated animatedFadeInUp fadeInUp">
			<?php foreach($data['posts'] as $post) : ?>
				<div class="col-5 p-0 m-2 mb-4 mt-4">
					<div class="card postscard ">			
						<a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">
							<img class=" card-img" src="<?php echo $post->imgbg; ?>" alt="<?php echo $post->imgalt; ?>">
						</a>
					</div>
					<h4 class="card-title indextitle mt-1">  <?php echo $post->title; ?> </h4>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<!--navbarposts-->
<?php require APPROOT . '/views/inc/menu.php'; ?>
<!--navbarposts-->


.
.
.