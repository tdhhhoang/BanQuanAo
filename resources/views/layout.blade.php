<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home| Bán Quần Áo Nam</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/img/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/frontend/img/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{('public/frontend/img/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{('public/frontend/img/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{('public/frontend/img/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="tel:097 83 26 531"><i class="fa fa-phone"></i> 097 83 26 531</a></li>
                                <li><a href="mailto:tdhhhoang@gmail.com"><i class="fa fa-envelope"></i> tdhhhoang@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="instagram.com"><i class="fa fa-instagram"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="{{('public/frontend/img/logobest.png')}}" height="39" width="139" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Việt Nam
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USA</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    VND
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                
                                <li><a href="#"><i class="fa fa-star"></i> Yêu Thích</a></li>

                                <?php
                                $customer_id=Session::get('customer_id');
                                $shipping_id=Session::get('shipping_id');
                                if($customer_id!=NULL&&$shipping_id==NULL ){

                                ?>
                                 <li><a href="{{URL::to ('/checkout') }}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>
                                
                                <?php

                            }elseif($customer_id!=NULL&&$shipping_id!=NULL){
                                ?>
                                <li><a href="{{URL::to ('/payment') }}"><i class="fa fa-lock"></i> Thanh Toán</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{URL::to ('/login-checkout') }}"><i class="fa fa-crosshairs"></i> Thanh Toán</a></li>
                               <?php
                                 }
                                ?>
                               
                                <li><a href="{{URL::to ('/show-cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>

                                <?php
                                $customer_id=Session::get('customer_id');
                                if($customer_id!=NULL){

                                ?>
                                <li><a href="{{URL::to ('/logout-checkout') }}"><i class="fa fa-lock"></i> Đăng Xuất</a></li>
                                
                                <?php

                            }else{
                                ?>
                                <li><a href="{{URL::to ('/login-checkout') }}"><i class="fa fa-lock"></i> Đăng Nhập</a></li>
                                <?php
                                }
                                ?>
                            
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
         <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Tên Thành Viên 
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nguyễn Gia Hân</a></li>
                                    <li><a href="#">Tạ Đỗ Huy Hoàng</a></li>
                                    <li><a href="#">Phùng Quốc Minh Khánh</a></li>
                                    <li><a href="#">Võ Minh Hiển</a></li>
                                    <li><a href="#">Trang Văn Việt</a></li>
                                </ul>
                            </div>
                            
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
                                <li class="dropdown"><a href="#">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản Phẩm</a></li>
                                        
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>
                                   
                                </li> 
                                <li><a href="{{URL::to ('/show-cart') }}">Giỏ Hàng MenStyle</a></li>
                                <li><a href="contact-us.html">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to ('/tim-kiem') }}" method="POST">
                            {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm Kiếm Sản Phẩm"/>
                            <input type="submit" style="color:#111" name="search_items" class="btn btn-success btn-sm" value="Tìm Kiếm" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>MEN</span>-STYLE</h1>
                                    <h2>Phong Cách Luôn Thay Đổi</h2>
                                    <p>Luôn luôn cập nhập các xu hướng mới phù hợp với độ tuổi công sở, người làm việc trong các văn phòng muốn thay đổi bản thân </p>
                                    <button type="button" class="btn btn-default get">Mua Ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/img/new1.png')}}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{('public/frontend/img/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MEN</span>-STYLE</h1>
                                    <h2>Đáp Ứng Nhu Cầu Khách Hàng</h2>
                                    <p>Thời trang Menstyle thuyết phục khách hàng bằng từng kiểu dáng trang phục thiết kế độc quyền, sự sắc sảo trong mỗi đường nét cắt may, sử dụng chất liệu vải cao cấp và luôn hòa điệu cùng xu hướng quốc tế. Đây là con đường Menstyle theo đuổi và hướng đến phát triển bền vững.. </p>
                                    <button type="button" class="btn btn-default get">Lựa Luôn</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/img/new2.png')}}" class="girl img-responsive" alt="" />
                                    {{-- <img src="{{('public/frontend/img/pricing.png')}}"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MEN</span>-STYLE</h1>
                                    <h2>Nhiều Ưu Đãi Khủng</h2>
                                    <p>Luôn có những ưu đãi vào các dịp lễ và đặc biệt dành cho những khách hàng mua hàng thường xuyên. Free ship với đơn hàng có giá trị trên 1.000.000 VND </p>
                                    <button type="button" class="btn btn-default get">Lựa Chọn Thôi Nào</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/img/new3.png')}}" class="girl img-responsive" alt="" />
                                   {{--  <img src="{{('public/frontend/img/pricing.png')}}" class="pricing" alt="" />
                                </div> --}}
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2 style="color: #00FF00;">Danh Mục Sản Phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                            @foreach($category as $key=> $cate)
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                           @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2 style="color: #00FF00;">Thương Hiệu Sản Phẩm</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key=>$brand)
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                       <!--  <div class="price-range"><
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                         -->
                        <!-- <div class="shipping text-center">
                            <img src="{{('public/frontend/img/shipping.jpg')}}" alt="" />
                        </div> -->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">

                    @yield('content')
                    
                    
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Men</span>-Style</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/img/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                         <img src="{{('public/frontend/img/iframe2.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                         <img src="{{('public/frontend/img/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                         <img src="{{('public/frontend/img/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{('public/frontend/img/map.png')}}" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2019 Men-Style Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Hoang Tii</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>