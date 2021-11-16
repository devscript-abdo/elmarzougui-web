
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        @foreach($testimonials as $test)
                            <div class="col-lg-4 col-xl-4">
                                <div class="text-center">
                                    <div class="fs-4 mb-4 fst-italic">
                                        "{{$test->content}}"
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img class="rounded-circle me-3" src="{{$test->photo}}" alt="{{$test->name}}" />
                                        <div class="fw-bold">
                                            {{$test->name}}
                                            <span class="fw-bold text-primary mx-1">/</span>
                                            {{$test->post}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>