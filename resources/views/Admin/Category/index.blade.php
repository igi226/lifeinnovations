
@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Categories')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <div class="title d-flex flex-wrap align-items-center justify-content-between">
          <div class="left">
            <h6 class="text-medium mb-30">List of categories</h6>
            @if(Session::has('msg'))
              <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif
          </div>
          <div class="right">
            <div class="select-style-1">
                <a href="{{ route("categories.create") }}" class="primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i></a>
            </div>
            <!-- end select -->
          </div>
        </div>
        <!-- End Title -->
        <div class="table-responsive" id="tBody">
          <table class="table top-selling-table">
            <thead>
              <tr>
                <th>#</th>
                <th>
                  <h6 class="text-sm text-medium">Name</h6>
                </th>
                
                <th>
                  <h6 class="text-sm text-medium text-end">
                    Actions <i class="lni lni-arrows-vertical"></i>
                  </h6>
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
           
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="product">
                        <p class="text-sm">{{ $category->category_name }}</p>
                    </div>
                </td>
                <td>
                  <div class="action justify-content-end">
                    <a class="edit" href="{{ route("categories.edit", $category->id) }}"><i class="lni lni-pencil"></i></a>
                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false" >
                      <i class="lni lni-more-alt"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                      <li class="dropdown-item">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="action-icon d-inline-block pl-2">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="show_confirm"
                             data-toggle="tooltip" title='Delete'>
                             <a class="text-gray">Delete</a>
                          </button>
                       </form>
                      </li>
                     
                    </ul>
                  </div>
                </td>
              </tr>
            @endforeach
          
            </tbody>
          </table>
          <!-- End Table -->
        </div>
        {{ $categories->links() }}
      </div>
    </div>
    <!-- End Col -->
  </div>

 
@endsection
