<?php 

    $name = "Marbella";
    $category = "In Stock";
    $title = "In Stock - ".$name;
    $active = "instock";

    // Image name

    $image = 'marbella-cement-tile';

    include $_SERVER['DOCUMENT_ROOT'].'/template/imagepath.php'; 

    include $_SERVER['DOCUMENT_ROOT'].'/template/header.php'; 
?>
    <div class="order-main">
        <!-- header -->
        <section class="toppage">
            <h1><?php echo $name; ?></h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="/cement-tile/instock">Cement Tile</a></li>
                <li><a href="/cement-tile/instock">In Stock</a></li>
                <li class="active"><?php echo $name; ?></li>
            </ol>
            <!-- /breadcrumb -->
        </section>
        <!-- /header -->

        <!-- Top Detail -->
        <meta itemprop="url" content="http://villa_lagoon.3forcom.biz/product-detail">
        <section class="product-detail"  itemscope="" itemtype="http://schema.org/Product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-detail__img-product">
                            <div class="product-detail__img-product__slide">
                                <div class="product-detail__img-product__avatar">
                                    <div>
                                        <div class="content-img" data-large="<?php echo $image_11_large; ?>"><img src="<?php echo $image_11; ?>" alt="<?php echo $image; ?>"></div>
                                    </div>
                                    <div>
                                        <div class="content-img" data-large="<?php echo $image_33_large; ?>"><img src="<?php echo $image_33; ?>" alt="<?php echo $image; ?>"></div>
                                    </div>
                                    <div>
                                        <div class="content-img" data-large="<?php echo $image_55_large; ?>"><img src="<?php echo $image_55; ?>" alt="<?php echo $image; ?>"></div>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <div class="wrapper__item">
                                        <img src="<?php echo $image_11_small; ?>" alt="<?php echo $image; ?>">
                                    </div>
                                    <div class="wrapper__item">
                                        <img src="<?php echo $image_33_small; ?>" alt="<?php echo $image; ?>">
                                    </div>
                                    <div class="wrapper__item">
                                        <img src="<?php echo $image_55_small; ?>" alt="<?php echo $image; ?>">  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-detail__desc-product">
                            <h2 class="h1 heading heading--product-detail">
                                <span class="text-vila"><?php echo $category; ?></span>
                                <b itemprop="name"><?php echo $name; ?></b>
                            </h2>
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="$">
                                <meta itemprop="price" content="16.77">
                                <link itemprop="availability" href="http://schema.org/PreOrder">
                            </div>
                            <div class="product-detail__desc-product__des">
                                <p><span class="title--bold price">$6.24</span><span class="title--bold"> /Piece </span>($14.35 / square foot)</p>
                                <p class="description" itemprop="description">
                                <p>This is a 2-color 8" cement tile, using White and Seagull from the South Beach Palette.</p>

                                <p>This original Villa Lagoon Tile cement tile is perfect for those seeking a simple, elegant flooring. Basic squares on-point set the tempo with classic geometry, softened by a repeating floral pattern in each square.</p>
                                </p>
                                <ul>
                                    <li>Size - <b>8”</b></li>
                                    <li>Thickness - <b>5/8”</b></li>
                                    <li>Tiles per Box - <b>12</b></li>
                                </ul>
                            </div>
                            <div class="product-detail__desc-product__colors">
                                <h4 class="title--bold">Colors in this tile</h4>
                                <ul>
                                    <li>Deep Inlet <br>SB-4012</li>
                                    <li>Lexington <br>SB-2006</li>
                                    <li>Miami Blue <br>SB-4005</li>
                                </ul>
                                <div class="request row">
                                    <div class="request__item col-md-6 col-xs-12 left">
                                        <a class="clients__viewall__btn btn btn-default" href="#" target="_blank">
                                        request a sample <i class="arrow_carrot-right"></i>
                                        </a>
                                    </div>
                                    <div class="request__item col-md-6 col-xs-12 right">
                                        <a class="clients__viewall__btn btn btn-default" href="#" target="_blank">
                                        request a quote <i class="arrow_carrot-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail__desc-product__readmore">
                                <ul class="tabs">
                                    <li class="tabs__item"><h4>detail pricing <i class="icon_plus"></i></h4>
                                        <div class="sub-tab">
                                            <h5 class="title--bold">Marbella, Lot SB-C09, In Stock</h5>
                                            <div class="sub-tab__text">
                                                <ul class="row">
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>Standard Price</span><span class="title--bold">	$6.24</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>square foot</span><span class="title--bold">$14.35</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>square feet</span><span class="title--bold">5.22</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>tiles per box</span><span class="title--bold">12</span></li>
                                                </ul>
                                                <p class="smaple-tile"><b>500+ sq ft:</b> Call us for a custom quote.</p>
                                                <p class="smaple-tile"><b>$12.00 ea:</b> Sample Tile  (inc. shipping) <span class="text-vila see-limits"><i class="arrow_right"></i>See Limits</span></p>
                                                <p class="smaple-des"><b>30 square foot minimum order.</b> You can mix any in-stock patterns to reach the minimums (whole boxes only).</p>
                                                <p class="smaple-des">Close, but not quite there? Consider a second project for a new kitchen backsplash, bathroom accent wall, or even a picnic table top.</p>
                                            </div>
                                            <div class="contact__info contact__info--detail clearfix">
                                                <div class="contact__info__phone">
                                                    <i class="icon_phone"></i>
                                                    <p><a class="title--bold" href="tel:1-251-968-3375" title="1-251-968-3375">1-251-968-3375</a></p>
                                                </div>
                                                <div class="contact__info__mail-us">
                                                    <i class="icon_mail"></i>
                                                    <p><a class="title--bold" href="mailto:info@VillaLagoonTile.com" title="info@VillaLagoonTile.com">info@VillaLagoonTile.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tabs__item"><h4>colors <i class="icon_plus"></i></h4>
                                        <div class="sub-tab">
                                            <h5 class="title--bold">South Beach colors used</h5>
                                            <div class="sub-tab__color-list">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-12 wrapper_item">
                                                        <div class="sub-tab__color-list__item">
                                                            <div class="sub-tab__color-list__item__image">
                                                                <img src="/images/product-detail/color1.png" alt="">
                                                            </div>
                                                            <p class="sub-tab__color-list__item__caption">
                                                                <span class="title--bold">Cityscape</span>
                                                                <br>SB-2004
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-12 wrapper_item">
                                                        <div class="sub-tab__color-list__item">
                                                            <div class="sub-tab__color-list__item__image">
                                                                <img src="/images/product-detail/color2.png" alt="">
                                                            </div>
                                                            <p class="sub-tab__color-list__item__caption">
                                                                <span class="title--bold">Cityscape</span>
                                                                <br>SB-2004
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-12 wrapper_item">
                                                        <div class="sub-tab__color-list__item">
                                                            <div class="sub-tab__color-list__item__image">
                                                                <img src="/images/product-detail/color3.png" alt="">
                                                            </div>
                                                            <p class="sub-tab__color-list__item__caption">
                                                                <span class="title--bold">Cityscape</span>
                                                                <br>SB-2004
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-12 wrapper_item">
                                                        <div class="sub-tab__color-list__item">
                                                            <div class="sub-tab__color-list__item__image">
                                                                <img src="/images/product-detail/other-color.png" alt="">
                                                            </div>
                                                            <p class="sub-tab__color-list__item__caption">
                                                                <a class="text-vila" href="">Choose Your
                                                                Own Colors!</a> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub-tab__click clearfix">
                                                <p><i class="arrow_right"></i><a class="title--bold" href="">Click here for a description and video</a> of how these hand-made products are produced.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tabs__item"><h4>custom tile <i class="icon_plus"></i></h4>
                                        <div class="sub-tab">
                                            <div class="sub-tab__text sub-tab__text--v1">
                                                <p>Unlike with many other products, <b>custom cement tile has no special mark-up.</b> In fact, custom tile can sometimes be slightly less, or even significantly less with large enough orders. Essentially, all cement tile is custom: each tile is hand-made. We pioneered the online in-stock experience to overcome the only difficulty of custom tile: production time. If your project doesn't require your tile for 10-14 weeks or more, and your project is over 50 square feet, custom tile may be your best choice.</p>
                                                <p>You can choose from hundreds of patterns and <span class="title--bold text-vila">dozens of colors</span> in the <span class="title--bold text-vila">South Beach Collection.</span></p>
                                                <p>You can even have us create a new, and unique pattern for less than you think... just ask us for details.</p>
                                            </div>
                                            <div class="contact__info contact__info--detail clearfix">
                                                <div class="contact__info__phone">
                                                    <i class="icon_phone"></i>
                                                    <p><a class="title--bold" href="tel:1-251-968-3375" title="1-251-968-3375">1-251-968-3375</a></p>
                                                </div>
                                                <div class="contact__info__mail-us">
                                                    <i class="icon_mail"></i>
                                                    <p><a class="title--bold" href="mailto:info@VillaLagoonTile.com" title="info@VillaLagoonTile.com">info@VillaLagoonTile.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tabs__item"><h4>Size and Dimentions <i class="icon_plus"></i></h4>
                                        <div class="sub-tab">
                                            <h5 class="title--bold">8" Square Encaustic Cement Tile</h5>
                                            <div class="sub-tab__text">
                                                <ul class="row">
                                                    <li class="col-lg-12">
                                                        <i class="arrow_carrot-right"></i>
                                                        <span>nominal square</span>
                                                        <span class="title--bold">8"</span>
                                                    </li>
                                                    <li class="col-lg-12"><i class="arrow_carrot-right"></i><span>Approximately</span><span class="title--bold">20 cm or 7 7⁄8 inches</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>tiles /square foot</span><span class="title--bold">2.3</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>thick</span><span class="title--bold">5⁄8"</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>square feet per box</span><span class="title--bold">5.22</span></li>
                                                    <li class="col-lg-6"><i class="arrow_carrot-right"></i><span>tiles per box</span><span class="title--bold">12</span></li>
                                                </ul>
                                            </div>
                                            <div class="sub-tab__click clearfix">
                                                <p><i class="arrow_right"></i><a class="title--bold" href="">Click here for more technical details.</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tabs__item">
                                        <h4>how to order <i class="icon_plus"></i></h4>
                                        <div class="sub-tab">
                                            <div class="sub-tab__text sub-tab__text--v1">
                                                <p>Call us or e-mail to discuss your project or order samples.</p>
                                            </div>
                                            <div class="contact__info contact__info--detail clearfix">
                                                <div class="contact__info__phone">
                                                    <i class="icon_phone"></i>
                                                    <p><a class="title--bold" href="tel:1-251-968-3375" title="1-251-968-3375">1-251-968-3375</a></p>
                                                </div>
                                                <div class="contact__info__mail-us">
                                                    <i class="icon_mail"></i>
                                                    <p><a class="title--bold" href="mailto:info@VillaLagoonTile.com" title="info@VillaLagoonTile.com">info@VillaLagoonTile.com</a></p>
                                                </div>
                                            </div>
                                            <div class="sub-tab__text sub-tab__text--v1">
                                                <p>After searching for a custom freight quote, we'll create and send you an invoice, with several payment options, including major credit cards, Paypal, and their "Bill Me Later" financing service.</p>
                                                <p>For e-mail quote requests, please provide with your patterns and quantities a call-back number and a delivery address with zip code, and let us know if this location is residential, or commercial (loading dock or forklift present).</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Top Detail -->
    </div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php'; ?>