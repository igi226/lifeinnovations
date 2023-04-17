@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Edit-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Edit user</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif
                <form action="{{ route("users.update", $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Full Name" name="name" value="{{ $user->name }}" />
                    <span class="icon"><i class="lni lni-user"></i></span>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="email" placeholder="Email address" name="email" value="{{ $user->email }}" />
                    <span class="icon"><i class="lni lni-envelope"></i></span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="password" placeholder="Enter strong password" name="password" />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                </div>
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <div class="select-style-2">
                        <div class="select-position">
                            <select name="status">
                                <option value="">Select status</option>
                                <option {{ $user->status == 1 ? "selected" : "" }} value="1">Active</option>
                                <option {{ $user->status == 0 ? "selected" : "" }} value="0">Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                        </div>
                    </div>
                </div>
                <div class="input-style-3">
                    <label for="">Current image</label>
                    <div class="update-image">
                        @if (isset($user->image) && !empty($user->image) && File::exists(public_path('storage/UserImage/' . $user->image)))
                            <img height="80" width="100" src="{{ asset('storage/UserImage/' . $user->image) }}" alt="">
                        @else
                            <img height="80" width="100" src="{{ asset('noimg.png') }}" alt="no-p_image">
                        @endif

                    </div>
                </div>
                <div class="input-style-3">
                    <div class="update-image">
                        <input class="form-control" type="file" name="image">

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
