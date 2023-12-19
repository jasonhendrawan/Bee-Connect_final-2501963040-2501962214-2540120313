@extends('layouts.app')

@section('content')
    <content>
        <div class="profile">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                @if (Auth::user()->image)
                    <img src="{{ asset('assets/profile/' . Auth::user()->image) }}" class="rounded-circle mt-3 mb-3"
                        alt="..." style="height: 130px; width: 130px">
                @else
                    <img src="assets\profile\istockphoto-1354776457-612x612.jpg" class="rounded-circle mt-3 mb-3"
                        alt="..." style="height: 150px; width: 150px">
                @endif
            </button>
        </div>

        <div id="content">
            <hr />
            <h2>Personal Information</h2>
            <form method="POST" action="/updateProfile">
                @csrf
                <div class="rowprofile">
                    <div class="row1">
                        <label for="">Student Id</label>
                        <input disabled type="text" placeholder="{{ Auth::user()->student_id }}">
                        <label for="">First Name</label>
                        <input disabled type="text" value={{ Auth::user()->first_name }} name="first_name">
                        <label for="">Last Name</label>
                        <input disabled type="text" value={{ Auth::user()->last_name }} name="last_name">
                        <label for="">Email</label>
                        <input disabled type="text" value={{ Auth::user()->email }} name="email">
                    </div>
                    <div class="row2">
                        <label for="">Gender</label>
                        <input disabled id="gender" name="gender" value={{ Auth::user()->gender }}>

                        <label for="">Major</label>
                        <input disabled id="major" name="major" value="{{ $major->major_name }}">

                        <!-- <input type="text" placeholder="Computer Science"> -->
                        <label for="">Region</label>
                        <input disabled id="region" name="region" value="{{ $region->region_name }}">

                        <!-- <input type="text" placeholder="Kemanggisan"> -->
                    </div>
                </div>

                <hr />
                <h2>Additional Information</h2>
                <div class="rowprofile">
                    <div class="row1">
                        <label for="">Hobby 1</label>
                        <input type="text" name="hobby1" value="{{ Auth::user()->hobby1 }}">

                        <label for="">Organization</label>
                            <div class="form-group">
                                {{-- <label for="dropdown"></label> --}}
                                <select id="org" name="org">
                                    @if (Auth::user()->org_id)
                                    <option value="{{ Auth::user()->org_id }}">{{ $org->org_name }}</option>
                                    @endif
                                    @foreach ($dataOrg as $org)
                                    <option value="{{ $org->ID }}">{{ $org->org_name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        {{-- <select id="org" name="org">
                            @if ($org->id)
                                @if ($org->id == Auth::user()->org_id)
                                    <option value={{ $org->id }}>{{ $org->org_name }}</option>
                                @endif
                            @endif
                            @foreach ($dataOrg as $o)
                                <option value={{ $o->id }}>{{ $o->org_name }}</option>
                            @endforeach
                        </select> --}}
                        <!-- <input type="text" placeholder="BNEC"> -->
                    </div>
                    <div class="row2">
                        <label for="">Hobby 2</label>
                        <input type="text" name="hobby2" value="{{ Auth::user()->hobby2 }}">
                    </div>
                </div>

                <hr />
                <h2>Social Media</h2>
                <div class="rowprofile">
                    <div class="row1">
                        <label for="">Instagram</label>
                        <input type="text" name="instagram" value="{{ Auth::user()->instagram }}">
                    </div>
                    <div class="row2">
                        <label for="">Whatsapp</label>
                        <input type="text" name="whatsapp" value="{{ Auth::user()->whatsapp }}">
                    </div>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </content>
    <div class="modal fade modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form class="modal-dialog" method="POST" action="/update/picture"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Image</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mt-3">
                        <input type="file" class="form-control" id="imageURL" name="imageURL"
                            placeholder="Image URL">
                        <div id="emailHelp" class="form-text">Please upload your image to other sources first and Use the
                            URL</div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if (Auth::user()->image)
                        <a href="/delete/picture">
                            <button type="button" class="btn btn-danger">Delete Photo</button>
                        </a>
                    @else
                        <button class="btn btn-danger" disabled>Delete Photo</button>
                    @endif
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
@endsection
