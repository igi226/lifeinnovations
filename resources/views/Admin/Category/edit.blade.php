@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Add-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Create category</h6>
                @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
              @endif
                <form action="{{ route("categories.update", $category->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <span class="text-danger">*</span>
                    <div class="input-style-3">
                        <input type="text" placeholder="Category Name" name="category_name" value="{{ $category->category_name }}" />
                        <span class="icon"><i class="lni lni-user"></i></span>
                        @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif
                    </div>

                    <div class="input-style-3" id="subcatDiv">
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <input type="text" name="subCategory_name[]" placeholder="Enter subcategory name"
                                    class="form-control" />
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <button type="button" class="btn btn-lg btn-outline-primary" onclick="addSubcatery()"><i
                                        class="lni lni-circle-plus"></i></button>
                            </div>
                        </div><br>
                    </div>
                    
                    <h6 class="mb-25">Existing subcategories</h6>
                    <div class="row" id="deletesubCatDiv">

                        @foreach ($category->sub_categories as $sub_category)
                            <div class="input-style-3 col-lg-4 col-md-4">
                                <p>{{ $sub_category->subcategory_name }}</p>
                                <button type="button" onclick="subCategoryDelete({{ $sub_category->id }})" class="btn"><i class="lni lni-trash-can text-danger"></i></button>
                            </div>  
                        
                        @endforeach
                    </div>

                    <div class="text-right">
                        <button type="submit"  class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Update</button>
                    </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        var i = 1;
        function addSubcatery() {
            html = '<div class="row" id="cat_' + i +
                '"><div class="col-lg-10 col-md-10"><input type="text" name="subCategory_name[' + i +
                ']" placeholder="Enter subcategory name" class="form-control" /></div><div class="col-lg-2 col-md-2"><button type="button" class="btn btn-lg btn-outline-danger" onclick="removetr(' +
                i + ')" ><i class="lni lni-circle-minus"></i></button></div></div><br/>';
            $("#subcatDiv").append(html);
            i++;
        }

        function removetr(div_id) {
            document.getElementById("cat_" + div_id).remove();
        };

        function subCategoryDelete(subCat_id) {
            // alert(subCat_id);
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
                                        url: "{{ url('admin/subcategoryDestroy') }}",
                                        data: {
                                            'id': subCat_id,
                                            '_token': '{{ csrf_token() }}'
                                        },
                                        dataType: "JSON",
                                        success: function(response) {
                                           
                                            console.log(response.msg);
                                            $('#deletesubCatDiv').load(' #deletesubCatDiv');
                                            Swal.fire(response.msg);
                                        }

                                    });
                        } else if (result.isDenied) {
                           Swal.fire('Changes are not saved', '', 'info')
                        }
                     })
        }
    </script>
@endsection
