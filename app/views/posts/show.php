<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container d-flex pt-4 showtitle ctnrall">
		<a class="showarrow" href="<?php echo URLROOT; ?>/posts">
			<i class="fas fa-long-arrow-alt-left m-3 ms-1 me-3 text-light"></i>
		</a>
		<h4 class="card-title pt-3"><?php echo $data['post']->title; ?></h4>
	</div>

<div class="card border-0 mb-3">
  <img src="<?php echo $data['post']->imgbg; ?>" class="card-img-top showimg" alt="<?php echo $data['post']->imgalt; ?>">
  <div class="card-body mb-5">
    
    <p class="card-text"><?php echo $data['post']->body; ?></p>
    <p class="card-text"><small class="text-muted">Écrit par <?php echo $data['user']->name; ?> à <?php echo date_format(new DateTime($data['post']->created_at), 'H:i:s \l\e d-m-Y'); ?></small></p>
  </div>
</div>

<!--Modification/Suppr-->
<div class="container text-center showbuttons animated animatedFadeInUp fadeInUp">
	<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
		<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark showbuttons--edit"> Modifier</a>
		<form class="pull-right" action=" <?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
			<input type="submit" value="Supprimer" class="btn btn-danger showbuttons--del">
		</form>
	<?php endif; ?>
</div>	


<!--Commentaries-->
<div class="container text-center showcomment animated animatedFadeInUp fadeInUp">
	<a href="<?php echo URLROOT; ?>/posts/comment/<?php echo $data['post']->id; ?>" class="btn showcommentbouton text-light">COMMENTER</a>
</div>

<div class="container p-3 showcommentctnr">
	<?php foreach($data['comments'] as $commentview) : ?>
		<div class="card card-body border-danger m-2 p-2">
			<p class="card-text"><?php echo $commentview->commentbody; ?></p>
			<p class="card-text"><small class="text-muted">Écrit par: <?php echo $commentview->name; ?> à <?php echo date_format(new DateTime($commentview->commentsCreated), 'H:i:s \l\e d-m-Y'); ?>
</small></p>
		</div>
	<?php endforeach; ?>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>