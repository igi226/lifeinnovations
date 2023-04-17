@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Add-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Create cms</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif
                <form action="{{ route("cms.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Full Name" name="title" />
                   
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Email address" name="short_desc" />
                    <span class="icon"><i class="lni lni-envelope"></i></span>
                    @if ($errors->has('short_desc'))
                        <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                    @endif
                </div>

                <span class="text-danger">*</span>
                <div class="input-style-3">
                    {{-- <input type="text" placeholder="Email address" name="short_desc" /> --}}
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                    <span class="icon"><i class="lni lni-envelope"></i></span>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
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
