<?php
    $ruta = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/';
    $pages = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/';
?>
<?php require $ruta . 'header.php'; ?>
<div class="bg-blanco position-relative">
    <h1>Welcome to PHP Motors!</h1>
    <div class="position-absolute dmc">
        <h2 class="txt-gris-mas-fuerte">DMC Delorean</h2>
        <ul class="list-unstyled">
            <li>3 Cup holders</li>
            <li>Superman doors</li>
            <li>Fuzzy dice!</li>
        </ul>
        <p class="d-none d-block-r"><a href="#" class="p-3 bg-celeste-debil d-block mx-auto txt-gris-mas-fuerte fs-5 txt-center" style="width:100px">Own Today</a></p>
    </div>
    <p class="txt-center">
        <img class="img-fluid" src="images/delorean.jpg" alt="">
    </p>
    <div class="boton d-block d-none-r p-3">
        <p class="txt-center"><a href="#" class="p-4 bg-celeste-debil d-block mx-auto txt-gris-mas-fuerte fs-4" style="width:100px">Own Today</a></p>
    </div>
</div>
<div class="row-responsive">
    <div class="w-50-r">
        <h3>DMC Delorean Reviews</h3>
        <div class="p-5">
            <ul>
            <li>"So fast it's almost like traveling in time." (4/5)</li>
            <li>"Coolest ride on the road." (4/5)</li>
            <li>"I'm feeling Marty McFly!" (5/5)</li>
            <li>"The most futuristic ride of our day." (4.5/5) </li>
            <li>"80's livin and I love it!" (5/5) </li>
        </ul>
        </div> 
    </div>
    <div class="w-50-r px-3-r">
        <h3>Delorean Upgrades</h3>
            <div class="d-flex colum1 ">
                <div class="w-50 p-1">
                    <div class="bg-celeste d-flex center-center" style="height:102px"><img src="images/upgrades/flux-cap.png" alt="Flux Capacitor"></div>
                    <h4 class="txt-center"><a href="#">Flux Capacitor</a></h4>
                </div>
                <div class="w-50 p-1">
                    <div class="bg-celeste d-flex center-center" style="height:102px"><img src="images/upgrades/flame.jpg" alt="Flame Decals"></div>
                    <h4 class="txt-center"><a href="#">Flame Decals</a></h4>
                </div>
            </div>
            <div class="d-flex colum1">
                <div class="w-50 p-1">
                    <div class="bg-celeste d-flex center-center" style="height:102px"><img src="images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers"></div>
                    <h4 class="txt-center"><a href="#">Bumper Stickers</a></h4>
                </div>
                <div class="w-50 p-1">
                    <div class="bg-celeste d-flex center-center" style="height:102px"><img src="images/upgrades/hub-cap.jpg" alt="Hub Caps"></div>
                    <h4 class="txt-center"><a href="#">Hub Caps</a></h4>
                </div>
            </div>
    </div>
</div>
<?php require $ruta . 'footer.php'; ?>