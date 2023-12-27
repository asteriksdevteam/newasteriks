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
    .search-field
    {
        width: 400px;
        border-radius: 0px;
        font-family: 'Poppins', sans-serif;
        text-transform: capitalize;
        border-color: #071D26 !important;
        border-width:2px !important;
    }
    .search-field:focus
    {
        border-radius: 0px;
        box-shadow: none !important;
        outline: none !important;
        border-color: #FF6145 !important;
    }
    .search-field::placeholder
    {
        color:#000;
    }
    .input-searchf 
    {
        position: relative;
        width: fit-content;
    }
    .input-searchf::placeholder
    {
        color:#000;
    }
    .input-searchf i 
    {
        position: absolute;
        right: 8px;
        top: 11px;
    }
</style>

<section class="blog-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <h1 class="text-white title">We always think</h1>
                <p class="text-white">Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs.</p>
            </div>
        </div>
    </div>
</section>

<section class="popular-blogs">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">Recent Blogs</h2>
            </div>
        </div>
        <div class="row mb-4">
            @foreach($RecentBlogs as $item)
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="popular-blog1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="popular-img">
                                    <img src="{{ asset($item->blog_thumbnail_image)}}" alt="{{$item->blog_thumbnail_image}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="popular-content">
                                    <div>
                                        <h5><a href="{{ url('blog-detail/'.$item->slug) }}" style="color: #081c26;" >{{ $item->blog_title }}</a></h5>
                                        <p>{{ Carbon\Carbon::parse($item->date)->format('M d, Y') }}</p>
                                    </div>
                                    <!--<div class="read-blogbtn">-->
                                    <!--    <a href="{{ url('blog-detail/'.$item->slug) }}">read-blog</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="title">Discover More Topics</h2>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="input-searchf">
                    <input type="text" class="form-control search-field blogeSearch" placeholder="search">
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </div>
        <div class="row mb-4 pb-1 rowmargin">
            <ul class="blogs-tab nav nav-tabs mt-2 mb-5 pt-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active AllBlogsWithCategories" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">all</button>
                </li>
                @foreach($ServiceCategory as $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link blogsWithCategories" data-id="{{ $item->id }}" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog-tab-pane" type="button" role="tab" aria-controls="blog-tab-pane" aria-selected="false">{{ $item->category }}</button>
                    </li>
                @endforeach
            </ul>
            @php
                $blogCount = 0;
            @endphp
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active">
                    <div class="row showBlogsWithCategories">
                        @foreach($Blogs as $item)
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="card blog-card">
                                    <div class="card-header blog-header">
                                        <img src="{{ asset($item->blog_thumbnail_image)}}" class="img-fluid blog-img" alt="{{$item->blog_thumbnail_image}}">
                                    </div>
                                    <div class="card-body">
                                        <div class="blog-body">
                                            <p><span style="color: #f55e43;font-weight: bold;">{{ $item->author }}</span> | <span style="color: #081c26;font-weight: bold;">{{ $item->ServiceCategory->category }}</span> | {{ Carbon\Carbon::parse($item->date)->format('M d, Y') }}</p>
                                            <h5><a href="{{ url('blog-detail/'.$item->slug) }}" style="color: #081c26;" >{{ $item->blog_title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $blogCount++;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="blog-section-btn">
                <a href="javascript:void()" class="addMoreblog" data-count="{{ $blogCount }}">Explore more</a>
            </div>
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

@push('scripts')

<script>

$(document).on("click", ".blogsWithCategories", function(){

    var id = $(this).data("id");

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('id', id);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url('blogs_with_categories') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".showBlogsWithCategories").html(result.html);
        }
    });
})

$(document).on("click", ".AllBlogsWithCategories", function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('allData', "alldata");

    $.ajax({
        url: "{{ url('all_blogs_with_categories') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".showBlogsWithCategories").html(result.html);
        }
    });
})

$(document).on("click", ".addMoreblog", function(){
    
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    
    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('count', $(this).data('count'));
    
    $.ajax({
        url: "{{ url('add_more_blog') }}",
        method: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) 
        {
            $(".showBlogsWithCategories").html(response.html);
        }
    });
})

$(document).on("keyup", ".blogeSearch", function(){
    
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    
    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('count', $(this).val());
    
    $.ajax({
        url: "{{ url('search_blog') }}",
        method: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) 
        {
            // console.log(response);
            $(".showBlogsWithCategories").html(response.html);
        }
    });
})
</script>

@endpush

@endsection