
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
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
											<span>2</span>
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
													<li><a href="{{route('all-product')}}">Product</a></li>												
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
		<div class="col-md-12 d-flex justify-content-between">	


			<div class="col-md-4 border-right">
	      <div class="image">
	      	<img src="{{asset('assets/uploads/products/' .$productDetails->image)}}" class="w-100">
	      	</div>
		</div>
		<div class="col-md-8">
			<input type="hidden" value="{{$productDetails->id}}" class="prod_id">
			<h2 class="mb-0"> 
           {{$productDetails->name}}
           <label class="float-end badge bg-danger">  Trending</label>
         </h2>
         <hr>
         <div class="d-flex justify-content-between">
         <label class="me-3 float-start">Original Price: <s> Taka {{$productDetails->original_price}} </s> 
         </label> 
         <label class="me-3 float-end"><b>Selling Price:  Taka {{$productDetails->selling_price}} </b> </label>
       </div>

         <p class="mt-3">
         	Description:
         	{{$productDetails->description}}
         </p>

         <div class="row ">
         
         		<label class="d-block"> Quantity </label>
	      <div class="input-group  ">
         	
         		<span class="decrement-btn"> <b> - </b>
         			<input type="text" name="  "  value="1"  class="qty-input my-3" />
         		<span class="increment-btn"> <b> + </b>
         		</span>
         		
       </div>
   
         			<button type="submit" class="btn btn-success mx-2"> <i class="fa fa-heart"> </i>Add to Wishlist </button>		
         			<button type="submit" class="btn btn-primary float-end addToCartBtn"> <i class="fa fa-heart "> </i>Add to Cart </button>
         
         </div>
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
	$('.total-count').hover(function(e){
	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});


					var url="{{ url('/show-cart')}}";
		
				$.ajax({
					type:"get",
					url:url,
					 cache: false,

					success:function(response){

						 $('tbody').html('');
          $.each(response.students,function(key,item){
              $('tbody').append(
                '<tr>\
                <th scope="row">'+key+'</th>\
                <td>'+item.id+'</td>\
                <td>'+item.name+'</td>\
                <td>'+item.email+'</td>\
                <td>'+item.phone+'</td>\
                <td>'+item.course+'</td>\
                <td>\
                  <button type="button" value="'+item.id+'" class="edit_student btn btn-info">Edit </button>\
                  <button type="button" value="'+item.id+'" class=" delete_student btn btn-danger">Delete </button>\
                </td>\
              </tr>'
              );
            });
      
              if(response.status){
                  alert(response.status) ;
              }else{
                  alert("Error");
              }
           },
           error:function(error){
              alert("Something problem");
           }
				});

	
			});
});

</script>

<script type="text/javascript">
	$(document).ready(function(){
	$('.increment-btn').click(function(e){
			e.preventDefault();
			var inc_value=$('.qty-input').val();
			var value=parseInt(inc_value,10);
			value=isNaN(value) ? 0 : value;

			if(value<50){
				value++;
				$('.qty-input').val(value);
			}

		});


	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});


		$('.addToCartBtn').click(function(e){
			e.preventDefault();

	
			var product_id=$('.prod_id').val();
			var product_qty=$('.qty-input').val();
	
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
              if(response.status){
                  alert(response.status) ;
              }else{
                  alert("Error");
              }
           },
           error:function(error){
              alert("Product already added or something problem");
           }
				});


		});		
	});


</script>