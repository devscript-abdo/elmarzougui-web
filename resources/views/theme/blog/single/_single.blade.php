<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">

           @include('theme.blog.single._author')

            <div class="col-lg-9">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">{{$post->full_date_single}}</div>

                       @foreach($post->tags as $tag)

                            <a class="badge bg-secondary text-decoration-none link-light" href="{{$tag->url}}">
                               {{$tag->name}}
                            </a>
                            
                       @endforeach
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{$post->photo}}" alt="{{$post->title}}" /></figure>
                    <!-- Post content-->
                    <section class="mb-5">

                        <p class="fs-5 mb-4">
                            {!! $post->body  !!}
                        </p>

                    </section>
                </article>
  
                 {{--@include('theme.blog.single._comment')--}}

            </div>
        </div>
    </div>
</section>