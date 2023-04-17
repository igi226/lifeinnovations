
@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Users')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <div class="title d-flex flex-wrap align-items-center justify-content-between">
          <div class="left">
            <h6 class="text-medium mb-30">List of users</h6>
            @if(Session::has('msg'))
              <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif
          </div>
          <div class="right">
            <div class="select-style-1">
              {{-- <div class="select-position select-sm">
                <select class="light-bg">
                  <option value="">Ascending </option>
                  <option value="">Descending </option>
                </select>
              </div> --}}
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
                <th class="min-width">
                  <h6 class="text-sm text-medium">Email <i class="lni lni-arrows-vertical"></i></h6>
                </th>
                {{-- <th class="min-width">
                  <h6 class="text-sm text-medium"> Status <i class="lni lni-arrows-vertical"></i></h6>
                </th> --}}
                <th class="min-width">
                  <h6 class="text-sm text-medium">
                    Status <i class="lni lni-arrows-vertical"></i>
                  </h6>
                </th>
                <th>
                  <h6 class="text-sm text-medium text-end">
                    Actions <i class="lni lni-arrows-vertical"></i>
                  </h6>
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            @php
                if($user->status == 0){
                    $class = "status-btn close-btn";
                    $text = "Inactive";
                }elseif ($user->status == 1) {
                    $class = "status-btn success-btn";
                    $text = "Active";
                }
            @endphp
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="product">
                        <div class="image">
                        
                            @if (isset($user->image) && !empty($user->image && File::exists(public_path("storage/UserImage/" . $user->image))))
                            <img src="{{ asset('storage/UserImage/'.$user->image)}}" alt=""/>
                        @else
                            <img src="{{asset('noimg.png')}}" alt="no-p_image">   
                        @endif
                        </div>
                        <p class="text-sm">{{ $user->name }}</p>
                    </div>
                </td>
                <td>
                  <p class="text-sm">{{ $user->email }}</p>
                </td>
                
                <td>
                  <span onclick="changeStatus({{ $user->id }})" class="{{ $class }}">{{ $text }}</span>
                </td>
                <td>
                  <div class="action justify-content-end">
                    <a class="edit" href="{{ route("users.edit", $user->id) }}"><i class="lni lni-pencil"></i></a>
                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false" >
                      <i class="lni lni-more-alt"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                      <li class="dropdown-item">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="action-icon d-inline-block pl-2">
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
        {{ $users->links() }}
      </div>
    </div>
    <!-- End Col -->
  </div>

 
@endsection
@section('changeS')
<script>
    function changeStatus(user_id) {
      Swal.fire({
                title: 'Do you want to change the status?',
                showCancelButton: true,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  $.ajax({
                      type: "POST",
                      url: "{{ url('admin/users/changeS') }}",
                      data: {
                              'id': user_id,
                              '_token': '{{ csrf_token() }}'
                            },
                      dataType: "JSON",
                      success: function(response) {
                        Swal.fire(response.msg);
                        $( "#tBody" ).load(window.location.href + " #tBody" );
                      }

                  });
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
              });
    }

   
 
  </script>
   
@endsection