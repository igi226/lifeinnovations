@extends('User.Layout.main')
@section('title', 'life-innovations-business-solutions || homepage')
@section('content')
    <!--section   -->
    <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" data-bg="{{ asset('User/images/bg/9.jpg') }}"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>Life Innovations Business Solutions</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="#">Evolved into a community based organization from working with small and mid-size businesses
                    across the US since 2002.</a>
            </div>
        </div>
    </section>
    <!-- section end  -->
    <!--section   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left_fix-bar fl-wrap">
                        <div class="categories_nav fl-wrap">
                            <!-- nav -->
                            <nav class="categories_nav-inner" id="menu2">
                                <ul>
                                    <li><a href="javascript:void(0)">
                                            <h3 class="blog-sed">Categories</h3>
                                        </a></li>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="javascript:void(0)"><i class="fal fa-podium"></i>
                                                {{ $category->category_name }} </a>
                                            <ul>
                                                @if (isset($category->sub_categories[0]))
                                                    @foreach ($category->sub_categories as $sub_category)
                                                        <li onclick="getCategoryWise({{ $sub_category->id }})"><a
                                                                href="javascript:void(0)">{{ $sub_category->subcategory_name }}
                                                            </a></li>
                                                    @endforeach
                                                @else
                                                    <li><a>No Subcategories</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach

                                </ul>
                            </nav>
                            <!-- nav end-->
                        </div>
                        <div class="box-widget-content">
                            <div class="banner-widget fl-wrap">
                                <div class="bg-wrap bg-parallax-wrap-gradien">
                                    <div class="bg" data-bg="{{ asset('User/images/bg/7.jpg') }}"
                                        style="background-image: url(_images/bg/7.html);"></div>
                                </div>
                                <div class="banner-widget_content">
                                    <h5>Visit our awesome merch and souvenir online shop.</h5>
                                    <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-container fl-wrap fix-container-init cen-align-container">
                        <div class="section-title">
                            <h3>Sorty by:</h3>
                            <div class="steader_opt steader_opt_abs">
                                <select name="filter" id="list" data-placeholder="Persons"
                                    class="style-select no-search-select">
                                    <option>Latest</option>
                                    <option>Most Read</option>
                                    <option>Most Viewed</option>
                                    <option>Most Commented</option>
                                </select>
                            </div>
                        </div>
                        <div class="list-post-wrap list-post-wrap_column" id="all-data">
                            <!--list-post-->
                            @foreach ($timeline_posts as $timeline_post)
                                <div class="list-post fl-wrap">
                                    @if (isset($timeline_post->post_galleries[0]))
                                        <a class="post-category-marker"
                                            href="#">{{ $timeline_post->category->category_name }}</a>
                                        <div class="list-post-media">
                                            <a href="javascript:void(0)">
                                                <div class="bg-wrap">
                                                    @if (File::extension($timeline_post->post_galleries[0]->content) == 'mp4')
                                                        <div class="bg"
                                                            data-bg="{{ asset('storage/Content/' . $timeline_post->post_galleries[0]->content) }}">
                                                            <video height="240">
                                                                <source
                                                                    src="{{ asset('storage/Content/' . $timeline_post->post_galleries[0]->content) }}"
                                                                    type="video/mp4">
                                                            </video>
                                                        </div>
                                                    @else
                                                        <div class="bg"
                                                            data-bg="{{ asset('storage/Content/' . $timeline_post->post_galleries[0]->content) }}">
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                            <span class="post-media_title">&copy; Image Copyrights Title</span>

                                        </div>
                                    @endif

                                    <div class="list-post-content">

                                        <h3><a href="javascript:void(0)">{{ $timeline_post->title }}</a></h3>
                                        <span class="post-date"><i class="far fa-clock"></i>
                                            {{ $timeline_post->created_at->toFormattedDateString() }}</span>
                                        @if (!isset($timeline_post->post_galleries[0]))
                                            <a class="post-category-marker noimgpostcategory"
                                                href="javascript:void(0)">{{ $timeline_post->category->category_name }}</a>
                                        @endif
                                        <div class="clearfix"></div>
                                        <p>{{ implode(' ', array_slice(str_word_count($timeline_post->description, 2), 0, 20)) }}
                                        </p>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> 6</li>
                                            <li><i class="fal fa-eye"></i> 587</li>
                                        </ul>
                                        <div class="author-link">
                                            <a href="javascript:void(0)">
                                                @if (isset($timeline_post->user->image) &&
                                                        !empty($timeline_post->user->image) &&
                                                        File::exists(public_path('storage/UserImage/' . $timeline_post->user->image)))
                                                    <img src="{{ asset('storage/UserImage/' . $timeline_post->user->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('noimg.png') }}" alt="no-image">
                                                @endif
                                                <span>{{ $timeline_post->user->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="list-post-wrap list-post-wrap_column" id="filteredData">
                            {{-- filtered data will comes here --}}
                        </div>
                        <div class="clearfix"></div>

                        <div class="pagination">
                           
                            {{ $timeline_posts->links() }}
                           
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <!-- sidebar   -->
                    <div class="sidebar-content fl-wrap fixed-bar">
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="search-widget fl-wrap">
                                    <form action="javascript:void(0)">
                                        <input name="se" id="se12" type="text" class="search"
                                            placeholder="Search..." value="" />
                                        <button class="search-submit2" id="submit_btn12"><i
                                                class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="banner-widget fl-wrap">
                                    <div class="bg-wrap bg-parallax-wrap-gradien">
                                        <div class="bg" data-bg="{{ asset('User/images/bg/7.jpg') }}"></div>
                                    </div>
                                    <div class="banner-widget_content">
                                        <h5>Visit our awesome merch and souvenir online shop.</h5>
                                        <a href="javascript:void(0)" class="btn float-btn color-bg small-btn">Our shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Categories</div>
                            <div class="box-widget-content">
                                <ul class="cat-wid-list">
                                    <li><a href="javascript:void(0)">Science</a><span>3</span></li>
                                    <li><a href="#">Politics</a> <span>6</span></li>
                                    <li><a href="#">Technology</a> <span>12</span></li>
                                    <li><a href="#">Sports</a> <span>4</span></li>
                                    <li><a href="#">Business</a> <span>22</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Popular Tags</div>
                            <div class="box-widget-content">
                                <div class="tags-widget">
                                    <a href="#">Science</a>
                                    <a href="#">Politics</a>
                                    <a href="#">Technology</a>
                                    <a href="#">Business</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Food</a>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Follow Us</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="#" target="_blank" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget-title">Likes</span>
                                        <span class="soc-widget_counter">2640</span>
                                    </a>
                                    <a href="#" target="_blank" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" target="_blank" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" target="_blank" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <!-- content-tabs-wrap -->
                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                    <div class="content-tabs fl-wrap">
                                        <ul class="tabs-menu fl-wrap no-list-style">
                                            <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                            <li><a href="#tab-resent">Resent News</a></li>
                                        </ul>
                                    </div>
                                    <!--tabs -->
                                    <div class="tabs-container">
                                        <!--tab -->
                                        <div class="tab">
                                            <div id="tab-popular" class="tab-content first-tab tab-none">
                                                <div class="post-widget-container fl-wrap">
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/1.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">How to start Home education.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 25 may 2022</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 12</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 654</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/2.jp') }}g"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">The secret to moving this screening.</a>
                                                            </h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 13 april 2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 6</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 1227</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/3.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">Fall ability to keep Congress on
                                                                    rails.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 02 December
                                                                        2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 12</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 654</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/4.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">Innovations that Bring Aesthetic Pleasure
                                                                    to All.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 30 september
                                                                        2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 44</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 684</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab  end-->
                                        <!--tab -->
                                        <div class="tab">
                                            <div id="tab-resent" class="tab-content tab-none">
                                                <div class="post-widget-container fl-wrap">
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/5.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">Magpie nesting zone sites.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 05 april 2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 16</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 727</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/6.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">Locals help create whole new
                                                                    community.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 22 march 2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 31</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 63</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                    <!-- post-widget-item -->
                                                    <div class="post-widget-item fl-wrap">
                                                        <div class="post-widget-item-media">
                                                            <a href="#"><img
                                                                    src="{{ asset('User/images/all/thumbs/7.jpg') }}"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="post-widget-item-content">
                                                            <h4><a href="#">Tennis season still to proceed.</a></h4>
                                                            <ul class="pwic_opt">
                                                                <li>
                                                                    <span><i class="far fa-clock"></i> 06 December
                                                                        2021</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="far fa-comments-alt"></i> 05</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fal fa-eye"></i> 145</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- post-widget-item end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab end-->
                                    </div>
                                    <!--tabs end-->
                                </div>
                                <!-- content-tabs-wrap end -->
                            </div>
                        </div>
                        <!-- box-widget  end -->
                    </div>
                    <!-- sidebar  end -->
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
    <!-- section end -->
    <!-- section  -->
    <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="{{ asset('User/images/all/banner.jpg') }}" class="respimg" alt="" />
        </div>
    </div>
    <!-- section end -->
@endsection

@section('indexScripts')
    <script>
        function getCategoryWise(sub_category_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/subcategories-wise-post') }}",
                data: {
                    'id': sub_category_id,
                    '_token': '{{ csrf_token() }}'
                },
                dataType: "html",
                success: function(response) {
                    $('#all-data').fadeOut();
                    $('#filteredData').html(response);

                }
            });
        }
    </script>
@endsection
