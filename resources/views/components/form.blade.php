<div class="container pt-5 vh-100">
    <div class="row pt-5 h-100">
        <div class="col-12 col-md-6 h-100">
            <p id="instagram-title" class="text-light monteserrat-bold fw-bolder" style="position: relative; z-index: -1">INSTAGRAM</p>
            <img class="img-fluid w-100" src="{{Storage::url('public/img/instagram.jpg')}}" alt="instagram">
        </div>
        <div class="col-12 col-md-6 h-100 d-flex align-items-center">

            <form class="px-5 w-100" action="" method="">
                <div class="mb-3 form-floating">
                    <input name="name" type="text" class="form-control montserrat-regular" id="name" placeholder="Name">
                    <label for="name">Name</label>
                  </div>
                <div class="mb-3 form-floating">
                  <input name="email" type="email" class="form-control montserrat-regular" id="email" placeholder="Email">
                  <label for="email">Email</label>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="birthplace">Birthplace</label>
                      <select name="birthplace" type="text" class="form-select montserrat-regular" id="birthplace">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="col mb-3">
                      <label for="birthday">Birthday</label>
                      <input name="birthday" type="date" class="form-control montserrat-regular" id="birthday">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3 form-floating">
                      <input name="phone" id="phone" type="text" class="form-control montserrat-regular" placeholder="Phone">
                      <label for="phone">Phone</label>
                    </div>
                    <div class="col mb-3 form-floating">
                      <input name="company" id="company" type="text" class="form-control montserrat-regular" placeholder="Company">
                      <label for="company">Company</label>
                    </div>
                </div>
                <div class="mb-3 form-floating">
                    <textarea name="message" type="message" class="form-control montserrat-regular" id="message" placeholder="Message"></textarea>
                    <label for="message">Message</label>
                  </div>
                <div class="mb-3 form-check">
                  <input name="check" type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label montserrat-regular" for="check">Accept privacy policy</label>
                </div>
                <button type="submit" class="btn bg-main rounded-0 px-5 py-2">Send</button>
            </form>

        </div>
    </div>
</div>
