@extends('layouts.app')

@section('title', __('third.register_as_mentor'))

@section('content')
    <section class="form-section">
        <form action="{{route('register.mentor')}}" method="post" class="digiuth_form" id="teacher-register"
              enctype="multipart/form-data">

            @csrf
            @if(\Illuminate\Support\Facades\Lang::has('third.signup'))
                <div class="title">
                    {{ __('third.register') }}
                    <div style="margin-top: 15px;">
                        <small>
                            {{ __('third.mentor') }}
                        </small>
                    </div>
                </div>

            @endif

            <div class="form-group">
                <label for="fullname">
                    {{ __('third.fullname'). ' (AZ)' }}
                    <span>*</span>
                </label>
                <input class="form-control" placeholder="{{__('third.fullname')}}"
                       type="text"
                       id="fullname" maxlength="50" name="fullname[az]" value="{{ old('fullname.az') }}">
                @error('fullname.az')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="fullname">
                    {{ __('third.fullname'). ' (EN)' }}
                    <span>*</span>
                </label>
                <input class="form-control" placeholder="{{__('third.fullname')}}"
                       type="text"
                       id="fullname" maxlength="50" name="fullname[en]" value="{{ old('fullname.en') }}">
                @error('fullname.en')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.email'))
                    <label for="email">
                        {{ __('third.email') }}
                        <span>*</span>
                    </label>
                @endif
                <input class="form-control" type="text" name="email" id="email" placeholder="{{__('third.your_email')}}"
                       value="{{old('email')}}">
            </div>
            @error('email')
            <br>
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.phone'))
                    <label for="phone">{{ __('third.phone') }}<span>*</span></label>
                @endif
                <input class="form-control" type="number" name="phone" minlength="10" id="phone"
                       value="{{old('phone')}}"
                       placeholder="{{__('third.your_phone')}}">
            </div>
            @error('phone')
            <br>
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            {{--            <div class="form-group">--}}
            {{--                @if(\Illuminate\Support\Facades\Lang::has('third.fullname'))--}}
            {{--                    <label for="fullName">{{ __('third.fullname') }}<span>*</span></label>--}}
            {{--                @endif--}}
            {{--                <input class="form-control" aria-describedby="emailHelp" placeholder="{{__('third.fullname')}}"--}}
            {{--                       type="text" id="fullName" maxlength="50" name="fullname" value="{{old('fullname')}}">--}}
            {{--            </div>--}}
            {{--            @error('fullname')--}}
            {{--            <br>--}}
            {{--            <div class="alert alert-danger">{{$message}}</div>--}}
            {{--            @enderror--}}

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.username'))
                    <label for="userName">{{ __('third.username') }}<span>*</span></label>
                @endif
                <input class="form-control" aria-describedby="emailHelp" placeholder="{{__('third.username')}}"
                       type="text"
                       id="userName"
                       maxlength="50"
                       name="username"
                       value="{{old('username')}}">
            </div>
            @error('username')
            <br>
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            {{--            <div class="form-group">--}}
            {{--                @if(\Illuminate\Support\Facades\Lang::has('third.position'))--}}
            {{--                    <label for="">{{ __('third.position') }}</label>--}}
            {{--                @endif--}}
            {{--                <select class="form-control mb-4" name="position" id="positionSelect">--}}
            {{--                    <option value="@lang('third.mentor')">--}}
            {{--                        @lang('third.mentor')--}}
            {{--                    </option>--}}
            {{--                    <option value="otherPosition" id="otherPosition">--}}
            {{--                        @lang('third.other')--}}
            {{--                    </option>--}}
            {{--                </select>--}}
            {{--                <input class="form-control"--}}
            {{--                       placeholder="{{__('third.position')}}"--}}
            {{--                       type="text"--}}
            {{--                       hidden--}}
            {{--                       id="Position"--}}
            {{--                       value="">--}}
            {{--            </div>--}}
            {{--            @error('position')--}}
            {{--            <div class="alert alert-danger">{{$message}}</div>--}}
            {{--            @enderror--}}

            <div class="form-group">
                <div class="col alert alert-success">
                    {{ __('third.password_error_t') }}
                </div>
                @if(\Illuminate\Support\Facades\Lang::has('third.your_password'))
                    <label for="password">
                        {{ __('third.your_password') }}
                        <span>*</span>
                    </label>
                @endif
                <input class="form-control" type="password" name="password" id="password"
                       placeholder="{{__('third.your_password')}}">
                <span class="show-password mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                    </svg>
                </span>
            </div>
            @error('password')
            <br>
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.enter_your_password_again'))
                    <label for="repassword">{{ __('third.enter_your_password_again') }}<span>*</span></label>
                @endif
                <input class="form-control input2" type="password" name="password_confirmation" id="repassword"
                       placeholder="{{__('third.enter_your_password_again')}}">
            </div>
            @error('password_confirmation')
            <br>
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.cv'))
                    <label for="cv">{{ __('third.cv') }}<span>*</span></label>
                @endif
                <input type="file" name="cv" id="cv" class="form-control"/>
                @error('cv')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
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

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                    <label for="">
                        {{ __('third.bio') . ' (AZ)' }}
                    </label>
                @endif
                <textarea class="form-control" type="text" id="editor1" rows="4"
                          name="content1[az]"></textarea>
            </div>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror


            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.bio'))
                    <label for="">
                        {{ __('third.bio') . ' (EN)' }}
                    </label>
                @endif
                <textarea class="form-control" type="text" id="editor2" rows="4"
                          name="content1[en]"></textarea>
            </div>
            @error('content')
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
                       value="">
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
                       value="">
            </div>
            @error('facebook_link')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                @if(\Illuminate\Support\Facades\Lang::has('third.instagram_link'))
                    <label for="">{{ __('third.instagram_link') }}</label>
                @endif
                <input class="form-control"
                       placeholder="Instagram Link"
                       type="text"
                       id="Instagram"
                       name="instagram_link"
                       value="">
            </div>
            @error('instagram_link')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            @if(\Illuminate\Support\Facades\Lang::has('third.submit'))
                <button type="submit" class="btn btn-success">{{ __('third.submit') }}</button>
            @endif
        </form>
    </section>
@endsection
@section('js')
    <script>
        $('.show-password').on('click', function () {
            let type = $('#password').attr('type')
            if (type === 'password') {
                $('.show-password svg:first').addClass('d-none')
                $('.show-password svg:last').removeClass('d-none')
                $('.input2').attr("type", 'text')
            } else {
                $('.show-password svg:last').addClass('d-none')
                $('.show-password svg:first').removeClass('d-none')
                $('.input2').attr("type", 'password')
            }

            $('#password').attr('type', type === 'password' ? 'text' : 'password')
        });

        $('#positionSelect').change(function () {
            var selectedValue = $(this).val();
            if (selectedValue == 'otherPosition') {
                $('#Position').attr('name', 'position');
                $(this).attr('name', 'other_position');
                $('#Position').prop('hidden', false);
            } else {
                $('#Position').attr('name', 'other_position');
                $(this).attr('name', 'position');
                $('#Position').prop('hidden', true);
            }
        });

        function updateFileName(input) {
            var fileName = input.files[0].name;
            var label = document.getElementById('fileInputLabel');
            label.innerText = fileName;
        }
    </script>
@endsection
