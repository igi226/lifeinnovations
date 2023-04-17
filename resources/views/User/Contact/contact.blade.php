@extends('User.Layout.main')
@section('title', 'life-innovations-business-solutions || homepage')
@section('content')
<div class="main-banner" style="background-image:url(User/images/background-bg.jpg)">
    <div class="life-info">
        <h2>Contact Us</h2>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">/</a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>
<div class="innovation-contact-bg" style="background-image:url(User/images/contact_bg.webp)">
    <div class="container">
        <div class="contact-bg">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="form-body">
                        <div class="contact-heading">
                            <h4>Send us a Message</h4>
                            @if (Session::has('msg'))
                                <p class="alert alert-info">{{ Session::get('msg') }}</p>
                            @endif
                        </div>
                        <form action="{{ route('enqueryForm') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="enquery_name" value="{{ old('enquery_name') }}">
                                    @if ($errors->has('enquery_name'))
                                        <span class="text-danger">{{ $errors->first('enquery_name') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="enquery_email" value="{{ old('enquery_email') }}">
                                    @if ($errors->has('enquery_email'))
                                        <span class="text-danger">{{ $errors->first('enquery_email') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Phone No." name="enquery_phone" value="{{ old('enquery_phone') }}">
                                    @if ($errors->has('enquery_phone'))
                                        <span class="text-danger">{{ $errors->first('enquery_phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="" class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone No." name="address" value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12 col-md-12 mb-3">
                                    <label for="address" class="form-label">Message</label>
                                    <textarea cols="10" rows="5" class="form-control" placeholder="Text Your Message" name="message" >{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12 col-md-12 mb-3">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-info">
                        <img src="{{ asset('User/images/contact_pic1.png') }}" alt="">
                        <h3>Email Address</h3>
                        <p>brittany.malone1017@gmail.com</p>
                    </div>
                    <div class="contact-info">
                        <img src="{{ asset('User/images/contact_pic2.png') }}" alt="">
                        <h3>Headquarters</h3>
                        <p>1234 abc, xyz</p>
                    </div>
                    <div class="contact-info">
                        <img src="{{ asset('User/images/contact_pic3.png') }}" alt="">
                        <h3>Phone Number</h3>
                        <p>1234567890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection