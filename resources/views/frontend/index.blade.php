@include('frontend.layouts.header')
@include('frontend.layouts.tophead')



    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="cat-nav-head">
          <div class="row">
            <div class="col-lg-3">
              <div class="all-category">
                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                <ul class="main-category">
                  <li><a href="#">New Arrivals <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul class="sub-category">
                      <li><a href="#">accessories</a></li>
                      <li><a href="#">best selling</a></li>
                      <li><a href="#">top 100 offer</a></li>
                      <li><a href="#">sunglass</a></li>
                      <li><a href="#">watch</a></li>
                      <li><a href="#">man’s product</a></li>
                      <li><a href="#">ladies</a></li>
                      <li><a href="#">westrn dress</a></li>
                      <li><a href="#">denim </a></li>
                    </ul>
                  </li>
                  <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul class="mega-menu">
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Kid's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Kids Toys</a>
                          <a href="#">Kids Travel Car</a>
                          <a href="#">Kids Color Shape</a>
                          <a href="#">Kids Tent</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Men's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Watch</a>
                          <a href="#">T-shirt</a>
                          <a href="#">Hoodies</a>
                          <a href="#">Formal Pant</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Women's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Ladies Shirt</a>
                          <a href="#">Ladies Frog</a>
                          <a href="#">Ladies Sun Glass</a>
                          <a href="#">Ladies Watch</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                   @foreach($allCategories as $category)
                     <li><a href="{{route('view-category',$category->slug)}}">{{$category->name}}</a></li>

                  @endforeach
                
                </ul>
              </div>
            </div>
            <div class="col-lg-9 col-12">
              <div class="menu-area">
                <!-- Main Menu -->
                <nav class="navbar navbar-expand-lg">
                  <div class="navbar-collapse"> 
                    <div class="nav-inner"> 
                      <ul class="nav main-menu menu navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="{{route('all-product')}}">Product</a></li>                        
                          <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                            <ul class="dropdown">
                              <li><a href="cart.html">Cart</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                          </li>
                        
                          <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                              @guest
                            @if (Route::has('login'))
                                <li class="">
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                             @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>    
                                </li>
                        
                            </ul>
                          </li>
                                @endguest
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


  
  <!-- Slider Area -->
  <section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-9 offset-lg-3 col-12">
            <div class="text-inner">
              <div class="row">
                <div class="col-lg-7 col-12 rounded" >
                  <div class="hero-text bg-light rounded p-2 shadow-lg p-3 mb-5 bg-white ">
                    <h1 class=""><span>UP TO 50% OFF </span>Shirt For Man</h1>
                    <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                    <div class="button">
                      <a href="{{url('/all-product')}}" class="btn">Shop Now!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Single Slider -->
  </section>
  <!--/ End Slider Area -->
  
  <!-- Start Small Banner  -->

  <!-- End Small Banner -->
  
  <!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              <div class="nav-main">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  
      @foreach($allCategories as $cat)
         <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{$cat->id}}" role="tab" aria-selected="true">{{$cat->name}}</a></li>
  @endforeach
   
                </ul>
                <!--/ End Tab Nav -->
              </div>


              <div class="tab-content" id="myTabContent">


                <!-- Start Single Tab -->
               
          @foreach($allCategories as $cats)
                <div class="tab-pane fade show active" id="{{$cats->id}}" class="active" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">
                      @php 
                      $products=DB::table('products')->where('cate_id',$cats->id)->get();
                      @endphp
                  @foreach($products as $product)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img class="default-img" src="{{asset('assets/uploads/products/'.$product->image)}}" alt="#">
                              <img class="hover-img" src="{{asset('assets/uploads/products/'.$product->image)}}" alt="#">
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                <a title="Wishlist" href=""><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                <a title="Compare" href=""><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="Add to cart" href="#">Add to cart</a>
                              </div>
                            </div>
                          </div>
                          <div class="product-content">
                            <h3><a href="product-details.html"></a></h3>
                            <div class="product-price">
                              <span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                        @endforeach
                    </div>
                  </div>
                </div>

                @endforeach

                <!--/ End Single Tab -->

              </div>
            </div>
          </div>
        </div>
            </div>
    </div>


  <!-- End Product Area -->
  
  <!-- Start Midium Banner  -->

  <!-- End Midium Banner -->
  
  <!-- Start Most Popular -->
  <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Hot Item</h2>
          </div>
        </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->

            @foreach($hotitems as $item)
        
            <div class="single-product">
              <div class="product-img">
                  <a href="{{route('product-details',$item->slug)}}">

                  <img class="default-img" src="{{asset('assets/uploads/products/'.$item->image)}}"  alt="#">
                  <img class="hover-img"src="{{asset('assets/uploads/products/'.$item->image)}}" alt="#">
                      @if ($item->status==1)
                      <span class="new">Hot </span>
                      
                      @endif
                 </a>
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
              <h3><a href="">{{substr($item->small_description,0,50)}}....</a></h3>
                <div class="product-price">
                  <span class="old">{{$item->original_price}}</span>
                  <span>{{$item->selling_price}}</span>
                </div>
              </div>
            </div>
            @endforeach

           
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- End Most Popular Area -->
  

  
  <!-- Start Shop Home List  -->
  <section class="shop-home-list section">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>On sale</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->
          @foreach($on_sale as $item) 
         
          <div class="single-list">
              <a href="{{route('product-details',$item->slug)}}">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="#">
                  <a href="" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h4 class="title"><a href="">{{substr($item->small_description,0,50)}}....</a></h4>
                  <p class="price with-discount">{{$item->selling_price}}</p>
                </div>
              </div>
            </div>
            </a>
          </div>
        

          @endforeach
        
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>Best Seller</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->

       @foreach($best_seller as $item) 
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">{{$item->small_description}}</a></h5>
                  <p class="price with-discount">{{$item->selling_price}}</p>
                </div>
              </div>
            </div>
          </div>
            @endforeach
          
          <!-- End Single List  -->
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>Top viewed</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->
           @foreach($top_viewed as $item) 
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">{{$item->small_description}}</a></h5>
                  <p class="price with-discount">{{$item->selling_price}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- End Single List  -->
          <!-- Start Single List  -->
        
          <!-- End Single List  -->
          <!-- Start Single List  -->
       
          <!-- End Single List  -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Home List  -->
  
 











  <!-- Start Shop Services Area -->
  <section class="shop-services section home">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-rocket"></i>
            <h4>Free shiping</h4>
            <p>Orders over $100</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-reload"></i>
            <h4>Free Return</h4>
            <p>Within 30 days returns</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-lock"></i>
            <h4>Sucure Payment</h4>
            <p>100% secure payment</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-tag"></i>
            <h4>Best Peice</h4>
            <p>Guaranteed price</p>
          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Services Area -->
  
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