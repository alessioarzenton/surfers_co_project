<x-layout>

    <div id="header" class="container-fluid vh-100" style="background: linear-gradient(transparent,transparent,#fff) ,url('{{ Storage::url('public/img/hero.jpg') }}'); background-size: cover;  background-repeat: no-repeat;">
        <div class="container">

            <x-navbar />

            <div id="title" style="margin: 100px auto">
                <h1 class="playfair-italic display-4 text-center">Ride every wave as if it's you</h1>
                <h4 class="playfair-italic text-center text-white">We love the motion of the ocean</h4>
            </div>

            <div id="card-surf" class="row justify-content-center bg-white p-5 shadow" style="background: url('{{Storage::url('public/img/sfondo-card.jpg')}}'); background-size: contain;  background-repeat: no-repeat;">
                <div class="col-11">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="{{Storage::url('public/img/tavola-surf.png')}}" alt="tavola surf">
                        </div>
                        <div class="col-md-6">
                            <h5 class="montserrat-bold mb-1">JR Surfboards The Donny Stoker Yellow/Green Rail Fade</h5>
                            <div class="d-flex">
                                <i class="bi bi-star-fill text-yellow me-1"></i>
                                <i class="bi bi-star-fill text-yellow me-1"></i>
                                <i class="bi bi-star-fill text-yellow me-1"></i>
                                <i class="bi bi-star-fill text-yellow me-1"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <ul class="nav nav-tabs mt-4 mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link-tab raleway-bold text-muted" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">DESCRIPTION</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link-tab raleway-bold text-muted" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab" aria-controls="features" aria-selected="false">FEATURES</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link-tab raleway-bold text-muted" id="dimensions-tab" data-bs-toggle="tab" data-bs-target="#dimensions" type="button" role="tab" aria-controls="dimensions" aria-selected="false">DIMENSIONS</button>
                                </li>
                              </ul>
                              <div class="tab-content mb-4" id="myTabContent" style="height:240px">
                                <div class="tab-pane fade show active fw-lighter" id="description" role="tabpanel" aria-labelledby="description-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda odit possimus, sint laboriosam laborum vel error omnis beatae ipsum aut, dolores sequi explicabo laudantium eveniet similique voluptatem, quos ullam.Nobis sit veniam rem soluta nemo qui a necessitatibus consequatur sed autem perferendis, molestiae pariatur assumenda nulla possimus at? Inventore, illo dolor quia placeat repellat et repudiandae dicta similique laudantium?</div>
                                <div class="tab-pane fade fw-lighter" id="features" role="tabpanel" aria-labelledby="features-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit dolorem hic aliquid cum, quas odio officia libero ab voluptas tempore et ipsa perferendis dolores, molestiae impedit repellendus quae, alias unde.Itaque fuga, facilis, animi asperiores sed tempore iure commodi ex rem temporibus culpa vero natus repellat dicta alias dolores quaerat nobis quisquam, at sit tenetur? Labore eveniet quidem nesciunt atque?</div>
                                <div class="tab-pane fade fw-lighter" id="dimensions" role="tabpanel" aria-labelledby="dimensions-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sequi porro quas debitis molestiae commodi, itaque labore ullam pariatur cupiditate, similique nesciunt aut dolor culpa neque illo animi? Voluptate, dolorem?Reprehenderit cupiditate amet facere eius ex aspernatur impedit laboriosam quae commodi, ab dolore omnis, odit temporibus fugiat eos. Maxime, laborum quos quisquam dolores iure iste. Assumenda sed vel quidem tempora!</div>
                              </div>
                            <div class="d-flex align-items-baseline">
                                <h4 class="montserrat-bold me-4">$499.99</h4>
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
    </div>

    <div id="about-title" class="container-fluid pt-5" style="position: relative; z-index: -1">
        <div class="container h-100 pt-5">
            <p class="text-light text-center monteserrat-bold fw-bolder pt-5">ABOUT US</p>
        </div>
    </div>

    <div id="about" class="container-fluid vh-100" style="background: url('{{Storage::url('public/img/background.jpg')}}'); background-size: contain;  background-repeat: no-repeat; margin-top: -100px">

    </div>



</x-layout>
