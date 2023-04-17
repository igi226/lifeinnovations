@php

    $admin_data = DB::table("admins")->where("slug", "admin-lifeinnovations")->first();
@endphp
@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Edit-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Profile informations</h6>
                @if(Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route("admin.profile") }}" method="POST">
                    @csrf
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" name="name" value="{{$admin_data->name }}" />
                    <span class="icon"><i class="lni lni-user"></i></span>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                
                <div class="input-style-3">
                    <input type="email" placeholder="Email address" name="email" value="{{$admin_data->email }}" />
                    <span class="icon"><i class="lni lni-envelope"></i></span>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                

                <div class="text-right">
                    <button type="submit"  class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
