@extends('FrontEnd.master');
@section('title')
    Icanteen | Home
@endsection
@section('content')
    <div class="add-products">  
		<div class="container">
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="menu.html"> 
						<h4>Dapatkan <span>20%<br>Cashback</span></h4>
						<h5>Order di Handphone mu sekarang!... </h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-right">
					<a href="menu.html"> 
						<h4>Dapatkan Lebih Dari<span><br>40%</span></h4>
						<h5>Rabu Diskon Meriah</h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<div class="clearfix"> </div> 
			</div>  	 
		</div>
	</div>
	<!-- //add-products --> 
	<!-- order -->   	
	<div class="wthree-order">  
		<img src="{{asset('FrontEndSourceFile')}}/images/i2.jpg" class="w3order-img" alt=""/>
		<div class="container">
			<h3 class="w3ls-title">Bagaimana Cara Melakukan Order</h3>
			<p class="w3lsorder-text">Dapatkan Makanan Favoritmu dengan 4 Step.</p>
			<div class="order-agileinfo">  
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-map" aria-hidden="true"></i> 
						<h5>Cari Makanan</h5>
						<span>1</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-cutlery" aria-hidden="true"></i> 
						<h5>Pilih Makanan</h5>
						<span>2</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h5>Bayar</h5>
						<span>3</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-truck" aria-hidden="true"></i>
						<h5>Nikmati Makananmu</h5>
						<span>4</span>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
		</div>
	</div>
	<!-- //order -->   
    <!-- dishes -->
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="w3ls-title">Hidangan Spesial</h3>
			<div class="spldishes-agileinfo">
				<div class="col-md-3 spldishes-w3left">
					<h5 class="w3ltitle">Spesial dari Kami</h5>
					<p>Makanan Spesial untuk Kamu yang spesial. Sedikit gula, karena masnisnya di kamu.</p>
				</div> 
				<div class="col-md-9 spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                        @foreach($dishes as $dish)
						<a href="{{ route('category_dish', ['category_id'=>$dish->category_id]) }}" class="item g1">
							<img class="lazyOwl" src="{{$dish->dish_image}}" style="width:277px; height:190px" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>{{$dish->dish_name}}</h4>
								<span>{{$dish->dish_detail}}</span>
							</div>
						</a>
                        @endforeach
						
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //dishes -->  
	<!-- deals -->
	<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Servis Spesial</h3>
			<div class="dealsrow">
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Gratis Ongkir</h4>
						<p>Gratis ongkir untuk kamu yang mager keluar.</p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Perayaan Hari Spesial</h4>
						<p>Rayakan hari spesialmu bersama orang tersayang dengan memesan makanan dan minuman di Icanteen</p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Makan Bareng</h4>
						<p>Makin rame, makin seru, dan makin muraaahh....</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Perusahaan Mabar</h4>
						<p>Makan Bareng bersama di perusahaan saat jam istirahat atau pulang kerja</p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //deals --> 
	
@endsection