@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Posts')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">List of timeline posts</h6>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                    </div>
                    <div class="right">
                        <div class="select-style-1">
                         
                            <a href="{{ route("posts.create") }}" class="btn-sm primary-btn btn-hover">
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
                                    <h6 class="text-sm text-medium">Title</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">Content <i class="lni lni-arrows-vertical"></i></h6>
                                </th>

                               
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Total comments <i class="lni lni-arrows-vertical"></i>
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
                            @foreach ($posts as $post)
                                {{-- @php
                if($post->status == 0){
                    $class = "status-btn close-btn";
                    $text = "Inactive";
                }elseif ($post->status == 1) {
                    $class = "status-btn success-btn";
                    $text = "Active";
                }
            @endphp --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="product">
                                            {{-- <div class="image">

                                                @if (isset($post->image) && !empty($post->image && File::exists(public_path('storage/UserImage/' . $post->image))))
                                                    <img src="{{ asset('storage/UserImage/' . $post->image) }}"
                                                        alt="" />
                                                @else
                                                    <img src="{{ asset('noimg.png') }}" alt="no-p_image">
                                                @endif
                                            </div> --}}
                                            <p class="text-sm">{{ $post->title }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm"><a href="{{ route("posts.show",$post->slug) }}" target="_blank" rel="noopener noreferrer">View content</a></p>
                                    </td>

                                    <td>
                                      <span class="status-btn success-btn">{{ $post->post_comments->count() }}</span>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <a class="edit" href="{{ route('posts.edit', $post->slug) }}"><i
                                                    class="lni lni-pencil"></i></a>
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <form action="{{ route('posts.destroy', $post->slug) }}" method="POST"
                                                        class="action-icon d-inline-block pl-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="show_confirm" data-toggle="tooltip"
                                                            title='Delete'>
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
                {{ $posts->links() }}
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
                            $("#tBody").load(window.location.href + " #tBody");
                        }

                    });
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            });
        }
    </script>


@endsection
