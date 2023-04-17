@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Add-user')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-lg-9">
            <div class="card-style mb-30">
                <h6 class="mb-25">Create category</h6>
                @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <span class="text-danger">*</span>
                    <div class="input-style-3">
                        <input type="text" placeholder="Category Name" name="category_name" />
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


                    <div class="text-right">
                        <button type="submit"
                            class="main-btn btn-sm active-btn-outline rounded-md btn-hover">Create</button>
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
    </script>
@endsection
