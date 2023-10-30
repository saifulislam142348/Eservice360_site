
<div class="single_toparrival">

    <div class="topariv_img">
        <a href="{{ route('front.products.show', $product->id) }}">
            <img class="hover-img " src="{{ getImage('products', $product->image) }}" alt="product" style=" height:170px;"
                loading="lazy">
        </a>

        @if ($product->discount !== '0.00')
            <div class="persof bg-warning">{{ $product->discount_type == 'fixed' ? '$' : '' }}{{ $product->discount }}
                {{ $product->discount_type == 'fixed' ? '' : '%' }} Off</div>
        @endif

        {{-- <div class="prod_soh">
			<div class="adto_wish">
				<i class="icon-heart"></i>
			</div>
			<div class="qk_view open_quickview" data-id="{{ $product->id }}">
				<span><i class="las la-eye"></i></span>
				Quick View
			</div>
		</div> --}}
    </div>

    <div class="topariv_cont" style="padding: 10px 0px 10px 0px !important; ">
        <a href="{{ route('front.products.show', $product->id) }}">
            <span style=" padding:0px; margin:0px;"
                class="text-justify">{{ \Illuminate\Support\Str::limit($product->name, 22), '.' }}</span>
        </a>

        <div class="price mb-1">
            <span class="org_price">{{ priceFormate($data['price']) }}</span>
            @if ($data['old_price'])
                <span class="price old-price">
                    <del>{{ priceFormate($data['old_price']) }}</span></del>
            @endif
        </div>
    </div>
    <form id="cart_form" method="POST" action="{{ route('front.carts.store') }}">
        @csrf

        <input name="product_id" type="hidden" value="{{ $product->id }}">
        <input name="quantity" type="hidden" value="1">
        <input name="variation_id" type="hidden" value="{{ $product->variation->id }}">
        <input class="button-2 product-box-add-to-cart-button" type="hidden" value="Order Now" />
        <div class="full_atc_btn">
            <button>
                <span class="me-1"><i class="icon-cart"></i></span>
                অর্ডার করুন
            </button>
        </div>
    </form>
</div>

<!-- single top arrival  -->
