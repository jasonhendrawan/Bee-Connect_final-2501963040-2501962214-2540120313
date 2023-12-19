@extends('layouts.app')

@section('content')
    <content>
        <div class="card-container1">
            <div class="cardFriend">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    @if (Auth::user()->image)
                        <img src="{{ asset('assets/profile/' . Auth::user()->image) }}" class="rounded-circle mt-3 mb-3"
                            alt="..." style="height: 130px; width: 130px">
                    @else
                        <img src="assets\profile\istockphoto-1354776457-612x612.jpg" class="rounded-circle mt-3 mb-3"
                            alt="..." style="height: 150px; width: 150px">
                    @endif
                </button>
                <div class="card-content">
                    <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                    <p>
                        @foreach ($major as $m)
                            @if ($m->ID == Auth::user()->major_id)
                                {{ $m->major_name }}
                            @endif
                        @endforeach
                        -
                        @foreach ($region as $r)
                            @if ($r->ID == Auth::user()->region_id)
                                {{ $r->region_name }}
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

        <div class="hr-container">
            <hr class="short-hr">
        </div>

        <h2>Connection Requests</h2>
        <div class="card-container">
            @foreach ($request as $r)
                @foreach ($user as $u)
                    @if ($u->id === $r->connector_id)
                        <div class="cardFriend">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                @if ($u->image)
                                    <img src="{{ asset('assets/profile/' . $u->image) }}" class="rounded-circle mt-3 mb-3"
                                        alt="..." style="height: 130px; width: 130px">
                                @else
                                    <img src="assets\profile\istockphoto-1354776457-612x612.jpg" class="rounded-circle mt-3 mb-3"
                                        alt="..." style="height: 150px; width: 150px">
                                @endif
                            </button>
                            <div class="card-content">
                                <h3>{{$u->first_name}} {{$u->last_name}}</h3>
                                <div class="card-buttons">
                                    <form action="/update/status/approved/{{$r->ID}}" method="POST">
                                        @csrf
                                        <button class="green-button" type="submit"><i class="fas fa-check"></i></button>
                                    </form>
                                    <form action="/update/status/rejected/{{$r->ID}}" method="POST">
                                        @csrf
                                        <button class="red-button" type="submit"><i class="fas fa-times"></i></button>
                                    </form>
                                </div>
                                <p>
                                    @foreach ($major as $m)
                                        @if ($m->ID == $u->major_id)
                                            {{ $m->major_name }}
                                        @endif
                                    @endforeach
                                    -
                                    @foreach ($region as $r)
                                        @if ($r->ID == $u->region_id)
                                            {{ $r->region_name }}
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach

        </div>

        <div class="hr-container">
            <hr class="short-hr">
        </div>

        <h2>Connected</h2>
        <div class="card-container">
            @foreach ($request2 as $r)
                @foreach ($user as $u)
                    @if ($u->id === $r->connector_id)
                        <div class="cardFriend">
                            <button disabled type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                @if ($u->image)
                                    <img src="{{ asset('assets/profile/' . $u->image) }}">
                                @else
                                    <img src="assets\profile\istockphoto-1354776457-612x612.jpg">
                                @endif
                            </button>
                            <div class="card-content">
                                {{-- <p>{{ $r }}</p> --}}
                                <h3>{{$u->first_name}} {{$u->last_name}}</h3>
                                <p>
                                    @foreach ($major as $m)
                                        @if ($m->ID == $u->major_id)
                                            {{ $m->major_name }}
                                        @endif
                                    @endforeach
                                    -
                                    @foreach ($region as $r)
                                        @if ($r->ID == $u->region_id)
                                            {{ $r->region_name }}
                                        @endif
                                    @endforeach
                                    -
                                    IG@: {{ $u->instagram }}
                                    -
                                    {{ $u->whatsapp }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </content>
@endsection
