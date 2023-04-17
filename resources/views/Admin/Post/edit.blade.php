@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Edit-Post')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Update Post</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif 
                <form action="{{ route("posts.update", $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Title" name="title" value="{{ $post->title }}" />
                  
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <div class="select-style-2">
                        <div class="select-position">
                            <select name="user_id" class="js-example-basic-single form-select">
                                <option value="{{ $particular_user->user_id }}">{{ $particular_user->user->name }}</option>

                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                
                            </select>
                            
                            @if ($errors->has('user_id'))
                        <span class="text-danger">{{ "User name is required." }}</span>
                    @endif
                        </div>
                    </div>
                </div>

                <div class="input-style-3">
                   
                    <div class="row" id="contentDiv">
                        @foreach ($post->post_galleries as $item)
                        <div class="col-lg-4 col-md-4">
                           

                          
                           @if (File::extension($item->content) == 'mp4')
                                <video height="250px" width="100%" controls>
                                    <source src="{{ asset('storage/Content/' . $item->content) }}"
                                        type="video/mp4">
                                </video>
                               
                           @else
                                <img height="200px" width="200px" src="{{ asset("storage/Content/". $item->content) }}" alt="">
                               
                           @endif 
                           <div>
                           
                            <button type="button" onclick="contentDelete({{ $item->id }})" class="btn">Delete</button>
                        </div>

                     
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="input-style-3">
                    <div class="update-image">
                        <input class="form-control" type="file" name="content[]" multiple>

                    </div>
                </div>

                <div class="text-right">
                    <button type="submit"  class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Create</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script>
        function contentDelete(content_id) {
            Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                        type: "DELETE",
                                        url: "{{ url('admin/contentDestroy') }}",
                                        data: {
                                            'id': content_id,
                                            '_token': '{{ csrf_token() }}'
                                        },
                                        dataType: "JSON",
                                        success: function(response) {
                                            Swal.fire(response.msg);
                                            // $("#contentDiv").load(window.location.href + "#contentDiv");
                                            $('#contentDiv').load(' #contentDiv')
                                        }

                                    });
                        } else if (result.isDenied) {
                           Swal.fire('Changes are not saved', '', 'info')
                        }
                     })
                  
        }
    </script>
@endsection
@section('select2')

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
    
@endsection