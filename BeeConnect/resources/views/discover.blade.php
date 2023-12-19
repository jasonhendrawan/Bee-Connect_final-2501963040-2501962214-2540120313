@extends('layouts.app')

@section('content')
    <content>
        <div class="discovery">
            <div class="searchbar">
                <form class="d">
                    {{-- <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ old('search') }}"> --}}
                    <input type="text" placeholder="Search" class="search" name="search" value="{{ old('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
            <!-- search bar -->
            <!-- filter -->
            {{-- <div class="filterbox">
                <button type="button" class="filtertag">Add Filter</button> --}}
            {{-- <div class="filtertag">
                       <a href="discoverFilter.html">
                        <span class="tag2">Add Filter</span>
                       </a>
                </div> --}}
        </div>
        <!-- filter -->
        <!-- profiles -->
        <div class="profileCol">
            <div class="profiles  row row-cols-1 row-cols-md-3 g-1 justify-content-start">
                @foreach ($user as $user)
                    <div class="profile">
                       @if ($user->image)
                            <img src="{{ asset('assets/profile/' . $user->image) }}" class="editprof">
                        @else
                            <img src="assets\profile\istockphoto-1354776457-612x612.jpg" class="editprof">
                        @endif
                        {{-- <img src="{{'assets/profile/'. $user->image}}" class="editprof"> --}}
                        <div class="details">
                            <div class="namefollow">
                                <div class="namegender">
                                    <div class="names">
                                        <h4>{{ $user->first_name }}</h4>
                                    </div>
                                    <div class="hiddennames">
                                        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                    </div>
                                    @if ($user->gender == 'Male')
                                        <img src="assets/mars.png" width="25px" height="25px" alt="">
                                    @else
                                        <img src="assets/female.png" width="45px" height="45px" alt="">
                                    @endif
                                    <a href="friend.html">
                                        <form action="/request/{{ $user->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn_disc">
                                                <img src="assets/add.png" height="25px" width="25px">
                                            </button>
                                        </form>
                                    </a>
                                </div>

                            </div>
                            <div class="bottom">
                                <div class="tags">
                                    {{-- <span class="tag">B25</span> --}}
                                    @foreach ($major as $m)
                                        @if ($m->ID == $user->major_id)
                                            <span class="tag">{{ $m->major_name }}</span>
                                        @endif
                                    @endforeach
                                    <div class="hiddentags">
                                        @foreach ($region as $r)
                                            @if ($r->ID == $user->region_id)
                                                <span class="tag">{{ $r->region_name }}</span>
                                            @endif
                                        @endforeach
                                        @if ($user->org_id != null)
                                            @foreach ($org as $o)
                                                @if ($o->ID == $user->org_id)
                                                    <span class="tag">{{ $o->org_name }}</span>
                                                @endif
                                            @endforeach
                                        @endif
                                        @if ($user->hobby1 != null)
                                            <span class="tag">{{ $user->hobby1 }}</span>
                                        @endif
                                        @if ($user->hobby2 != null)
                                            <span class="tag">{{ $user->hobby2 }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="location">
                                    <img src="assets/location.png" alt="" width="15px" height="15px">
                                    <span class="locationname">{{ $user->region_name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </content>
    @if ($errors->any())
        <script>
            alert("{{ $errors }}");
        </script>
    @endif
@endsection
