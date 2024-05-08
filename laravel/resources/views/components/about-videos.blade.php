<section id="vedio" class="vedio-area pt-70 pb-90 fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center">
                    <h5>{{ $aboutVideo->title }}</h5>
                    <h2>
                        {{ $aboutVideo->content }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="video-player wow fadeInBottom animated" data-animation="fadeInDown animated" data-delay="0s" id="videoSection">
                    <video
                        controls
                        crossorigin
                        playsinline
                        muted
                        class="js-player"
                        id="videoPlayer"
                    >
                        <source src="{{ asset('/uploads/' . $aboutVideo->video) }}" />
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
