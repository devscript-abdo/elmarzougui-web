<section class="py-5">
    <div class="container px-5">
        <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
        @foreach($posts['featured']->take(1) as $post)
            <div class="card border-0 shadow rounded-3 overflow-hidden {{$loop->even ? 'mt-5':''}}">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <div class="h2 fw-bolder">{{$post->title}}</div>
                                <p>{{$post->excerpt}}</p>
                                <a class="stretched-link text-decoration-none" href="{{$post->url}}">
                                    Read more
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('{{$post->photo}}')"></div></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>