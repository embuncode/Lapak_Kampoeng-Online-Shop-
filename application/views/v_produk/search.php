    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">Pilih Kategori</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    <?php foreach ($listing_kategori as $listing_kategori) { ?>
                                        <li class="menu-item"><a href="#" class="menu-name"><i class="biolife-icon icon-fish"></i><?= $listing_kategori->nama_kategori ?></a></li>
                                    <?php } ?>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fast-food"></i>Fastfood</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-beef"></i>Fresh Meat</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-onions"></i>Fresh Onion</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Papaya & Crisps</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-contain"></i>Oatmeal</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Fresh Bananas & Plantains</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">                               
                            <form id="form_search" class="form-search" name="desktop-search" action="<?php echo site_url('produk/search');?>" method="GET">
                                    <input type="text" name="title" class="input-text" id="title" placeholder="Aku Mau Beli" style="width:500px;">
                                    <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+62) 822 8148 8568</b></p>
                            <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title"><?= $site->namaweb ?> | <?= $site->tagline ?></h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="<?= base_url() ?>" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Products</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page no-sidebar">
        <div class="container">

            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-category grid-style">
                        <div class="row">
                            <?php foreach ($data as $produk) { ?>
                            <ul class="products-list">

                                <!-- Form untuk proses belanjaan-->
                            <?php echo form_open(base_url('belanja/add')); 
                                // Elemen yang di cetak
                                echo form_hidden('id', $produk->id_produk);
                                echo form_hidden('qty', '1');
                                echo form_hidden('price', $produk->harga);
                                echo form_hidden('name', $produk->nama_produk);

                                // Elemen ridirect
                                echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
                            ?>

                                <li class="product-item col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="<?= base_url('produk/detail/'.$produk->slug_produk) ?>" class="pr-name"><?= $produk->nama_produk ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">Rp </span><?= number_format($produk->harga,'0',',','.') ?></span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="slide-down-box">
                                                <p class="message">All products are carefully selected to ensure food safety.</p>
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <button type="submit" value="submit" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                                    Add to Cart
                                                    </button>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?= form_close(); ?>

                            </ul>
                                <?php } ?>
                        </div>

                        
                <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
                    <?= $pagin; ?>
        </div>
    </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
