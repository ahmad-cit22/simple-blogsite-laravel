@extends('frontend.master')

@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Single Blog</a></li>
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

                    <div class="row mt-5">
                        <div class="col-xl-9 col-lg-9">
                            <h1 class="text-info">{{ $blog->blog_title }}</h1>
                        </div>
                        @if (Auth::guard('bloggerAuth')->id() == $blog->blogger_id)
                            <div class="col-xl-3 col-lg-3">
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info ml-2 text-light">Edit</a>
                                <a href="{{ route('blog.del', $blog->id) }}"
                                    class="btn btn-danger ml-2 text-light">Delete</a>
                            </div>
                        @endif

                    </div>

                    <p class="mt-5 fs-md text-justify" style="width: 800px">{{ $blog->blog_body }}</p>




                    <!-- ======================= Blogs ============================ -->
                </div>

            </div>
        </div>
    </section>
@endsection

@section('footer_body')
 @if (session('updateSuccess'))
        <script>
            Swal.fire(
                'Done!',
                "{{ session('updateSuccess') }}",
                'success'
            )
        </script>
    @endif
@endsection
