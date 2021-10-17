
<!DOCTYPE html>
<html lang="zxx">
<head>
  <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name='copyright' content=''>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
  <!-- Favicon -->

  <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- StyleSheet -->
  
  <!-- Bootstrap -->

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}} " rel="stylesheet">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Fancybox -->
  <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}" rel="stylesheet">
  <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}" rel="stylesheet">
  <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}" rel="stylesheet">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
  <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}" rel="stylesheet">
  <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" rel="stylesheet">
  
  <!-- Eshop StyleSheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
</head>

<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	

		
		<!-- Header -->
		<header class="header shop">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-12 col-12">
							<!-- Top Left -->
							<div class="top-left">
								<ul class="list-main">
									<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
									<li><i class="ti-email"></i> support@shophub.com</li>
								</ul>
							</div>
							<!--/ End Top Left -->
						</div>
						<div class="col-lg-7 col-md-12 col-12">
							<!-- Top Right -->
							<div class="right-content">
								<ul class="list-main">
									<li><i class="ti-location-pin"></i> Store location</li>
									<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
									<li><i class="ti-user"></i> <a href="#">My account</a></li>
									<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>
								</ul>
							</div>
							<!-- End Top Right -->
						</div>
					</div>
				</div>
			</div>

			  @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible fade show w-50" style="margin:0 auto;" role="alert">
                      <strong>Hello !</strong> {{session()->get('success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                @endif

                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
           @endif

			<!-- End Topbar -->
			<div class="middle-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-12">
							<!-- Logo -->
							<div class="logo">
              <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<!-- Search Form -->
								<div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit"><i class="ti-search"></i></button>
									</form>
								</div>
								<!--/ End Search Form -->
							</div>
							<!--/ End Search Form -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-lg-8 col-md-7 col-12">
							<div class="search-bar-top">
								<div class="search-bar">
									<select>
										<option selected="selected">All Category</option>
										<option>watch</option>
										<option>mobile</option>
										<option>kid’s item</option>
									</select>
									<form>
										<input name="search" placeholder="Search Products Here....." type="search">
										<button class="btnn"><i class="ti-search"></i></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form -->
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								</div>
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span>2 Items</span>
											<a href="#">View Cart</a>
										</div>
										<ul class="shopping-list">
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="images/product-1.jpg" alt="#"></a>
												<h4><a href="#">Woman Ring</a></h4>
												<p class="quantity">1x - <span class="amount">$99.00</span></p>
											</li>
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="images/product-2.jpg" alt="#"></a>
												<h4><a href="#">Woman Necklace</a></h4>
												<p class="quantity">1x - <span class="amount">$35.00</span></p>
											</li>
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount">$134.00</span>
											</div>
											<a href="checkout.html" class="btn animate">Checkout</a>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="cat-nav-head">
						<div class="row">
							<div class="col-12">
								<div class="menu-area">
									<!-- Main Menu -->
									<nav class="navbar navbar-expand-lg">
										<div class="navbar-collapse">	
											<div class="nav-inner">	
												<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{url('/')}}">Home</a></li>
													<li><a href="#">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</nav>
									<!--/ End Main Menu -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('/')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
<div class="container">
	<div class="row">
	
		<div class="card shadow-lg p-3 mb-5 bg-white rounded">
			<div class="col-md-12 d-flex">
	            <div class="single-product">
              <div class="product-img">
                  <a href="{{route('product-details',$item->slug)}}">

                  <img class="default-img" src="{{asset('assets/uploads/hot-item/'.$item->image)}}"  alt="#">
                  <img class="hover-img"src="{{asset('assets/uploads/hot-item/'.$item->image)}}" alt="#">
                      <span class="out-of-stock">Hot </span>
                       <span class="out-of-stock bg-info">New </span>


                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="">{{$item->small_description}}</a></h3>
                <div class="product-price">
                  <span class="old">{{$item->original_price}}</span>
                  <span>{{$item->selling_price}}</span>
                </div>
              </div>
            </div>
</a>
			
		</div>
	</div>
</div>
</div>

	

	




	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="{{url('/all-subscriber/store')}}" method="POST" class="newsletter-inner">
			                @csrf
			                <input name="email" placeholder="Your email address" required="" type="email">
			                <button class="btn" type="submit">Subscriber</button>
			              </form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
@include('frontend.layouts.footer')

<script type="text/javascript">
	$(document).ready(function(){
	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});


		$('.addToCartBtn').click(function(e){
			e.preventDefault();
	
			var product_id=$('.prod_id').val();
			var product_qty=$('.qty-input').val();

			alert(product_qty);
			alert(product_id);

			var url="{{ url('/add-to-cart')}}";
		

		
				$.ajax({
					type:"post",
					url:url,
					dataType: "json",
					 cache: false,

					data:{
						product_id:product_id,
						product_qty:product_qty
					},
					success:function(response){
              if(response.success){
                  alert(response.status) ;
              }else{
                  alert("Error");
              }
           },
           error:function(error){
              console.log(error)
           }
				});


		});




		$('.increment-btn').click(function(e){
			e.preventDefault();
			var inc_value=$('.qty-input').val();
			var value=Number(inc_value);

			if(value<50){
				value=value+1;
				$('.qty-input').val(value);
			}

		})

			$('.decrement-btn').click(function(e){
			e.preventDefault();
			var inc_value=$('.qty-input').val();
			var value=Number(inc_value);

			if(value>1){
				value=value-1;
				$('.qty-input').val(value);
			}

		})
	});
</script>