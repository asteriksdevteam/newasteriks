@extends('userPanel.layouts.app')
@section('content')
<style>
    .limited-lines {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-clamp: 2;
        max-height: 2.5em; 
    }

    #social-links ul
    {
        margin:0px;
        padding:0px 0px 0px 27px;
    }
    #social-links ul li {
    position: relative;
    display: inline;
    margin-right: 20px;
    padding: 13px 13px 5px 0;
}
    #social-links ul li:before
    {
        content:'';
        position: absolute;
        top:0;
        right:0;
        border:1px solid #EAEAEA;
        width: 1px;
        height:100%;
    }
    #social-links ul li:last-child:before
    {
        display: none;
    }
    #social-links ul li a 
    {
        text-decoration: none;
        color: #1C3879;
        font-size: 26px;
    }
    .f1
    {
        position: relative;
        padding:0px;
        border: 1px solid #EAEAEA;
    }
    #social-links ul li:last-child
    {
        margin-right: 0px;
        padding-right:0px;
    }
    .social-div 
    {
        float: right;
        margin-right: 33px;
    }
    @media(max-width:1024px)
    {
        #social-links ul {
            margin: 0px;
            padding: 0px 0px 0px 17px;
        }
        #social-links ul li
        {
            margin-right:8px;
        }
        #social-links ul li a
        {
            font-size: 22px;
        }
    }
    @media(max-width:576px)
    {
        #social-links ul 
        {
            padding: 0px 0px 0px 12px;
        }
    }
</style>
<section class="blog-inner-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <h2 class="text-white title">{{ $Blogs->blog_title }}</h2>
                {{-- <p class="text-white limited-lines">{!! $Blogs->blog_short_description !!}</p> --}}
            </div>
        </div>
    </div>
</section>

<section class="innerblog-content">
    <div class="container">
        <div class="row">
            <img src="{{ asset($Blogs->blog_image) }}" alt="{{ $Blogs->blog_image }}">
        </div>
       
        <div class="row mt-5 bloginner-content">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="bloginner-main-content">
                    <div class=" blogheading">

                        <div class="row align-items-center">
                            <div class="col-6">
                                <p>{{ $Blogs->author }} | {{ Carbon\Carbon::parse($Blogs->date)->format('M d, Y') }}</p>
                                <h2 class="title">{{ $Blogs->blog_title }}</h2>        
                            </div>
                            <div class="col-6">
                                <div class="social-div"> 
                                    {!! $shareComponent !!}
                                </div>
                            </div>
                        </div>
                        <p>{!! $Blogs->blog_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="row mb-4">
                    <div class="card innerblog-card">
                        <h3 class="subtitle">Tags</h3>
                        <div class="innerblog-tags">
                            @foreach(explode(", ",$Blogs->meta_keyword) as $item)
                            <div class="one">
                                <a href="javascript:void()">#{{ $item }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <h3 class="subtitle">Recent Blogs</h3>
                    </div>
                    <div class="col-lg-12">
                        @foreach($RecentBlogs as $item)
                            <div class="card blog-card">
                                <div class="card-header blog-header">
                                    <img src="{{ asset($item->blog_thumbnail_image) }}" class="img-fluid blog-img" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="blog-body blog-body2">
                                        <p><span style="color: #f55e43;font-weight: bold;">{{ $item->author }}</span> | <span style="color: #081c26;font-weight: bold;">{{ $item->ServiceCategory->category }}</span> | {{ Carbon\Carbon::parse($Blogs->date)->format('M d, Y') }}</p>
                                <h5><a href="{{ url('blog-detail/'.$item->slug) }}" style="color: #081c26;" >{{ $item->blog_title }}</a></h5>
                                <!--<h4 class="limited-lines">{!! $item->blog_short_description !!}</h4>-->
                                <!--<div class="float-end mb-2 mt-4 read-blogbtn">-->
                                <!--    <a href="{{ url('blog-detail/'.$item->slug) }}">read-blog</a>-->
                                <!--</div>-->
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-innersection">
    <div class="container">
        <div class="row mb-2">
            <div class="col-lg-8">
                <h2 class="title">You may also like</h2>
            </div>
        </div>
        <div class="row mb-4 pb-1">

            @foreach($RelatedBlogs as $item)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card blog-card">
                        <div class="card-header blog-header">
                            <img src="{{ asset($item->blog_thumbnail_image) }}" class="img-fluid blog-img" alt="">
                        </div>
                        <div class="card-body">
                            <div class="blog-body">
                                <p><span style="color: #f55e43;font-weight: bold;">{{ $item->author }}</span> | <span style="color: #081c26;font-weight: bold;">{{ $item->ServiceCategory->category }}</span> | {{ Carbon\Carbon::parse($Blogs->date)->format('M d, Y') }}</p>
                                <h5><a href="{{ url('blog-detail/'.$item->slug) }}" style="color: #081c26;" >{{ $item->blog_title }}</a></h5>
                                <!--<h4 class="limited-lines">{!! $item->blog_short_description !!}</h4>-->
                                <!--<div class="float-end mb-2 mt-4 read-blogbtn">-->
                                <!--    <a href="{{ url('blog-detail/'.$item->slug) }}">read-blog</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="building-digital-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="title mb-5">Building digital products and we are just getting started!</h2>
                <div class="btn-link">
                    <a href="{{ url('contact-us') }}" class="orangebtn">learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection