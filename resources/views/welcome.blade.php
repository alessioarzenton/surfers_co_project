<x-layout>

    <div id="header" class="container-fluid" style="background: linear-gradient(transparent,transparent,#fff) ,url('{{ Storage::url('public/img/hero.jpg') }}'); background-size: cover;  background-repeat: no-repeat;">
        <div class="container">

            <x-navbar />

            @if (session('message'))
                <div class="alert alert-success text-center montserrat-bold shadow" style="width: 600px; margin: 20px auto"><i class="bi bi-check-circle-fill"></i> {{ session('message') }}</div>
            @endif

            <div id="title" style="margin: 100px auto">
                <h1 class="playfair-italic display-4 text-center">Ride every wave as if it's you</h1>
                <h4 class="playfair-italic text-center text-white">We love the motion of the ocean</h4>
            </div>

            <div id="carousel" class="carousel carousel-dark slide shadow" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="1500">
                <div class="carousel-inner">
                    @foreach ($products as $product)
                    <div class="carousel-item h-100 p-5 @if ($loop->first)
                    active
                    @endif" style="background: url('{{Storage::url('public/img/sfondo-card.jpg')}}'); background-size: cover;  background-repeat: no-repeat; background-position: center center">
                    <div id="card-surf-{{$product['id']}}" class="row h-100 justify-content-center p-5">
                        <div class="col-11">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <img class="img-fluid" src="storage/{{$product['img']}}" alt="{{$product['title']}}">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="montserrat-bold mb-1 text-truncate">{{$product['title']}}</h5>
                                    <div class="d-flex">
                                        @for ($i = 0; $i <= rand(0,5); $i++)
                                            <i class="bi bi-star-fill text-yellow me-1"></i>
                                        @endfor
                                    </div>
                                    <ul class="nav nav-tabs mt-4 mb-3 d-none d-lg-flex" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link-tab raleway-bold text-muted" id="description-tab-{{$product['id']}}" data-bs-toggle="tab" data-bs-target="#description-{{$product['id']}}" type="button" role="tab" aria-controls="description-{{$product['id']}}" aria-selected="true">DESCRIPTION</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link-tab raleway-bold text-muted" id="features-tab-{{$product['id']}}" data-bs-toggle="tab" data-bs-target="#features-{{$product['id']}}" type="button" role="tab" aria-controls="features-{{$product['id']}}" aria-selected="false">FEATURES</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link-tab raleway-bold text-muted" id="dimensions-tab-{{$product['id']}}" data-bs-toggle="tab" data-bs-target="#dimensions-{{$product['id']}}" type="button" role="tab" aria-controls="dimensions-{{$product['id']}}" aria-selected="false">DIMENSIONS</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content mb-5 d-none d-lg-block" id="myTabContent" style="height:200px">
                                        <div class="tab-pane fade show active fw-lighter" id="description-{{$product['id']}}" role="tabpanel" aria-labelledby="description-tab-{{$product['id']}}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda odit possimus, sint laboriosam laborum vel error omnis beatae ipsum aut, dolores sequi explicabo laudantium eveniet similique voluptatem, quos ullam.Nobis sit veniam rem soluta nemo qui a necessitatibus consequatur sed autem perferendis, molestiae pariatur assumenda nulla possimus at?</div>
                                        <div class="tab-pane fade fw-lighter" id="features-{{$product['id']}}" role="tabpanel" aria-labelledby="features-tab-{{$product['id']}}">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit dolorem hic aliquid cum, quas odio officia libero ab voluptas tempore et ipsa perferendis dolores, molestiae impedit repellendus quae, alias unde.Itaque fuga, facilis, animi asperiores sed tempore iure commodi ex rem temporibus culpa vero natus repellat dicta alias dolores quaerat nobis quisquam, at sit tenetur? Labore eveniet quidem nesciunt atque?</div>
                                        <div class="tab-pane fade fw-lighter" id="dimensions-{{$product['id']}}" role="tabpanel" aria-labelledby="dimensions-tab-{{$product['id']}}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sequi porro quas debitis molestiae commodi, itaque labore ullam pariatur cupiditate, similique nesciunt aut dolor culpa neque illo animi? Voluptate, dolorem?Reprehenderit cupiditate amet facere eius ex aspernatur impedit laboriosam quae commodi, ab dolore omnis, odit temporibus fugiat eos.</div>
                                    </div>
                                    <div class="d-flex align-items-baseline mt-5 mt-xl-0">
                                        <h4 class="montserrat-bold me-4">${{$product['price']}}</h4>
                                        <button class="btn bg-main rounded-0 montserrat-bold px-4 py-2 text-center" type="button">
                                            BUY NOW
                                        </button>
                                    </div>
                                    <div class="mt-5">
                                        <a href="" class="text-main montserrat-bold">View all boards</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                </button>
            </div>

        </div>
    </div>

    <x-about />

    <x-form />

    <x-footer />

</x-layout>
