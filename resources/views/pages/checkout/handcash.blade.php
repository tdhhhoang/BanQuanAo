@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
		
			<div class="review-payment">
				<h2>Cám ơn bạn đã đặt hàng ở Men-Style. Đơn hàng của bạn sẽ được gửi tới chúng tôi để xác nhận và sẽ liên hệ bạn trong thời gian ngắn nhất. Xin Cám Ơn !</h2>
			</div>
				<div class="table-responsive cart_info">
				<?php
				$content= Cart::content();
			

				?> 
				
			</div>
			
		</div>
	</section> <!--/#cart_items-->


@endsection