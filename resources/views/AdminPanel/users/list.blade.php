@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Users</li>
                        <li class="breadcrumb-item active">List</li>                        
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            {{-- <th scope="col">Id</th> --}}
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersData as $item)
                            <tr>
                                {{-- <th scope="row">{{ $item->id }}</th> --}}
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row">{{ $item->email }}</th>
                                <th scope="row">
                                    <select class="form-control type" id="{{ $item->id }}"
                                        data-name="{{ $item->name }}">
                                        <option @if ($item->type == 'A')selected @endif value="A">Admin</option>
                                        <option @if ($item->type == 'U')selected @endif value="U">User</option>
                                    </select>
                                </th>
                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="confirm('Sure to delete?')"
                                        href="{{ route('del_users', $item->id) }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            var old_val;
            $(document).on('focus', '.type', function(e) {
                old_val = $(this).val();
            });
            $(document).on('change', '.type', function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var name = $(this).attr('data-name');
                var new_val = $(this).val();
                var csrf = "{{ csrf_token() }}";

                if (!confirm('Are you sure to change ' + name + '\'s Account Type?')) {
                    $(this).val(old_val);
                    return;
                } else {
                    data = {
                        id: id,
                        typ: new_val,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('type_users') }}",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            alert(response.message);
                        }
                    });
                    old_val = new_val;
                }

            });
        });
    </script>
@endsection
