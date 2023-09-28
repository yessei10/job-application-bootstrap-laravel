<x-layout>
<main>

<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h2>Job Application</h2>
    <p class="lead">Please take a moment to review your personal information.</p>
</div>

<div class="row g-5">
    <div class="col-md-5 col-lg-12 order-md-last">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Summary</span>
        </h4>

        <ul class="list-group mb-3">

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">First name</h6>
                    <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">{{$firstname}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Last name</h6>
                <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">{{$lastname}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Phone number</h6>
                <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">{{$phone}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                <h6 class="my-0">Resume Link</h6>
                <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">{{$resume}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Cover letter</h6>
                <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">{{$cover}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Position</h6>
                <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">{{$position}}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Desired Salary</h6>
                <small class="text-muted">PHP</small>
                </div>
                <strong>₱ {{$salary}}</strong>
            </li>

        </ul>

    </div>

</div>
</div>

</main>
</x-layout>
