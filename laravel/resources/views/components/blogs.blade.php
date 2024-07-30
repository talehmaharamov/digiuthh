<section id="blog" class="blog-area  p-relative pt-10 pb-90 fix"
         style=" background-image: url({{ asset('assets/img/bg/blog-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="section-title center-align text-center mb-50">
                        @if(\Illuminate\Support\Facades\Lang::has('about_page.blog_title'))
                            <h5>{{ __('about_page.blog_title') }}</h5>
                        @else
                            <h5></h5>
                        @endif
                        @if(\Illuminate\Support\Facades\Lang::has('about_page.blog_content'))
                            <h2>
                                {{ __('about_page.blog_content') }}
                            </h2>
                        @else
                            <h2></h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-12">
                    <a href="{{ url('/blogs/' . $blog->id . '-' . slug($blog->title)) }}">
                        <div class="single-post2 mb-50  wow fadeInDown  animated">
                            <div class="blog-thumb2">
                                <img src="{{ asset('laravel/public/uploads/' . $blog->image) }}" alt="img">
                            </div>
                            <div class="blog-content2 text-center">
                                <div class="b-meta">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="date-b">
                                                <i class="fal fa-calendar-alt"></i>
                                                {{ $blog->created_at->format('d M, Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>
                                            {{ $blog->title }}
                                        </h4>
                                        @if(\Illuminate\Support\Facades\Lang::has('home_page.read_more'))
                                            <div class="blog-btn">
                                                <i class="fal fa-chevron-circle-right"></i> {{ __('home_page.read_more') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
