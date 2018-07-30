@extends('components.header')

@include('components.menu')

<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>Shop</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="{{'/'}}">Home</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-1">
    <div class="row">
        <!-- Products-->
        <div class="col-lg-9 order-lg-2">
            <!-- Promo banner-->
            @include('section.banner_shop')
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
                <div class="column">
                    <div class="shop-sorting">
                        <label for="sorting">Sort by:</label>
                        <select class="form-control" id="sorting">
                            <option>Popularity</option>
                            <option>Low - High Price</option>
                            <option>High - Low Price</option>
                            <option>Average Rating</option>
                            <option>A - Z Order</option>
                            <option>Z - A Order</option>
                        </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
                    </div>
                </div>
                <div class="column">
                    <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div>
                </div>
            </div>
            <!-- Products Grid-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/01.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Smart home</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Echo Dot (2nd Generation)</a></h3>
                            <h4 class="product-price">
                                <del>$62.00</del>$49.99
                            </h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                        </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/02.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Photo cameras</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Aberg Best 21 Mega Pixels</a></h3>
                            <h4 class="product-price">$35.00</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/05.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Headphones</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Zeus Bluetooth Headphones</a></h3>
                            <h4 class="product-price">$28.99</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                        </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/06.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Video games</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Xbox One S White</a></h3>
                            <h4 class="product-price">$298.99</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/07.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Smartphones</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Samsung Galaxy S9+</a></h3>
                            <h4 class="product-price">$839.99</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/03.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Computers, laptops</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Microsoft Surface Pro 4</a></h3>
                            <h4 class="product-price">$1,049.10</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="shop-single.html"><i class="icon-arrow-right"></i><span>Details</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/08.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">TV, Video &amp; Audio</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Sony 55-Inch 4K Smart TV</a></h3>
                            <h4 class="product-price">$1,195.00</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/09.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Action cameras</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Samsung Gear 360 Camera</a></h3>
                            <h4 class="product-price">
                                <del>$74.00</del>$68.00
                            </h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                        </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/10.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Printers &amp; Ink</a></div>
                            <h3 class="product-title"><a href="shop-single.html">HP LaserJet Pro Printer</a></h3>
                            <h4 class="product-price">$249.50</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/04.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Smartphones</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Apple iPhone X 64GB</a></h3>
                            <h4 class="product-price">$939.99</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                        </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/11.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Headphones</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Edifier W855BT Bluetooth</a></h3>
                            <h4 class="product-price">$99.75</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/12.jpg" alt="Product"></a>
                        <div class="product-card-body">
                            <div class="product-category"><a href="#">Wearable electornics</a></div>
                            <h3 class="product-title"><a href="shop-single.html">Apple Watch Series 3</a></h3>
                            <h4 class="product-price">$329.10</h4>
                        </div>
                        <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="shop-single.html"><i class="icon-arrow-right"></i><span>Details</span></a></div>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
            @include('components.pagination')
        </div>
        <!-- Sidebar -->
        @include('components.sidebar')
    </div>
</div>


@extends('components.footer')