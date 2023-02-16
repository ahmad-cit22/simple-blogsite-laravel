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
            <table class="table table-striped user_datatable">
                <thead>
                    <tr>
                        <th class="text-center">SL</th>
                        <th class="text-center">Profile Picture</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bloggers as $key => $blogger)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>

                            <td class="text-center">
                                    <img src="{{ Avatar::create($blogger->name)->toBase64() }}" width="55" height=55" />
                            </td>
                            <td>{{ $blogger->name }}</td>
                            <td>{{ $blogger->email }}</td>
                            <td>{{ $blogger->created_at->diffForHumans() }}</td>
                            <td><a href="{{ route('blogger.delete', $blogger->id) }}"
                                    class="btn btn-danger userDel">Delete</a></td>
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
