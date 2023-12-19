@extends('admin.adminLayout')

@section('content')
    <content>
        <div class="containerAdmin">
            <div class="add_major">
                <div class="titleAdmin"> Manage Major</div>
                <div class="titleAdmin2">
                    <form action="/add/major" class="add_major" method="POST">
                        @csrf
                        <input type="text" id="region" name="major_name" class="inpt_major" placeholder="Input new major">
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
                @foreach ($major as $m)
                    <tr>
                        <td>{{$m->ID}}</td>
                        <td>{{$m->major_name}}</td>
                        <td class="buttonUser">
                            <form action="/delete/major/{{$m->ID}}" method="POST">
                                @csrf
                                <button type="submit" id="deleteBtn" class="delbtn" value="Delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{-- <div class="add_major">
                <input type="text" id="major" name="major" class="inpt_major" placeholder="Input new major">
                <input type="submit" id="addBtn" class="addbtn" value="Add"/>
            </div> --}}
        </div>


    </content>
@endsection
