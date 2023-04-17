@extends('User.Layout.main')
@section('title', 'life-innovations-business-solutions || service-we-offer')
@section('content')
<div class="main-banner" style="background-image:url(User/images/background-bg.jpg)">
    <div class="life-info">
        <h2>Services We Offer</h2>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">/</a></li>
            <li class="active">Services</li>
        </ul>
    </div>
</div>
<div class="container mt-10">
    <div class="innovation-heading text-center">
        <h5>GET BEST IT SOLUTION 2023</h5>
        <h2>Inspiring Tech Needs For Business</h2>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-4">
            <div class="innovation-service">
                <div class="innovation-service-content">
                    <div class="serviceimg-box">
                        <img src="{{ asset('User/images/service-1.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <h2>lorem ipsum dolor</h2>
                        <p>dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh
                            dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs </p>
                    </div>
                </div>
                <div class="innovation-service-detail">
                    <h3>Mobile Application</h3>
                    <p>Internal accounting & sales data, in addition to external market and economic indicators</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="innovation-service">
                <div class="innovation-service-content">
                    <div class="serviceimg-box">
                        <img src="{{ asset('User/images/service-2.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <h2>lorem ipsum dolor</h2>
                        <p>dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh
                            dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs </p>
                    </div>
                </div>
                <div class="innovation-service-detail">
                    <h3>Digital Marketing</h3>
                    <p>Internal accounting & sales data, in addition to external market and economic indicators</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="innovation-service">
                <div class="innovation-service-content">
                    <div class="serviceimg-box">
                        <img src="{{ asset('User/images/service-3.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <h2>lorem ipsum dolor</h2>
                        <p>dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh
                            dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs </p>
                    </div>
                </div>
                <div class="innovation-service-detail">
                    <h3>Google Analytics</h3>
                    <p>nternal accounting & sales data, in addition to external market and economic indicators</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="innovation-service-bg mt-10" style="background-image:url(User/images/background-bg.jpg)">
    <div class="service-blur">
        <div class="service-title">
            <h2>A BRAND NEW WAY TO EXCITE YOUR AUDIENCE</h2>
            <div class="service-border"></div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
            <div class="icon-play">
                <a href=""><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-10">
    <div class="innovation-heading text-center">
        <h5>FEATURES</h5>
        <h2>MORE FEATURES</h2>
    </div>
    <div class="innovation-feature mt-5">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#feature-01">MOBILE APPLICATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#feature-02">DIGITAL MARKETING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#feature-03">GOOGLE ANALYTICS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#feature-04">ECOMMERCE SOLUTIONS</a>
            </li>
        </ul>
    </div>
    <div class="tab-content more-feature mt-5">
        <div id="feature-01" class="tab-pane active">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-tab-doc">
                        <img src="{{ asset('User/images/tab_01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-content-inner">
                        <h4>MOBILE APPLICATION</h4>
                        <p>Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically
                            productivate pandemic e-business rather than state of the art e-tailers.</p>
                        <ul>
                            <li>Web and Mobile User Interface</li>
                            <li>Mobile Application Design</li>
                            <li>Custom Scripting and Plugins</li>
                            <li>HTML5, Cms Development</li>
                            <li>Retina Ready and Resposive Design</li>
                            <li>Print - Ready Marketing Materials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature-02" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-tab-doc">
                        <img src="{{ asset('User/images/tab_02.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-content-inner">
                        <h4>DIGITAL MARKETING</h4>
                        <p>Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically
                            productivate pandemic e-business rather than state of the art e-tailers.</p>
                        <ul>
                            <li>Web and Mobile User Interface</li>
                            <li>Mobile Application Design</li>
                            <li>Custom Scripting and Plugins</li>
                            <li>HTML5, Cms Development</li>
                            <li>Retina Ready and Resposive Design</li>
                            <li>Print - Ready Marketing Materials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature-03" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-tab-doc">
                        <img src="{{ asset('User/images/tab_03.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-content-inner">
                        <h4>GOOGLE ANALYTICS</h4>
                        <p>Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically
                            productivate pandemic e-business rather than state of the art e-tailers.</p>
                        <ul>
                            <li>Web and Mobile User Interface</li>
                            <li>Mobile Application Design</li>
                            <li>Custom Scripting and Plugins</li>
                            <li>HTML5, Cms Development</li>
                            <li>Retina Ready and Resposive Design</li>
                            <li>Print - Ready Marketing Materials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature-04" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-tab-doc">
                        <img src="{{ asset('User/images/tab_04.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="feature-content-inner">
                        <h4>ECOMMERCE SOLUTIONS</h4>
                        <p>Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically
                            productivate pandemic e-business rather than state of the art e-tailers.</p>
                        <ul>
                            <li>Web and Mobile User Interface</li>
                            <li>Mobile Application Design</li>
                            <li>Custom Scripting and Plugins</li>
                            <li>HTML5, Cms Development</li>
                            <li>Retina Ready and Resposive Design</li>
                            <li>Print - Ready Marketing Materials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-10 mb-5">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="service-query" style="background-image:url(User/images/service-4.jpg)">
                <div class="query-blur">
                    <h3>Have Any Query?</h3>
                    <div class="qery-btn">
                        <a href="">Get A quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="service-challenge">
                <h4>The challenge of project</h4>
                <p>Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically
                    productivate pandemic e-business rather than state of the art e-tailers.</p>
                <p>Completely unleash frictionless data via end-to-end services. Continually unleash virtual e-tailers through magnetic core competencies. Interactively engage distributed alignments via focused alignments.</p>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6">
                    <div class="service-doc">
                        <img src="{{ asset('User/images/service-4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-doc">
                        <img src="{{ asset('User/images/service-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="accordian-query">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Ethical testing rather than ethical interfaces?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance,
                                as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                                though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Latin derived from Cicero's 1st-century BC text De
                         </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within
                                the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Creation timelines for the standard lorem passage
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within
                                the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection