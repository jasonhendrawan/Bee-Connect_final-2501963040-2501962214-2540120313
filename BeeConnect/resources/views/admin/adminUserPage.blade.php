@extends('admin.adminLayout')

@section('content')
    <content>
        <div class="containerAdmin">
            <div class="add_major">
                <div class="titleAdmin"> Manage User</div>
            </div>
            <hr />
            <table id="users-table" class="UserTable">

                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <!-- <th>Image</th> -->
                    <th>Instagram</th>
                    <th>Whatsapp</th>
                    <th>Region</th>
                    <th>Major</th>
                    <!-- <th>Role</th> -->
                    <!-- <th>Organization</th> -->
                    <th>Action</th>
                </tr>
                @foreach ($user as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->first_name }}</td>
                    <td>{{ $u->last_name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->gender }}</td>
                    <!-- <td>{{ $u->image }}</td> -->
                    <td>{{ $u->instagram }}</td>
                    <td>{{ $u->whatsapp }}</td>
                    <td>{{ $u->region_id }}</td>
                    <td>{{ $u->major_id }}</td>
                    <td>{{ $u->org_id }}</td>
                    <td class="buttonUser">
                        <form action="/delete/user/{{$u->id}}" method="POST">
                            @csrf
                            <button type="submit" id="deleteBtn" class="delbtn" value="Delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
    </content>
@endsection
