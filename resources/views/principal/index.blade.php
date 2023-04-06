@extends('principal.mainlayout')

@section('master')


<section class="shop_grid_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 shop_left">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-5">
                        <div class="shop_menu_left">
                            <p>Showing 1–14 of 22 results</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-7">
                        <div class="shop_menu_right d-flex align-items-center justify-content-end">
                            <h5>Sort by </h5>
                            <form method="get" action="#">
                                <select class="selectpickers">
                                    <option value="menu_order">Default Sorting</option>
                                    <option value="popularity">Popularity</option>
                                    <option value="rating">Average rating</option>
                                    <option value="date">Feature</option>
                                    <option value="date">Newness</option>
                                </select>
                            </form>
                            <div class="view-style shop_grid">
                                <div class="list-style">
                                    <a href="#"><i class="ti-layout-grid2"></i></a>
                                </div>
                                <div class="grid-style active">
                                    <a href="#"><i class="ti-menu-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item"> 
                            <div class="product_img"> 
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_1.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details">
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                                </a>
                                <div class="price"> 
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_2.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Woodrow Waste Bin</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_3.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details">
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Spot Flower Plant Pot</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_4.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Contrast Backpack</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_5.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_6.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Glitter Decorated Shoes</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_7.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details">
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Mango Women’s Bag</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_8.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Aviator Sunglasses</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_9.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Charity Startup Website</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_10.jpg') }}" alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">App Landing Theme</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_11.jpg') }}"
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Glitter Decorated Shoes</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_12.jpg') }}"
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Mango Women’s Bag</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_13.jpg') }}"
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Eldercare Startup Website</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_14.jpg') }}"
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details">
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">App Landing Theme</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_15.jpg') }}" 
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Personal Resume & Portfolio</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_product_item">
                            <div class="product_img">
                                <img class="img-fluid" src="{{ asset('frontend/img/shop/shop-grid/grid_16.jpg') }}"
                                    alt="">
                                <div class="hover_content">
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </div>
                            </div>
                            <div class="single_pr_details"> 
                                <a href="#">
                                    <h3 class="f_p f_500 f_size_16">Software Landing Page</h3>
                                </a>
                                <div class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                                </div>
                                <div class="ratting">
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="col-lg-12">
                        <ul class="list-unstyled page-numbers shop_page_number">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#"><i
                                        class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="pr_sidebar">
                    <div class="widget widget_price">
                        <div class="sp_widget_title">
                            Price
                        </div>
                        <div class="filter_slider_area">
                            <div id="slider-range"></div>
                            <div class="filter_content">
                                Ranger:
                                <input type="text" id="amount" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_category">
                        <div class="sp_widget_title">
                            Categories
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Armchair DAR (0)</a></li>
                            <li><a href="#">Chair & Tables (18)</a></li>
                            <li><a href="#">Cleaning Tools (0)</a></li>
                            <li><a href="#">Coffeepots Teapots (0)</a></li>
                            <li><a href="#">DAR Armchair (0)</a></li>
                            <li><a href="#">Decorate & Lighting (18)</a></li>
                            <li><a href="#">Home Accessories (20)</a></li>
                            <li><a href="#">Lighting (21)</a></li>
                            <li><a href="#">Sphere Light (0)</a></li>
                            <li><a href="#">Teakettles (0)</a></li>
                            <li><a href="#">Windsor chair (10)</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_size">
                        <div class="sp_widget_title">
                            Size
                        </div>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term">
                                <a href="#">L</a>
                                <span class="count">(3)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                <a href="#">M</a>
                                <span class="count">(2)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term">
                                <a href="#">S</a>
                                <span class="count">(6)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term">
                                <a href="#">XL</a>
                                <span class="count">(7)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_color">
                        <div class="sp_widget_title">
                            Color
                        </div>
                        <ul class="woocommerce-widget-layered-nav-list">
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term black">
                                <a href="#">Black</a>
                                <span class="count">(0)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term orange">
                                <a href="#">orange</a>
                                <span class="count">(2)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term pink">
                                <a href="#">Pink</a>
                                <span class="count">(6)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term red">
                                <a href="#">Red</a>
                                <span class="count">(7)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term white">
                                <a href="#">White</a> <span class="count">(1)</span>
                            </li>
                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term yellow">
                                <a href="#">Yellow</a> <span class="count">(6)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_product">
                        <div class="sp_widget_title">
                            Best Seller
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="media">
                                    <img src="{{ asset('frontend/img/new/shop-grid/best_pr_1.jpg') }}" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Year and slogan T-shirt</h3>
                                        </a>
                                        <div class="rate">$123.00</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="{{ asset('frontend/img/new/shop-grid/best_pr_2.jpg') }}" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Year and slogan T-shirt</h3>
                                        </a>
                                        <div class="rate">$123.00</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img src="{{ asset('frontend/img/new/shop-grid/best_pr_3.jpg') }}" alt=""> 
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Year and slogan T-shirt</h3>
                                        </a>
                                        <div class="rate">$120.00</div>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <div class="widget widget_tag">
                        <div class="sp_widget_title">
                            Popular Tags
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Lily,</a></li>
                            <li><a href="#">theme,</a></li>
                            <li><a href="#">fashion,</a></li>
                            <li><a href="#">shop,</a></li>
                            <li><a href="#">engotheme,</a></li>
                            <li><a href="#">wordpress,</a></li>
                            <li><a href="#">blog,</a></li>
                            <li><a href="#">women,</a></li>
                            <li><a href="#">bayby,</a></li>
                            <li><a href="#">man</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection