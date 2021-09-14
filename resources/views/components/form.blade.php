<div class="container pt-5 py-5">
    <div class="row pt-5 py-5 py-lg-0">
        <div id="col-instagram" class="col-12 col-md-6 h-100">
            <p id="instagram-title" class="text-light monteserrat-bold fw-bolder" style="position: relative; z-index: -1">INSTAGRAM</p>
            <img id="instagram-img" class="w-100" src="{{Storage::url('public/img/instagram.jpg')}}" alt="instagram">
            <div class="row p-2 bg-white shadow-sm">
                <div class="col d-flex align-items-center">
                    <i class="bi bi-instagram text-main me-3" style="font-size: 24px"></i>
                    <span class="roboto text-main me-3" style="font-size: 24px">
                        FOLLOW US
                    </span>
                    <span class="raleway-regular" style="font-size: 16px">
                        @surfersco
                    </span>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <p class="text-secondary raleway-regular">Credits</p>
                </div>
            </div>
        </div>
        <div class="col-0 col-md-1"></div>
        <div class="col-12 col-md-5 h-100 d-flex align-items-center pt-xl-5">

            <form class="w-100 pt-5" action="{{route('contact')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <input name="name" value="{{old('name')}}" type="text" class="form-control montserrat-regular @error('name')
                    is-invalid
                    @enderror" id="name" placeholder="Name">
                  </div>
                <div class="mb-3">
                  <input name="email" value="{{old('email')}}" type="email" class="form-control montserrat-regular @error('email')
                    is-invalid
                  @enderror" id="email" placeholder="Email">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <input name="birthplace" value="{{old('birthplace')}}" ype="text" class="form-control montserrat-regular @error('birthplace')
                        is-invalid
                        @enderror" id="birthplace" placeholder="Birthplace">
                    </div>
                    <div class="col mb-3">
                      <input name="birthday" value="{{old('birthday')}}" type="date" class="form-control montserrat-regular @error('birthday')
                        is-invalid
                      @enderror" id="birthday">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                      <input name="phone" value="{{old('phone')}}" id="phone" type="text" class="form-control montserrat-regular @error('phone')
                        is-invalid
                      @enderror" placeholder="Phone">
                    </div>
                    <div class="col mb-3">
                      <input name="company" value="{{old('company')}}" id="company" type="text" class="form-control montserrat-regular @error('company')
                        is-invalid
                      @enderror" placeholder="Company">
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="message" type="message" class="form-control montserrat-regular @error('message')
                    is-invalid
                    @enderror" id="message" placeholder="Message">{{old('message')}}</textarea>
                  </div>
                <div class="mb-3 form-check">
                  <input name="check" type="checkbox" class="form-check-input @error('check')
                  is-invalid
                  @enderror" id="check" required>
                  <label class="form-check-label montserrat-regular" for="check">Accept privacy policy</label>
                </div>
                <button type="submit" class="btn bg-main rounded-0 px-5 py-2">Send</button>
            </form>

        </div>
    </div>
</div>
