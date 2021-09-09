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
                            <div class="small mb-1">SKU: BST-498</div>
                            <h1 class="display-5 fw-bolder">Shop item template</h1>
                            <div class="fs-5 mb-5">
                                <span class="text-decoration-line-through">$45.00</span>
                                <span>$40.00</span>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                            <div class="d-flex">
                                <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem">
                                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-layout>
