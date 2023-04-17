@extends('Admin.MasterLayout.masterLayout');
@section('title', 'About Us Cms')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">About us cms</h6>
                        @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                    </div>
                    {{-- <div class="right">
                        <div class="select-style-1">
                            <div class="select-position select-sm">
                                <select class="light-bg">
                                    <option value="">Today</option>
                                    <option value="">Yesterday</option>
                                </select>
                            </div>
                        </div>
                        <!-- end select -->
                    </div> --}}
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Title</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Short Description <i class="lni lni-arrows-vertical"></i>
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
                            @foreach ($aboutUscms as $cms)
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                @if (isset($cms->image) && !empty($cms->image && File::exists(public_path('storage/CmsImage/' . $cms->image))))
                                                    <img src="{{ asset('storage/CmsImage/' . $cms->image) }}"
                                                        alt="" />
                                                @else
                                                    <img src="{{ asset('noimg.png') }}" alt="no-image">
                                                @endif
                                            </div>
                                        </div>
                                        <p class="text-sm">{{ $cms->title }}</p>
                </div>
                </td>
                <td>
                    <span class="text-sm">{{ $cms->short_desc }}</span>
                </td>
                <td>
                    <div class="action justify-content-end">
                        <a href="{{ route('cms.show', $cms->slug) }}" class="edit">
                            <i class="lni lni-pencil"></i>
                        </a >
                       
                        
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
