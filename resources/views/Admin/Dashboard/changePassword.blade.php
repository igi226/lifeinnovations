@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Change-password')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Update password</h6>
                @if(Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route("admin.changePassword") }}" method="POST">
                    @csrf
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" name="current_password" placeholder="Current password" />
                    
                    @if ($errors->has('current_password'))
                        <span class="text-danger">{{ $errors->first('current_password') }}</span>
                    @endif
                </div>
                
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" name="new_password" placeholder="New password" />
                    
                    @if ($errors->has('new_password'))
                        <span class="text-danger">{{ $errors->first('new_password') }}</span>
                    @endif
                </div>

                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" name="confirm_password" placeholder="Confirm new password"/>
                    
                    @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
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
