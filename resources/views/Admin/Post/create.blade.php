@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Add-Post')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Create Post</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif 
                <form action="{{ route("posts.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="text-danger">*</span>
                <div class="input-style-3">
                    <input type="text" placeholder="Title" name="title" />
                  
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                
                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <div class="select-style-2">
                        <div class="select-position">
                            <select name="user_id" class="js-example-basic-single form-select">
                                <option value="">Select user</option>
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

                <span class="text-danger">*</span>
                <div class="input-style-3">
                    <div class="select-style-2">
                        <div class="select-position">
                            <select name="category_id" class="js-example-basic-single form-select" onchange="getSubcategory(this)">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger">{{ "category is required." }}</span>
                            @endif
                            @if ($errors->has('subcategory_id'))
                                <span class="text-danger">{{ "Subcategory is required, please select another category" }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="input-style-3">
                    <div class="select-style-2">
                        <div class="select-position" id="subcategorySelect">
                            
                            @if ($errors->has('category_id'))
                                <span class="text-danger">{{ "category is required." }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="input-style-3">
                  
                  <textarea name="description" id="" cols="30" rows="10"></textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
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
@endsection
@section('select2')

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

function getSubcategory(getCategory) {
  var category_id = getCategory.value;  
  $.ajax({
        type: "GET",
        url: "{{ url('admin/post-subcategories') }}",
        data: {
                'id': category_id,
                '_token': '{{ csrf_token() }}'
            },
        dataType: "html",
        success: function(response) {
            $('#subcategorySelect').html(response);
       
        }

    });
  selectSubCat_html = '';
}
</script>
    
@endsection