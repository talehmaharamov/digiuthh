<section class="testimonial-area pt-120 pb-120"
         style=" background-image: url({{ asset('assets/img/testimonial/test-bg-aliments.png') }}); background-repeat: no-repeat; background-position: center; background-color: #fff7f5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-title second-atitle pt-15">
                    @if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_name'))
                        <h5>{{ __('about_page.testimonial_name') }}</h5>
                    @else
                        <h5></h5>
                    @endif
                    @if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_title'))
                        <h2>
                            {{ __('about_page.testimonial_title') }}
                        </h2>
                    @else
                        <h2></h2>
                    @endif
                    @if(\Illuminate\Support\Facades\Lang::has('about_page.testimonial_content'))
                        <p class="pt-15">
                            {{ __('about_page.testimonial_content') }}
                        </p>
                    @else

                    @endif
                </div>

            </div>

            <div class="col-lg-6">
                <div class="testimonial-active">
                    @foreach($testimonials as $testimonial)
                        <div class="single-testimonial">
                            <div class="testi-author">
                                <img src="{{ asset('uploads/' . $testimonial->image) }}" alt="img">
                                <div class="ta-info">
                                    <h6>{{ $testimonial->name . ' ' . $testimonial->surname }}</h6>
                                    <span>{{ $testimonial->position }}</span>
                                </div>
                            </div>
                            <div class="qt-img">
                                <img src="{{ asset('/assets/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>{{ $testimonial->content }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
