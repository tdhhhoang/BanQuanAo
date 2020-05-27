@extends('layout')
@section('content')

<div class="features_items"><!--features_items-->
                        <h2 class="title text-center"style="color: #00FF00;">Sản Phẩm Mới</h2>
                        @foreach($all_product as $key=>$product)
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VND'}}</h2>
                                            <p style="color: #00FF00;">{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        
                                </div>
                                <div class="choose">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                        @endforeach
                        
                        
                        
</div>

@endsection