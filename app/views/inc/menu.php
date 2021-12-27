
<div class="container menunav">
    <div class="container d-flex aligns-items-center justify-content-center">
        <ul class="m-0 list-group list-group-horizontal">
            <li class="p-4 pb-1 me-2 ms-2">
                <a href="<?php echo URLROOT; ?>">
                    <img src="<?php echo URLROOT; ?>/images/home.png" alt="Home">
                </a>
            </li>
            <?php if(isLoggedInAdmin()) : ?>
            <li class="p-4 pb-1 me-2 ms-2">
                <a href="<?php echo URLROOT; ?>/posts/add">
                    <img src="<?php echo URLROOT; ?>/images/write.png" alt="Nouveau poste">
                </a>
            </li>
            <?php endif; ?>
            <li class="p-4 pb-1 me-2 ms-2">
                <a href="<?php echo URLROOT; ?>/pages/meteo">
                    <img src="<?php echo URLROOT; ?>/images/sun.png" alt="Météo">
                </a>
            </li>
            <li class="p-4 pb-1 me-2 ms-2">
                <a href="<?php echo URLROOT; ?>/users/logout">
                    <img src="<?php echo URLROOT; ?>/images/sign-out.png" alt="Déconnexion">
                </a>    
            </li>
        </ul>
    </div>
</div>