@include('frontend.layouts.header')

@include('frontend.layouts.tophead')
@include('frontend.layouts.navbar')
	

    <div class="col-md-12 m-3 d-flex justify-content-center">
							<div class="search-bar-top">
								<div class="search-bar">
									<form action="{{route('price-category-filter')}}" method="GET"  class="d-flex">
									<select name="cate_id" required="">
										<option selected="selected">All Category</option>
										@foreach($allCategories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									  @endforeach
									</select>

									<select name="price" required="" class="mx-1">
										<option selected="selected">Price</option>
										<option value="onetofive">100-500</option>
										<option value="fivetoten">500-1000</option>
										<option value="tentofiften">1000-1500</option>
										<option value="fiftentotwentyfive">1500-2500</option>
										<option value="twentyfivetofifty">2500-5000</option>
										<option value="fiftytohundred">5000-10000</option>
									</select>

									<div>
						
										<button class=" btn btn-info" type="submit" >Search</button>
									</div>
									</form>
								</div>
							</div>
	   </div>


<div class="container">
    <div class="tab-single">
                    <div class="row">
                    	@foreach($allProduct as $product)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="{{route('product-details',$product->slug)}}">
                              <img class="default-img" src="{{asset('assets/uploads/products/'.$product->image)}}" alt="#">
                              <img class="hover-img" src="{{asset('assets/uploads/products/'.$product->image)}}" alt="#">
<!--                               <span class="out-of-stock">Hot</span>
 -->                              <span class="new">new</span>
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
                            <h3><a href="product-details.html">{{$product->small_description}}</a></h3>
                            <div class="product-price d-flex justify-content-between mt-2">
                              <span class="float-start badge badge-success"><s>{{$product->original_price}}</s></span>
                              <span class="float-end badge badge-danger">{{$product->selling_price}} </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
               
        
     
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

