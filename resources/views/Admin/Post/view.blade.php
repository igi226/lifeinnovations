@extends('Admin.MasterLayout.masterLayout')
@section('title', 'Posts')
@section('content')
    <section>
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title d-flex align-items-center flex-wrap mb-30">
                            {{-- <h2 class="mr-40">Invoice</h2> --}}
                            <a href="#0" class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-pencil mr-5"></i> Edit</a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('posts.index') }}">Posts</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        show
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- Invoice Wrapper Start -->
            <div class="invoice-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-card card-style mb-30">
                            <div class="invoice-header">
                                <div class="invoice-for">
                                    <h2 class="mb-10">Title:</h2>
                                    <p class="text-sm">
                                        {{ $post->title }}
                                    </p>
                                </div>

                            </div>
                           
                                <div class="invoice-header">
                                    <div class="invoice-for">
                                        <h2 class="mb-10">Posted by:</h2>
                                        <p class="text-sm">
                                            {{ $post->user->name }}
                                        </p>
                                    </div>

                                </div>

                                <div>
                                    <div class="invoice-for">
                                        <h2 class="mb-10">Contents</h2>
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
                                               
                                                {{-- <form action="{{ route('content.destroy', $item->id) }}" method="POST"
                                                    class="action-icon d-inline-block pl-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit" class="show_confirm" data-toggle="tooltip" title='Delete'>
                                                        <a class="text-gray">Delete</a>
                                                    </button>
                                                </form> --}}
                                               
                                                <button type="button" onclick="contentDelete({{ $item->id }})" class="btn">Delete</button>
                                            </div>

                                         
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                                <div class="invoice-header">
                                    <div class="invoice-for">
                                        <h2 class="mb-10">Comments:</h2>
                                        <p class="text-sm">
                                            @foreach ($post->post_comments as $item)
                                            <h6>{{ $item->user->name }}</h6>
                                            {{ @$item->created_at->diffForHumans() }}
                                            <p>{{ $item->comment_text }}</p>
                                            <hr>
                                            @endforeach
                                            
                                            
                                        </p>
                                    </div>

                                </div>
                                <!-- End Card -->
                           
                            <!-- ENd Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- Invoice Wrapper End -->
                </div>
                <!-- end container -->
    </section>

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
