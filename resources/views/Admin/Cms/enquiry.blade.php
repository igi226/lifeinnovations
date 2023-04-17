@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Enquiries')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">Enquiries</h6>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                    </div>

                </div>
                <!-- End Title -->
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Name</h6>
                                </th>
                                <th>
                                    <h6 class="text-sm text-medium">
                                        Phone
                                    </h6>
                                </th>

                                <th>
                                    <h6 class="text-sm text-medium">
                                        Address
                                    </h6>
                                </th>
                                <th>
                                    <h6 class="text-sm text-medium">
                                        Message
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
                            @foreach ($enquiries as $enquery)
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <p>{{ $enquery->name }}</p>
                                            </div>
                                        </div>
                                        <p class="text-sm">{{ $enquery->email }}</p>
                </div>
                </td>
                <td>
                    <span class="text-sm">{{ $enquery->phone }}</span>
                </td>

                <td>
                    <span class="text-sm">{{ $enquery->address }}</span>
                </td>

                <td>
                    <span class="text-sm">{{ $enquery->message }}</span>
                </td>
                <td>
                    <div class="action justify-content-end">
                        <form action="{{ route('deleteEnquiries', $enquery->id) }}" method="POST" class="action-icon d-inline-block pl-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="show_confirm btn-danger" data-toggle="tooltip" title='Delete'>
                                <a class="text-danger">Delete</a>
                            </button>
                        </form>


                    </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <!-- End Table -->
            </div>
        </div>
    </div>
    <!-- End Col -->
    </div>
@endsection
