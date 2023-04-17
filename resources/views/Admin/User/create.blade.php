@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Add-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Create user</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif
                <form action="{{ route("users.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Full Name" name="name" />
                    <span class="icon"><i class="lni lni-user"></i></span>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="email" placeholder="Email address" name="email" />
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
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="input-style-3">
                    <div class="update-image">
                        <input class="form-control" type="file" name="image">

                    </div>
                </div>

                <div class="text-right">
                    <button type="submit"  class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Create</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
