<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Our team</h2>
            <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            @foreach($clients as $client)
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{$client->photo}}" alt="{{$client->name}}" />
                        <h5 class="fw-bolder">
                            {{$client->name}}
                        </h5>
                        <div class="fst-italic text-muted">
                            <a href="{{$client->website}}" target="_blank" rel="noopener noreferrer nofollow">
                               website
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>