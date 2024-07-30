@extends('layouts.app')
@section('title', 'Update profile')
@section('content')
    <section class="update-profile">
        <div style="padding-top: 40px;">
            <form method="post" class="digiuth_form" action="{{route('update.profile.post',auth()->id())}}"
                  enctype="multipart/form-data">
                @csrf
                @if(auth()->user()->position == 'user')
                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.fullname'))
                            <label for="fullName">
                                {{ __('third.fullname') }}
                                <span>*</span>
                            </label>
                        @endif
                        <input class="form-control"
                               aria-describedby="emailHelp"
                               placeholder="Full name"
                               type="text"
                               id="fullName"
                               maxlength="50"
                               name="fullname"
                               value="{{auth()->user()->fullname_az}}">
                    </div>
                    @error('fullname')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input hidden="" name="userType" value="user">
                @else
                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.fullname'))
                            <label for="fullname">
                                {{ __('third.fullname'). ' (AZ)' }}
                                <span>*</span>
                            </label>
                        @endif
                        <input class="form-control" placeholder="{{__('third.fullname')}}"
                               type="text"
                               id="fullname" maxlength="50" name="fullname[az]"
                               value="{{ auth()->user()->fullname_az }}">
                    </div>
                    @error('fullname')
                    <br>
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.fullname'))
                            <label for="fullname">
                                {{ __('third.fullname'). ' (EN)' }}
                                <span>*</span>
                            </label>
                        @endif
                        <input class="form-control" placeholder="{{__('third.fullname')}}"
                               type="text"
                               id="fullname" maxlength="50" name="fullname[en]"
                               value="{{ auth()->user()->fullname_en }}">
                    </div>
                    @error('fullname')
                    <br>
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <input hidden="" name="userType" value="{{ auth()->user()->position }}">
                @endif

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
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile02"
                               onchange="updateFileName(this)">
                        <label class="custom-file-label" for="inputGroupFile02" id="fileInputLabel"
                               aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                @if(auth()->user()->position == 'user')
                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                            <label for="">{{ __('third.bio') }}</label>
                        @endif
                        <textarea class="form-control" type="text" id="editor1"
                                  name="content1">{{auth()->user()->bio_az}}</textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                    @error('content')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                @else
                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                            <label for="">
                                {{ __('third.bio') . ' (AZ)' }}
                            </label>
                        @endif
                        <textarea class="form-control" type="text" id="editor1"
                                  name="content1[az]">{!! auth()->user()->bio_az !!}</textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                    @error('content')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror


                    <div class="form-group">
                        @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                            <label for="">
                                {{ __('third.bio') . ' (EN)' }}
                            </label>
                        @endif
                        <textarea class="form-control" type="text" id="editor2"
                                  name="content1[en]">{!! auth()->user()->bio_en !!}</textarea>
                    </div>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>
                    @error('content')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                @endif

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
                <div class="alert alert-danger">
                    {{$message}}
                </div>
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

                <button type="submit" class="btn-c" style="padding: 12px 24px;">{{__('third.save')}}</button>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function updateFileName(input) {
            var fileName = input.files[0].name;
            var label = document.getElementById('fileInputLabel');
            label.innerText = fileName;
        }
    </script>
@endsection
