<div class="row pt-50">
    @foreach($mentors as $mentor)
        <div class="col-lg-3 col-md-6">
            <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->{'fullname_' . app()->getLocale()})) }}">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img style="height:225px;object-fit:cover"
                                 src="{{ asset('laravel/public/uploads/' . $mentor->image) }}" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>
                            <a href="{{ url('/mentors/' . $mentor->id . '-' . slug($mentor->fullname_en)) }}">
                                {{ $mentor->{'fullname_' . app()->getLocale()} }}
                            </a>
                        </h4>
                        <span>{{ __('third.'.$mentor->position) }}</span>
                        <span>
                                        {{ $mentor->{'speciality_' . app()->getLocale()} }}
                                    </span>

                        <div class="team-social mt-20">
                            @if($mentor->facebook_link)
                                <a href="{{ $mentor->facebook_link }}" class="iconFb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            @endif
                            @if($mentor->instagram_link)
                                <a href="{{ $mentor->instagram_link }}" class="iconIg">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                            @if($mentor->linkedin_link)
                                <a href="{{ $mentor->linkedin_link }}" class="iconLk">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
