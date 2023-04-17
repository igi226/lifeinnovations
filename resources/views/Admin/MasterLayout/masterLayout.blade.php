@php
    $site_data = DB::table("site_information")->select("logo_image", "favicon_image")->first();
    $admin_data = DB::table("admins")->where("slug", "admin-lifeinnovations")->select("name")->first();

@endphp
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link
         rel="shortcut icon"
         href="{{ asset('storage/SiteImages/' .$site_data->favicon_image) }}"
         type="image/x-icon"
         />
      <title>@yield('title')</title>
      <!-- ========== All CSS files linkup ========= -->
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/lineicons.css') }}" />
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/materialdesignicons.min.css') }}" />
   
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/main.css') }}" />
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- selece2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
     
   </head>
   <body>
      <!-- ======== sidebar-nav start =========== -->
      <aside class="sidebar-nav-wrapper">
         <div class="navbar-logo">
            <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('storage/SiteImages/' .$site_data->logo_image) }}" alt="logo" />
            </a>
         </div>
         <nav class="sidebar-nav">
            <ul>
               <li class="nav-item">
                  <a href="{{ route('admin.dashboard') }}">
                     <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                           <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                     </span>
                     <span class="text">Dashboard</span>
                  </a>
               </li>
               <li class="nav-item nav-item-has-children">
                  <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                       
                           <i class="lni lni-users"></i>
                       
                     </span>
                     <span class="text">User management</span>
                  </a>
                  <ul id="ddmenu_2" class="collapse dropdown-nav">
                     <li>
                        <a href="{{ route("users.index") }}"> Users </a>
                     </li>
                     <li>
                        <a href="{{ route("users.create") }}">Add user</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="{{ route("categories.index") }}">
                     <span class="icon"><i class="lni lni-bricks"></i></span>
                     <span class="text">Categories</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="{{ route("posts.index") }}">
                     <span class="icon"><i class="lni lni-bricks"></i></span>
                     <span class="text">Timeline posts</span>
                  </a>
               </li>

               <li class="nav-item nav-item-has-children">
                  <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3" aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon">
                       
                           <i class="lni lni-credit-cards"></i>
                       
                     </span>
                     <span class="text">CMS</span>
                  </a>
                  <ul id="ddmenu_3" class="collapse dropdown-nav">
                     <li>
                        <a href="{{ route("cms.aboutus") }}"> About us cms </a>
                     </li>
                     <li>
                        <a href="{{ route("cms.services") }}"> Service cms </a>
                     </li>
                     <li>
                        <a href="{{ route("cms.create") }}">Add cms</a>
                     </li>
                  </ul>
               </li>

               <li class="nav-item">
                  <a href="{{ route("showEnquiries") }}">
                     <span class="icon"><i class="lni lni-bricks"></i></span>
                     <span class="text">Enquery</span>
                  </a>
               </li>

               <li class="nav-item">
                  <a href="{{ route("admin.siteSettings") }}">
                     <span class="icon"><i class="lni lni-cog"></i></span>
                     <span class="text">Site settings</span>
                  </a>
               </li>
               {{-- <li class="nav-item nav-item-has-children">
                  <a
                     href="#0"
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-target="#ddmenu_3"
                     aria-controls="ddmenu_3"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z"
                              />
                        </svg>
                     </span>
                     <span class="text">Auth</span>
                  </a>
                  <ul id="ddmenu_3" class="collapse dropdown-nav">
                     <li>
                        <a href="#"> Sign In </a>
                     </li>
                     <li>
                        <a href="#"> Sign Up </a>
                     </li>
                  </ul>
               </li>
               <span class="divider">
                  <hr />
               </span>
               <li class="nav-item nav-item-has-children">
                  <a
                     href="#0"
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-target="#ddmenu_4"
                     aria-controls="ddmenu_4"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z"
                              />
                        </svg>
                     </span>
                     <span class="text">UI Elements </span>
                  </a>
                  <ul id="ddmenu_4" class="collapse dropdown-nav">
                     <li>
                        <a href="alerts.html"> Alerts </a>
                     </li>
                     <li>
                        <a href="buttons.html"> Buttons </a>
                     </li>
                     <li>
                        <a href="cards.html"> Cards </a>
                     </li>
                     <li>
                        <a href="typography.html"> Typography </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item nav-item-has-children">
                  <a
                     href="#0"
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-target="#ddmenu_55"
                     aria-controls="ddmenu_55"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M1.83325 19.25V17.4167H18.3333V19.25H1.83325ZM18.3333 7.33333V4.58333H16.4999V7.33333H18.3333ZM18.3333 2.75C18.8195 2.75 19.2858 2.94315 19.6296 3.28697C19.9734 3.63079 20.1666 4.0971 20.1666 4.58333V7.33333C20.1666 7.81956 19.9734 8.28588 19.6296 8.6297C19.2858 8.97351 18.8195 9.16667 18.3333 9.16667H16.4999V11.9167C16.4999 12.8891 16.1136 13.8218 15.426 14.5094C14.7383 15.197 13.8057 15.5833 12.8333 15.5833H7.33325C6.36079 15.5833 5.42816 15.197 4.74053 14.5094C4.05289 13.8218 3.66659 12.8891 3.66659 11.9167V2.75H18.3333ZM14.6666 4.58333H5.49992V11.9167C5.49992 12.4029 5.69307 12.8692 6.03689 13.213C6.38071 13.5568 6.84702 13.75 7.33325 13.75H12.8333C13.3195 13.75 13.7858 13.5568 14.1296 13.213C14.4734 12.8692 14.6666 12.4029 14.6666 11.9167V4.58333Z"
                              />
                        </svg>
                     </span>
                     <span class="text">Icons</span>
                  </a>
                  <ul id="ddmenu_55" class="collapse dropdown-nav">
                     <li>
                        <a href="icons.html"> LineIcons </a>
                     </li>
                     <li>
                        <a href="mdi-icons.html"> MDI Icons </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item nav-item-has-children">
                  <a
                     href="#0"
                     class="collapsed"
                     data-bs-toggle="collapse"
                     data-bs-target="#ddmenu_5"
                     aria-controls="ddmenu_5"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z"
                              />
                        </svg>
                     </span>
                     <span class="text"> Forms </span>
                  </a>
                  <ul id="ddmenu_5" class="collapse dropdown-nav">
                     <li>
                        <a href="form-elements.html"> From Elements </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="tables.html">
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z"
                              />
                        </svg>
                     </span>
                     <span class="text">Tables</span>
                  </a>
               </li>
               <span class="divider">
                  <hr />
               </span>
               <li class="nav-item">
                  <a href="notification.html">
                     <span class="icon">
                        <svg
                           width="22"
                           height="22"
                           viewBox="0 0 22 22"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M9.16667 19.25H12.8333C12.8333 20.2584 12.0083 21.0834 11 21.0834C9.99167 21.0834 9.16667 20.2584 9.16667 19.25ZM19.25 17.4167V18.3334H2.75V17.4167L4.58333 15.5834V10.0834C4.58333 7.24171 6.41667 4.76671 9.16667 3.94171V3.66671C9.16667 2.65837 9.99167 1.83337 11 1.83337C12.0083 1.83337 12.8333 2.65837 12.8333 3.66671V3.94171C15.5833 4.76671 17.4167 7.24171 17.4167 10.0834V15.5834L19.25 17.4167ZM15.5833 10.0834C15.5833 7.51671 13.5667 5.50004 11 5.50004C8.43333 5.50004 6.41667 7.51671 6.41667 10.0834V16.5H15.5833V10.0834Z"
                              />
                        </svg>
                     </span>
                     <span class="text">Notifications</span>
                  </a>
               </li> --}}
            </ul>
         </nav>
       
      </aside>
      <div class="overlay"></div>
      <!-- ======== sidebar-nav end =========== -->
      <!-- ======== main-wrapper start =========== -->
      <main class="main-wrapper">
         <!-- ========== header start ========== -->
         <header class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-5 col-md-5 col-6">
                     <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn mr-20">
                           <button
                              id="menu-toggle"
                              class="main-btn primary-btn btn-hover"
                              >
                           <i class="lni lni-chevron-left me-2"></i> Menu
                           </button>
                        </div>
                        {{-- <div class="header-search d-none d-md-flex">
                           <form action="#">
                              <input type="text" placeholder="Search..." />
                              <button><i class="lni lni-search-alt"></i></button>
                           </form>
                        </div> --}}
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-6">
                     <div class="header-right">
                        {{-- <!-- notification start -->
                        <div class="notification-box ml-15 d-none d-md-flex">
                           <button
                              class="dropdown-toggle"
                              type="button"
                              id="notification"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              >
                           <i class="lni lni-alarm"></i>
                           <span>2</span>
                           </button>
                           <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="notification"
                              >
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('Admin/assets/images/lead/lead-6.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>
                                          John Doe
                                          <span class="text-regular">
                                          comment on a product.
                                          </span>
                                       </h6>
                                       <p>
                                          Lorem ipsum dolor sit amet, consect etur adipiscing
                                          elit Vivamus tortor.
                                       </p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('Admin/assets/images/lead/lead-1.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>
                                          Jonathon
                                          <span class="text-regular">
                                          like on a product.
                                          </span>
                                       </h6>
                                       <p>
                                          Lorem ipsum dolor sit amet, consect etur adipiscing
                                          elit Vivamus tortor.
                                       </p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <!-- notification end -->
                        <!-- message start -->
                        <div class="header-message-box ml-15 d-none d-md-flex">
                           <button
                              class="dropdown-toggle"
                              type="button"
                              id="message"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              >
                           <i class="lni lni-envelope"></i>
                           <span>3</span>
                           </button>
                           <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="message"
                              >
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('Admin/assets/images/lead/lead-5.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>Jacob Jones</h6>
                                       <p>Hey!I can across your profile and ...</p>
                                       <span>10 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('Admin/assets/images/lead/lead-3.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>John Doe</h6>
                                       <p>Would you mind please checking out</p>
                                       <span>12 mins ago</span>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <div class="image">
                                       <img src="{{ asset('Admin/assets/images/lead/lead-2.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                       <h6>Anee Lee</h6>
                                       <p>Hey! are you available for freelance?</p>
                                       <span>1h ago</span>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <!-- message end -->
                        <!-- filter start -->
                        <div class="filter-box ml-15 d-none d-md-flex">
                           <button class="" type="button" id="filter">
                           <i class="lni lni-funnel"></i>
                           </button>
                        </div>
                        <!-- filter end --> --}}
                        <!-- profile start -->
                        <div class="profile-box ml-15">
                           <button
                              class="dropdown-toggle bg-transparent border-0"
                              type="button"
                              id="profile"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              >
                              <div class="profile-info">
                                 <div class="info">
                                    <h6>{{ $admin_data->name }}</h6>
                                    {{-- <div class="image">
                                       <img
                                          src="{{ asset('Admin/assets/images/profile/profile-image.png') }}"
                                          alt=""
                                          />
                                       <span class="status"></span>
                                    </div> --}}
                                 </div>
                              </div>
                              <i class="lni lni-chevron-down"></i>
                           </button>
                           <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="profile"
                              >
                              <li>
                                 <a href="{{ route("admin.adminProfile") }}">
                                 <i class="lni lni-user"></i> View Profile
                                 </a>
                              </li>
                              <li>
                                <a href="{{ route("admin.adminChangePassword") }}">
                                <i class="lni lni-user"></i> Change Password
                                </a>
                             </li>
                              {{-- <li>
                                 <a href="#0">
                                 <i class="lni lni-alarm"></i> Notifications
                                 </a>
                              </li>
                              <li>
                                 <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                              </li>
                              <li>
                                 <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                              </li> --}}
                              <li>
                                 <a href="{{ route("admin.logout") }}"> <i class="lni lni-exit"></i> Sign Out </a>
                              </li>
                           </ul>
                        </div>
                        <!-- profile end -->
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- ========== header end ========== -->
         <!-- ========== section start ========== -->
         @yield('content')
         <!-- ========== section end ========== -->
         <!-- ========== footer start =========== -->
         <footer class="footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 order-last order-md-first">
                     <div class="copyright text-center text-md-start">
                        <p class="text-sm">
                           Designed and Developed by
                           <a href="{{route('admin.dashboard')}}" rel="nofollow" target="_blank" > Lifeinnovations </a>
                        </p>
                     </div>
                  </div>
                  <!-- end col-->
                  <div class="col-md-6">
                     <div
                        class="
                        terms
                        d-flex
                        justify-content-center justify-content-md-end
                        "
                        >
                        <a href="#0" class="text-sm">Term & Conditions</a>
                        <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                     </div>
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </footer>
         <!-- ========== footer end === -->
      </main>
      @yield('changeS')
      {{-- select2 --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="{{ asset('Admin/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

      <script>
         $('#summernote').summernote();
       </script>
     @yield('select2')

           
      <script>
         $('.show_confirm').click(function(event) {
          var form = $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
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
                           form.submit();
                        } else if (result.isDenied) {
                           Swal.fire('Changes are not saved', '', 'info')
                        }
                     })
                  });
     </script>
   </body>
</html>