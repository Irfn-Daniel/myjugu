@extends('layoutuser')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h2>JUGU CLAN PROFILES</h2>
                <a href=" {{ route('admins.create') }} " class="btn btn-primary mb-3">Add New Member</a>

                <table id="members" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subclan</th>
                            <th>Sub subclan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Loop through your paginated members data and display each row --}}
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->subclan }}</td>
                                <td>{{ $member->sub_subclan }}</td>
                                <td>
                                    {{-- Add actions like view, edit, and delete --}}
                                    <a href=" {{ route('admins.show', $member->id) }} " class="btn btn-sm btn-primary">View</a>
                                    <a href=" {{ route('admins.edit', $member->id) }} " class="btn btn-sm btn-warning">Edit</a>
                                      <form action=" {{ route('admins.destroy', $member->id) }} " method="POST" style="display: inline;"> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Add pagination links --}}
                {{ $members->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
@endsection