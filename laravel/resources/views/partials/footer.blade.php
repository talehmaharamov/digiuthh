<footer class="footer-bg footer-p fix"
        style="background-repeat: no-repeat; background-position: center;">
    <div class="footer-top sponsors pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-20">
                    {{--                    <h2>{{ __('header.supported') }}</h2>--}}
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    {{--                    <div class="sponsor-item mb-30  wow fadeInDown   animated" style="visibility: visible; animation-name: fadeInDown;">--}}
                    <a href="https://www.visegradfund.org/">
                        {{--                            <img src="https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2018/01/visegrad_fund_logo_supported-by_blue_800px.jpg" alt="">--}}
                        <img src="{{asset('/assets/img/vpng.png')}}" alt="">
                    </a>
                    {{--                    </div>--}}
                </div>
                <div class="col-lg-12 footer-widget mb-30">

                    <div class="footer-widget footer-social mt-15  text-right text-xl-right">
                        <a href="https://www.facebook.com/visegradfund" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/visegradfund/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/visegradfund" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        @if(\Illuminate\Support\Facades\Lang::has('third.visegrad_op'))
                            {{ __('third.visegrad_op') }}
                        @else
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    @php
        $contact = \App\Models\Contact::find(1);
    @endphp
    <div class="footer-center  pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="footer-widget mb-30">
                        <img src="{{ asset('/assets/img/logo/f_logo.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.about'))
                                <h2>{{ __("header.about") }}</h2>
                            @else
                                <h2></h2>
                            @endif
                        </div>
                        <div class="footer-link">
                            @if(\Illuminate\Support\Facades\Lang::has('header.slogan'))
                                {{ __('header.slogan') }}
                            @else
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="footer-widget footer-social mt-15  text-right text-xl-right">
                            <a href="https://www.facebook.com/digiuth" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/digiuth/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/digiuth/?originalSubdomain=az" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.contact'))
                                <h2>{{ __("header.contact") }}</h2>
                            @else
                            @endif
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-map-marker-check"></i>
                                    <span style="width: 75%;">{{ $contact->address }}</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-phone"></i>
                                    <span style="width: 60%;">{{ $contact->phone_number }}</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon fal fa-envelope"></i>
                                    <span style="width: 60%;">
                                        <a href="mailto:{{ $contact->email_address }}">{{ $contact->email_address }}</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            @if(\Illuminate\Support\Facades\Lang::has('header.services'))
                                <h2>{{ __('header.services') }}</h2>
                            @else
                                <h2></h2>
                            @endif
                        </div>
                        <div class="footer-link">
                            <ul>
                                @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                    <li><a href="/">{{ __('header.home') }}</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.about'))

                                    <li><a href="/about">{{ __('header.about') }}</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.trainers'))
                                    <li><a href="/trainers">{{ __('header.trainers') }}</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.courses'))
                                    <li><a href="/courses">{{ __('header.courses') }}</a></li>
                                @endif
                                @php
                                    $events = \App\Models\Event::all();
                                @endphp
                                @if(count($events) > 0)
                                    @if(\Illuminate\Support\Facades\Lang::has('header.events'))
                                        <li><a href="/events">{{ __('header.events') }}</a></li>
                                    @endif
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.blogs'))
                                    <li><a href="/blogs">{{ __('header.blogs') }}</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.news'))
                                    <li><a href="/news">{{ __('header.news') }}</a></li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('header.contact'))
                                    <li><a href="/contact">{{ __('header.contact') }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8 footer-widget">
                    <a href="https://esn.az">
                        <img style="width: 60px;" src="{{ asset('assets/img/esn.png') }}"/>
                        @if(\Illuminate\Support\Facades\Lang::has('header.copyright'))
                            <span>{{ __('header.copyright') }}</span>
                        @endif
                    </a>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    @if(\Illuminate\Support\Facades\Lang::has('third.copyright'))
                        <span> {{ __('third.copyright') }} </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
