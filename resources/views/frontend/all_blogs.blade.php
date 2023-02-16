@extends('frontend.master')

@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->
    <!-- ======================= Category & Slider ======================== -->
    <section class="p-0">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="killore-new-block-link border mb-3 mt-3">
                        <div class="px-3 py-3 ft-medium fs-md text-dark gray">Blog Categories</div>

                        <div class="killore--block-link-content">
                            <ul>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Technologies</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Fashion</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Lifestyle</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Ethics</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Politics</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; Economy</a>
                                </li>
                                <li><a href="javascript:void(0);"><img class="mb-1"
                                            src="{{ asset('uploads/category/books-776722.png') }}" alt="category_img"
                                            width="25">&nbsp; World</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                
                    <!-- ======================= Blogs ======================== -->

                    @foreach ($blogs as $blog)
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <a href="{{ route('blog.view', $blog->id) }}">
                                    <h3 class="text-info">{{ $blog->blog_title }}</h3>
                                </a>
                            </div>
                            @if (Auth::guard('bloggerAuth')->id() == $blog->blogger_id)
                                <div class="col-xl-3 col-lg-3">
                                    <span class="badge badge-success">Your post</span>
                                </div>
                            @else
                                <div class="col-xl-3 col-lg-3">
                                    <span class="badge badge-info">Others' post</span>
                                </div>
                            @endif

                        </div>

                        <p class="mb-5" style="width: 750px; text-align: justify">{{ $blog->blog_body }}</p>
                    @endforeach



                    <!-- ======================= Blogs ============================ -->
                </div>

            </div>
        </div>
    </section>
@endsection

@section('footer_body')
    @if (session('loginSuccess'))
        <script>
            Swal.fire(
                'Welcome!',
                "{{ session('loginSuccess') }}",
                'success'
            )
        </script>
    @endif
    
    @if (session('delSuccess'))
        <script>
            Swal.fire(
                'Done!',
                "{{ session('delSuccess') }}",
                'success'
            )
        </script>
    @endif
@endsection
