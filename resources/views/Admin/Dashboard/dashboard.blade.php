@extends('Admin.MasterLayout.masterLayout');
@section('title', 'Dashboard')
@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Welcome to dashboard</h2>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            <i class="lni lni-cart-full"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total posts</h6>
                            <h3 class="text-bold mb-10">34567</h3>
                            <p class="text-sm text-success">
                                <i class="lni lni-arrow-up"></i> +2.00%
                                <span class="text-gray">(30 days)</span>
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            <i class="lni lni-dollar"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total brands</h6>
                            <h3 class="text-bold mb-10">$74,567</h3>
                            <p class="text-sm text-success">
                                <i class="lni lni-arrow-up"></i> +5.45%
                                <span class="text-gray">Increased</span>
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon primary">
                            <i class="lni lni-credit-cards"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total categories</h6>
                            <h3 class="text-bold mb-10">$24,567</h3>
                            <p class="text-sm text-danger">
                                <i class="lni lni-arrow-down"></i> -2.00%
                                <span class="text-gray">Expense</span>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total Users</h6>
                            <h3 class="text-bold mb-10">34567</h3>
                            <p class="text-sm text-danger">
                                <i class="lni lni-arrow-down"></i> -25.00%
                                <span class="text-gray"> Earning</span>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div
                            class="
                title
                d-flex
                flex-wrap
                align-items-center
                justify-content-between
              ">
                            <div class="left">
                                <h6 class="text-medium mb-30">Sales History</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Products</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Category <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Revenue <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
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
                                    <tr>
                                        <td>
                                            <div class="product">
                                                <div class="image">
                                                    <img src="{{ asset('Admin/assets/images/products/product-mini-1.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <p class="text-sm">Bedroom</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm">Interior</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$345</p>
                                        </td>
                                        <td>
                                            <span class="status-btn close-btn">Pending</span>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <button class="edit">
                                                    <i class="lni lni-pencil"></i>
                                                </button>
                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Remove</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product">
                                                <div class="image">
                                                    <img src="{{ asset('Admin/assets/images/products/product-mini-2.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <p class="text-sm">Arm Chair</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm">Interior</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$345</p>
                                        </td>
                                        <td>
                                            <span class="status-btn warning-btn">Refund</span>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <button class="edit">
                                                    <i class="lni lni-pencil"></i>
                                                </button>
                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Remove</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product">
                                                <div class="image">
                                                    <img src="{{ asset('Admin/assets/images/products/product-mini-3.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <p class="text-sm">Sofa</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm">Interior</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$345</p>
                                        </td>
                                        <td>
                                            <span class="status-btn success-btn">Completed</span>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <button class="edit">
                                                    <i class="lni lni-pencil"></i>
                                                </button>
                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Remove</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product">
                                                <div class="image">
                                                    <img src="{{ asset('Admin/assets/images/products/product-mini-4.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <p class="text-sm">Kitchen</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm">Interior</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">$345</p>
                                        </td>
                                        <td>
                                            <span class="status-btn close-btn">Canceled</span>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">
                                                <button class="edit">
                                                    <i class="lni lni-pencil"></i>
                                                </button>
                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Remove</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#0" class="text-gray">Edit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
@endsection
