<div class="rs-breadcrumbs sec-color">
  <img src="{{url('storage/images')}}/breadcrumbs/shop.jpg" alt="Breadcrubs" />
  <div class="breadcrumbs-inner">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 text-center">
  				<h1 class="page-title" style="text-transform: capitalize;">Our Shop</h1>
  				<ul>
  					<li>
  						<a class="active" href="index.html">Home</a>
  					</li>
  					<li style="text-transform: capitalize;">Shop</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  </div>
</div>
<div class="our-products-section our-products-page sec-spacer">
<div class="container">
	<div class="row">
    @foreach($product as $key=>$value)
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="single-product text-center">
				<div class="product-image">
					<div class="overly"></div>
					<a href="#"><img src="{{url('')}}{{$value->image}}" alt="Product" / style="min-height:250px; max-height:250px;"></a>
				</div>
				<div class="product-details">
            <div class="product-tile">
                <a href="#">{{$value->p_name}}</a>
                <span>$ {{$value->p_sale_price}}</span>
            </div>
            <div class="product-cart">
                <a href="{{url('sport/shop')}}/{{$value->slug}}"><i class="fa fa-shopping-cart"></i> {{trans('lang.view_detail')}}</a>
            </div>
        </div>
			</div>
		</div>
    @endforeach
		</div>
    <div class="row">
        <div class="col-sm-12">
            <div class="default-pagination text-center">
              {{ $product->links() }}
            </div>
        </div>
    </div>
	</div>
</div>
