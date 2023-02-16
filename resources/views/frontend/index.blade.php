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
                    <!-- ======================= Post a Blog ======================== -->

                    <div class="my-4">
                        <form class="" action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            <p class="h6">Write a new blog post</p>
                            <input placeholder="Blog title" class="px-3 py-2 mb-2 " style="display: block; width: 400px"
                                value="{{ old('blog_title') }}" name="blog_title" />
                            @error('blog_title')
                                <strong class="text-danger mb-2" style="display: block">{{ $message }}</strong>
                            @enderror
                            <textarea placeholder="Write your blog" cols="80" rows="7" class="px-3 py-2" name="blog_body"></textarea>
                            @error('blog_body')
                                <strong class="text-danger mb-2" style="display: block">{{ $message }}</strong>
                            @enderror
                            <button type="submit"
                                class="btn btn-sm mb-5 ml-2 bg-dark text-light fs-md ft-medium">Post</button>
                        </form>
                    </div>
                    <!-- ======================= Post a Blog ============================ -->

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
    @if (session('postSuccess'))
        <script>
            Swal.fire(
                'Done!',
                "{{ session('postSuccess') }}",
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
