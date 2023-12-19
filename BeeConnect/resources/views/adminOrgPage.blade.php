@extends('admin.adminLayout')

@section('content')
    <content>
        <div class="containerAdmin">
            <div class="add_major">
                <div class="titleAdmin"> Manage Organization</div>
                <div class="titleAdmin2">
                    <form action="/add/org" class="add_major" method="POST">
                        @csrf
                        <input type="text" id="region" name="org_name" class="inpt_major" placeholder="Input new organization">
                        {{-- <input type="submit" id="addBtn" class="addbtn" value="Add"/> --}}
                        <button type="submit" class="addbtn">Add</button>
                    </form>
                </div>
            </div>
            <hr />
            <table id="users-table" class="UserTable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($org as $o)
                    <tr>
                        <td>{{$o->ID}}</td>
                        <td>{{$o->org_name}}</td>
                        <td class="buttonUser">
                            <form action="/delete/org/{{$o->ID}}" method="POST">
                                @csrf
                                <button type="submit" id="deleteBtn" class="delbtn" value="Delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </content>
@endsection
