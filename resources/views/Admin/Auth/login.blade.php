<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="{{ asset('User/images/favicon.ico') }}" type="image/x-icon" />
      <title>Admin | Lifeinnovations</title>
      <!-- ========== All CSS files linkup ========= -->
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/lineicons.css') }}">
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/materialdesignicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('Admin/assets/css/main.css') }}" />
   </head>
   <body>
      <section class="signin-section">
         <div class="container-fluid">
            <div class="row g-0 auth-row">
               <div class="col-lg-6">
                  <div class="auth-cover-wrapper bg-primary-100">
                     <div class="auth-cover">
                        <div class="title text-center">
                           <h1 class="text-primary mb-10">Welcome Back</h1>
                           <p class="text-medium">
                              Sign in to your admin pannel
                           </p>
                        </div>
                        <div class="cover-image">
                           <img src="{{ asset('Admin/assets/images/auth/signin-image.svg') }}" alt="" />
                           {{-- <img src="{{ asset('User/images/life-logo.png') }}" alt="" /> --}}
                        </div>
                        <div class="shape-image">
                           <img src="{{ asset('Admin/assets/images/auth/shape.svg') }}" alt="" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="signin-wrapper">
                     <div class="form-wrapper">
                        <h6 class="mb-15">Admin Sign In </h6>
                        @if(Session::has('msg'))
                       <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                        <p class="text-sm mb-25">
                           Start creating the best possible user experience for you
                           customers.
                        </p>
                        <form action="{{ route("admin.loggedin") }}" method="POST">
                            @csrf
                           <div class="row">
                              <div class="col-12">
                                 <div class="input-style-1">
                                    <label>Email</label>
                                    <input name="email" type="email" placeholder="Email" />
                                    @if ($errors->has('email'))

                                        <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="input-style-1">
                                    <label>Password</label>
                                    <input name="password" id="adminpassword" type="password" placeholder="Password" />
                                    @if ($errors->has('password'))

                                        <span class="text-danger">{{ $errors->first('password') }}</span>

                                        @endif
                                    <span class="password-icon" onclick="password_show_hide();">
                                        <i class="lni lni-lock" id="show_eye"></i>
                                        <i class="lni lni-unlock d-none" id="hide_eye"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="col-xxl-6 col-lg-12 col-md-6">
                                 <div class="form-check checkbox-style mb-30">
                                    <input class="form-check-input" type="checkbox" value=""
                                       id="checkbox-remember" />
                                    <label class="form-check-label" for="checkbox-remember">
                                    Remember me next time</label>
                                 </div>
                              </div>
                              <div class="col-xxl-6 col-lg-12 col-md-6">
                                 <div
                                    class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                    <a href="#0" class="hover-underline">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="button-group d-flex justify-content-center flex-wrap ">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                    Sign In
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script>

        function password_show_hide() {

          var x = document.getElementById("adminpassword");

          var show_eye = document.getElementById("show_eye");

          var hide_eye = document.getElementById("hide_eye");

          hide_eye.classList.remove("d-none");

          if (x.type === "password") {

            x.type = "text";

            show_eye.style.display = "none";

            hide_eye.style.display = "block";

          } else {

            x.type = "password";

            show_eye.style.display = "block";

            hide_eye.style.display = "none";

          }

        }

        </script>

   </body>
</html>