@extends('layouts.app')

@section('content')
    <section class="update-profile">
        <div style="padding-top: 40px;">
            <form method="post" class="digiuth_form" action="{{route('update.profile.post',auth()->id())}}"
                  enctype="multipart/form-data">
                @csrf
{{--                <div class="form-group">--}}
{{--                    @if(\Illuminate\Support\Facades\Lang::has('third.fullname'))--}}
{{--                        <label for="fullName">--}}
{{--                            {{ __('third.fullname') }}--}}
{{--                            <span>*</span>--}}
{{--                        </label>--}}
{{--                    @endif--}}
{{--                    <input class="form-control"--}}
{{--                           aria-describedby="emailHelp"--}}
{{--                           placeholder="Full name"--}}
{{--                           type="text"--}}
{{--                           id="fullName"--}}
{{--                           maxlength="50"--}}
{{--                           name="fullname"--}}
{{--                           value="{{auth()->user()->fullname}}">--}}
{{--                </div>--}}
{{--                @error('fullname')--}}
{{--                <div class="alert alert-danger">{{$message}}</div>--}}
{{--                @enderror--}}

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.name'))
                        <label for="name">
                            {{ __('third.name') }}
                            <span>*</span>
                        </label>
                    @endif
                    <input class="form-control" placeholder="{{__('third.name')}}"
                           type="text"
                           id="name" maxlength="50" name="name" value="{{ auth()->user()->name }}">
                </div>
                @error('name')
                <br>
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.surname'))
                        <label for="surname">
                            {{ __('third.surname') }}
                            <span>*</span>
                        </label>
                    @endif
                    <input class="form-control" aria-describedby="emailHelp" placeholder="{{__('third.surname')}}"
                           type="text"
                           id="surname" maxlength="50" name="surname" value="{{ auth()->user()->surname }}">
                </div>
                @error('surname')
                <br>
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.email'))
                        <label for="email">
                            {{ __('third.email') }}
                            <span>*</span>
                        </label>
                    @endif
                    <input class="form-control"
                           type="email"
                           name="email"
                           minlength="10"
                           id="email"
                           placeholder="Your email"
                           value="{{auth()->user()->email}}">
                </div>
                @error('phone')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.phone'))
                        <label for="phone">{{ __('third.phone') }}<span>*</span></label>
                    @endif
                    <input class="form-control"
                           type="number"
                           name="phone"
                           minlength="10"
                           id="phone"
                           placeholder="Your phone"
                           value="{{auth()->user()->phone}}">
                </div>
                @error('phone')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.photo'))
                        <label for="">{{ __('third.photo') }}</label>
                    @endif
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                               aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                        <label for="">{{ __('third.bio') }}</label>
                    @endif
                    <textarea class="form-control" type="text" id="editor1"
                              name="content1">{{auth()->user()->content}}</textarea>
                </div>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
                @error('content')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.position'))
                        <label for="">
                            {{ __('third.position') }}
                        </label>
                    @endif
                    <input class="form-control"
                           placeholder="{{__('third.position')}}"
                           type="text"
                           id="Position"
                           name="position"
                           disabled
                           value="{{__('third.'.auth()->user()->position)}}">
                </div>
                @error('position')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.linkedin_link'))
                        <label for="Linkedin">{{ __('third.linkedin_link') }}</label>
                    @endif
                    <input class="form-control"
                           placeholder="Linkedin Link"
                           type="text"
                           id="Linkedin"
                           name="linkedin_link"
                           value="{{auth()->user()->linkedin_link}}">
                </div>
                @error('linkedin_link')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.facebook_link'))
                        <label for="">{{ __('third.facebook_link') }}</label>
                    @endif
                    <input class="form-control"
                           placeholder="Facebook Link"
                           type="text"
                           id="Facebook"
                           name="facebook_link"
                           value="{{auth()->user()->facebook_link}}">
                </div>
                @error('facebook_link')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="form-group">
                    @if(\Illuminate\Support\Facades\Lang::has('third.instagram_link'))
                        <label for="">{{ __('third.instagram_link') }}</label>
                    @endif
                    <input class="form-control"
                           placeholder="Instagram"
                           type="text"
                           id="Instagram"
                           name="instagram_link"
                           value="{{auth()->user()->instagram_link}}">
                </div>
                @error('instagram_link')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <input type="hidden" name="old_file" value="{{auth()->user()->image}}">

                <button type="submit" class="btn-c" style="padding: 12px 24px;">{{__('third.update')}}</button>
        </div>
    </section>
@endsection

@section('title', 'Update profile')
