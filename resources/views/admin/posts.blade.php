@extends('layouts.dashboard')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col m-auto">
            <h1 class="ml-2 mb-4" style="color: rgb(37, 1, 120)">User List</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">Blogger Name</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $key => $post)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}></td>

                            <td class="text-center">
                                {{ $post->rel_to_blogger->name }}
                            </td>
                            <td>{{ $post->blog_title }}</td>
                            <td>{{ $post->blog_body }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td><a href="{{ route('blog.del', $post->id) }}" class="btn btn-danger userDel">Delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('footerBody')
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
