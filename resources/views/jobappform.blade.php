<x-layout>

<main>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h2>Job Application</h2>
        <p class="lead">Are you looking for a training program that not only hones your skills but also provides you with hands-on experience with the potential to transition you into a full-time role upon completion? Look no further! Join our upcoming bootcamp and start your successful journey with us.</p>
    </div>

    <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Personal information</h4>
        <form class="needs-validation" action="/submit" method="POST" id="registration-form" novalidate>
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Professional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="phone" class="form-label">Phone <span class="text-muted">(Mobile)</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="09123456789">
                    <div class="invalid-feedback">
                        Please enter a valid mobile phone number.
                    </div>
                </div>

                <div class="col-12">
                    <label for="resume" class="form-label">Resume <span class="text-muted">(Link)</span></label>
                    <input type="text" class="form-control" id="resume" name="resume" placeholder="https://www.linkedin.com/in/joelbagoyo97/" required>
                    <div class="invalid-feedback">
                        Please enter your valid resume link.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Address <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="123 Main St">
                </div>

                <div class="col-12">
                    <label for="cover" class="form-label">Cover letter</label>
                    <textarea class="form-control" id="cover" name="cover" placeholder="Tell the employer why you are the best suited for this role"></textarea>
                </div>
                
                <div class="col-md-12">
                    <label for="position" class="form-label">Position</label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="">Choose...</option>
                        <option>Associate Software Engineer</option>
                        <option>Web Developer</option>
                        <option>QA Tester</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="salary" class="form-label">Desired Salary <span class="text-muted">(Pesos)</span></label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="₱" required>
                    <div class="invalid-feedback">
                        Salary Expectation is required
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Submit Application</button>
            </div>
        </form>
    </div>

</main>

</x-layout>
