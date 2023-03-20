@extends('contacts.pearant')
@section('content')
    <header>

        <div class="row">
            <div class="col-1">
                <h1>Web trend store <br>a new style!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, facilis excepturi distinctio consequatur magnam accusamus amet quas exercitationem voluptatibus explicabo aperiam facere enim. Enim eligendi ut aliquam, molestiae deserunt cupiditate!</p>
                <a href="#">explore now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="{{ asset('store/images/watch.png') }}">
            </div>
        </div>
    </header>
    <!-- Start Features -->
    <div class="features">
        <h1>our products</h1>

        @foreach ($products as $produt )



        <dxxxiv class="features_box">
            <div class="products_box">
                <img class="img-circle img-bordered-sm" src="{{asset('storage/images/products/'.$produt->img)}}" width="60" height="60" alt="User Image">

                <div class="info">
                    <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                </div>
            </div>
            <h3>{{$produt->name_product}}</h3>
            <div class="rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p><sup>$</sup>{{ $produt->price_product }}</p>

        </dxxxiv>
            @endforeach


            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product3.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>trousers</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product4.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>T-Shirt</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>15.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product5.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>purse</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>60.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product6.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>perfume</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>150.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product7.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>blouse</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product8.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>nike shoes</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>200.00</p>
            </div>
        </div>
    </div>
    <!-- Start latest products -->
    <div class="features">
        <h1>latest products</h1>
        <div class="row">
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product9.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>rolex watch</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>100.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product10.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>shirt</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                <img src="{{ asset('store/images/product11.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>trousers</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>20.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product12.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>dress</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>40.00</p>
            </div>
        </div>
    </div>
    <!-- Start Discount Section -->
    <div class="discount">
        <div class="col1">
            <h1>apple watch</h1>
            <h4><sup>$</sup>250</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex neque, rerum earum recusandae vitae est, sapiente iure quidem quis accusamus perferendis, animi asperiores sunt tempore exercitationem vel facere harum aperiam</p>
            <a href="#">buy now &#8594;</a>
        </div>
        <div class="col2">
            <img src="{{asset('store/images/watch.png')}}">
        </div>
    </div>
    <!-- Start Testimonials -->

   @foreach ($comments as $comment)

    <div class="testimonials">
         <h1>testimonials</h1>
         <a href="{{ route('comments.create') }}">Customer opinions &#8594;</a>
        <div class="row">

            <div class="testimonials_box">
                <div class="img_box">
                    <img class="img-circle img-bordered-sm" src="{{asset('storage/images/Comment/'.$comment->img)}}" width="60" height="60" alt="User img">
                </div>
                <p>{{ $comment->comment }}</p>
                <h4>{{ $comment->name }}</h4>
                <span>our customer</span>
            </div>

    </div>
    @endforeach

    <!-- Start Brand -->

    @foreach ($companies as $company )

    <div class="brand">
        <img class="img-circle img-bordered-sm" src="{{asset('storage/images/companies/'.$company->img)}}" width="60" height="60" alt="User img">
    </div>
    @endforeach
@endsection

