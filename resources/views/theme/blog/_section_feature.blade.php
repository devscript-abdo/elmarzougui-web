<section class="py-5">
    <div class="container px-5">
        <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
        <div class="row gx-5">
            @foreach($posts['default'] as $post)
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">

                        <img class="card-img-top" src="{{$post->photo}}" alt="{{$post->title}}" />

                        <div class="card-body p-4">

                            @foreach ($post->tags as $tag)
                            
                             <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$tag->name}}</div>

                            @endforeach

                            <a class="text-decoration-none link-dark stretched-link" href="{{$post->url}}">
                                <div class="h5 card-title mb-3">{{$post->title}}</div>
                            </a>

                            <p class="card-text mb-0">{{$post->excerpt}}</p>

                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">

                                    <img class="rounded-circle me-3" src="{{$post->category->photo}}" alt="{{$post->category->name}}" />

                                    <div class="small">
                                        @if($post->category)
                                           <div class="fw-bold">{{$post->category->name}}</div>
                                        @endif
                                        <div class="text-muted">{{$post->full_date_single}} &middot; 6 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-end mb-5 mb-xl-0">
            <a class="text-decoration-none" href="#!">
                More stories
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>