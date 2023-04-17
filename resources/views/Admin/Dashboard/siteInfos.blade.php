@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Edit-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Site informations</h6>
                @if(Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route("admin.siteSettingsUpdate") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" name="site_name" value="{{$site_infos->site_name }}" />
                    <span class="icon"><i class="lni lni-user"></i></span>
                    @if ($errors->has('site_name'))
                        <span class="text-danger">{{ $errors->first('site_name') }}</span>
                    @endif
                </div>
                
                <div class="input-style-3">
                    <input type="email" placeholder="Email address" name="email" value="{{$site_infos->email }}" />
                    <span class="icon"><i class="lni lni-envelope"></i></span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="address" value="{{$site_infos->address }}" />
                    <span class="icon"><i class="lni lni-home"></i></span>
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="number" name="phone" value="{{$site_infos->phone }}" />
                    <span class="icon"><i class="lni lni-phone"></i></span>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div class="input-style-3">
                    <input type="text" name="twitter" value="{{$site_infos->twitter }}" />
                    <span class="icon"><i class="lni lni-twitter-original"></i></span>
                    @if ($errors->has('twitter'))
                        <span class="text-danger">{{ $errors->first('twitter') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="facebook" value="{{$site_infos->facebook }}" />
                    <span class="icon"><i class="lni lni-facebook-original"></i></span>
                    @if ($errors->has('facebook'))
                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="instagram" value="{{$site_infos->instagram }}" />
                    <span class="icon"><i class="lni lni-instagram-original"></i></span>
                    @if ($errors->has('instagram'))
                        <span class="text-danger">{{ $errors->first('instagram') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="youtube" value="{{$site_infos->youtube }}" />
                    <span class="icon"><i class="lni lni-youtube"></i></span>
                    @if ($errors->has('youtube'))
                        <span class="text-danger">{{ $errors->first('youtube') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="pinterest" value="{{$site_infos->pinterest }}" />
                    <span class="icon"><i class="lni lni-pinterest"></i></span>
                    @if ($errors->has('pinterest'))
                        <span class="text-danger">{{ $errors->first('pinterest') }}</span>
                    @endif
                </div>
                <div class="input-style-3">
                    <input type="text" name="vk" value="{{$site_infos->vk }}" />
                    <span class="icon"><i class="lni lni-vk"></i></span>
                    @if ($errors->has('vk'))
                        <span class="text-danger">{{ $errors->first('vk') }}</span>
                    @endif
                </div>
                
                <div class="input-style-3">
                    <label for="">Current Logo image</label>
                    <div class="update-image">
                        @if (isset($site_infos->logo_image) && !empty($site_infos->logo_image) && File::exists(public_path('storage/SiteImages/' .$site_infos->logo_image)))
                            <img height="80" width="100" src="{{ asset('storage/SiteImages/' .$site_infos->logo_image) }}" alt="">
                        @else
                            <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif

                    </div>
                </div>

                <div class="input-style-3">
                    <label for="">Update new logo</label>
                    <div class="update-image">
                        <input class="form-control" type="file" name="logo_image">

                    </div>
                </div>

                <div class="input-style-3">
                    <label for="">Current Favicon image</label>
                    <div class="update-image">
                        @if (isset($site_infos->favicon_image) && !empty($site_infos->favicon_image) && File::exists(public_path('storage/SiteImages/' .$site_infos->favicon_image)))
                            <img height="80" width="100" src="{{ asset('storage/SiteImages/' .$site_infos->favicon_image) }}" alt="">
                        @else
                            <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif

                    </div>
                </div>
                <div class="input-style-3">
                    <label for="">Update new favicon</label>

                    <div class="update-image">
                        <input class="form-control" type="file" name="favicon_image">

                    </div>
                </div>

                <div class="text-right">
                    <button type="submit"  class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
