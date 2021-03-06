@include('frontend.layouts.header')
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
                <li><i class="ti-power-off"></i><a href="">Login</a></li>
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
      
            <div class="mobile-nav"></div>
          </div>


          
          <div class="col-lg-8 col-md-7 col-12">
            <div class="search-bar-top">
             <form action="{{route('search.index')}}" method="GET">

              <div class="search-bar">
                <select>
                  <option selected="selected">All Category</option>
                  @foreach($allCategories as $category)
                  <option value="{{$category->id}}" name='cate_name'>{{$category->name}}</option>
                  @endforeach
                </select>
                  <div>
                  <input name="product" placeholder="Search Products Here....." type="search">
                  <button class="btnn" type="submit"><i class="ti-search"></i></button>
                </div>
              </div>
            </form>
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
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                      <h4><a href="#">Woman Ring</a></h4>
                      <p class="quantity">1x - <span class="amount">$99.00</span></p>
                    </li>
                    <li>
                      <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                      <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
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
            <div class="col-lg-3">
              <div class="all-category">
                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                
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

                
                     
                  
              
                     
             <!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Search Results</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
            
              <div class="tab-content" id="myTabContent">
                <!-- Start Single Tab -->
                 
                <div class="tab-pane fade show active" id="man" role="tabpanel">
                
                  <div class="tab-single">
                    <div class="row">
                       @foreach($filterData as $item)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img class="default-img" src="{{asset('assets/uploads/products/' .$item->image)}}" alt="#">
                              <img class="hover-img" src="{{asset('assets/uploads/products/' .$item->image)}}" alt="#">
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
                            <h3><a href="product-details.html">{{$item->small_description}}</a></h3>
                            <div class="product-price">
                              <span> {{$item->original_price}}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
              
                </div>
              </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
                <!--/ End Single Tab -->







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