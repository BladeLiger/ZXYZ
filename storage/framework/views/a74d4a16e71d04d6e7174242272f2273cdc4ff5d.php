 <style type="text/css">
    .todo{
        position: absolute;
        z-index: 1000;
    }
    .mp-level{
        padding-bottom: 500px;
        margin-top: 80px;
    }
    .gapd{
        color: #fff !important;
        font-size: 1.5em !important;
    }
    .colorfff{
        color: #fff !important;
    }
</style>
  <div class="mp-pusher" id="mp-pusher">

                <!-- mp-menu -->
                <nav id="mp-menu" class="mp-menu">
                    <div class="mp-level">
                        <h2 class="icon icon-world gapd">Pagina Web GADP</h2>
                        <ul>
                             <li class="icon icon-arrow-left">
                                <a class="icon icon-shop" href="#">Inicio</a>
                                <div class="mp-level">
                                    <h2 class="icon icon-shop colorfff">Inicio</h2>
                                    <a class="mp-back" href="#"> Atras</a>
                                    <ul>
                                        <li>
                                            <a class="icon icon-diamond" href="#">Noticias Recientes</a>
                                        </li>
                                        <li>
                                            <a class="icon icon-music" href="#">Enlaces</a>
                                        </li>
                                        <li>
                                            <a class="icon icon-food" href="#">Radio</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-left">
                                <a class="icon icon-display" href="#">Devices</a>
                                <div class="mp-level">
                                    <h2 class="icon icon-display">Devices</h2>
                                    <a class="mp-back" href="#">back</a>
                                    <ul>
                                        <li class="icon icon-arrow-left">
                                            <a class="icon icon-phone" href="#">Mobile Phones</a>
                                            <div class="mp-level">
                                                <h2>Mobile Phones</h2>
                                                <a class="mp-back" href="#">back</a>
                                                <ul>
                                                    <li><a href="#">Super Smart Phone</a></li>
                                                    <li><a href="#">Thin Magic Mobile</a></li>
                                                    <li><a href="#">Performance Crusher</a></li>
                                                    <li><a href="#">Futuristic Experience</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="icon icon-arrow-left">
                                            <a class="icon icon-tv" href="#">Televisions</a>
                                            <div class="mp-level">
                                                <h2>Televisions</h2>
                                                <a class="mp-back" href="#">back</a>
                                                <ul>
                                                    <li><a href="#">Flat Superscreen</a></li>
                                                    <li><a href="#">Gigantic LED</a></li>
                                                    <li><a href="#">Power Eater</a></li>
                                                    <li><a href="#">3D Experience</a></li>
                                                    <li><a href="#">Classic Comfort</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="icon icon-arrow-left">
                                            <a class="icon icon-camera" href="#">Cameras</a>
                                            <div class="mp-level">
                                                <h2>Cameras</h2>
                                                <a class="mp-back" href="#">back</a>
                                                <ul>
                                                    <li><a href="#">Smart Shot</a></li>
                                                    <li><a href="#">Power Shooter</a></li>
                                                    <li><a href="#">Easy Photo Maker</a></li>
                                                    <li><a href="#">Super Pixel</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-left">
                                <a class="icon icon-news" href="#">Paginas Web</a>
                                <div class="mp-level">
                                    <h2 class="icon icon-news">Paginas Web</h2>
                                    <a class="mp-back" href="#">Atras</a>
                                    <ul>
                                    <?php foreach($sitios as $s): ?>
                                        <li><a href="<?php echo e(url('sitio/'.$s->id)); ?>"><?php echo e($s->nombre_sitio); ?></a></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-left">
                                <a class="icon icon-shop" href="#">Store</a>
                                <div class="mp-level">
                                    <h2 class="icon icon-shop">Store</h2>
                                    <a class="mp-back" href="#"> Atras</a>
                                    <ul>
                                        <li class="icon icon-arrow-left">
                                            <a class="icon icon-t-shirt" href="#">Clothes</a>
                                            <div class="mp-level">
                                                <h2 class="icon icon-t-shirt">Clothes</h2>
                                                <a class="mp-back" href="#">back</a>
                                                <ul>
                                                    <li class="icon icon-arrow-left">
                                                        <a class="icon icon-female" href="#">Women's Clothing</a>
                                                        <div class="mp-level">
                                                            <h2 class="icon icon-female">Women's Clothing</h2>
                                                            <a class="mp-back" href="#">back</a>
                                                            <ul>
                                                                <li><a href="#">Tops</a></li>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Trousers</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Sale</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="icon icon-arrow-left">
                                                        <a class="icon icon-male" href="#">Men's Clothing</a>
                                                        <div class="mp-level">
                                                            <h2 class="icon icon-male">Men's Clothing</h2>
                                                            <a class="mp-back" href="#">back</a>
                                                            <ul>
                                                                <li><a href="#">Shirts</a></li>
                                                                <li><a href="#">Trousers</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Sale</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="icon icon-diamond" href="#">Jewelry</a>
                                        </li>
                                        <li>
                                            <a class="icon icon-music" href="#">Music</a>
                                        </li>
                                        <li>
                                            <a class="icon icon-food" href="#">Grocery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="icon icon-photo" href="#">Collections</a></li>
                            <li><a class="icon icon-wallet" href="#">Credits</a></li>
                        </ul>
                            
                    </div>
                </nav>
                <!-- /mp-menu -->
            </div><!-- /pusher -->