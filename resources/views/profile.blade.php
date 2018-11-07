@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Users are listed below <br><br>

                        @if (count($users) === 1)
                            I have one record!
                        @elseif (count($users) >= 10)
                            I have at least 10 records!
                        @else
                            I don't have any records!
                        @endif

                        @foreach ($users as $user)
                            <p>This is user {{ $user->name . ' ID: ' . $user->id }}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
