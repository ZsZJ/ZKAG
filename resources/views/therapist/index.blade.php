@extends('layouts.app')

@section('content')

    <div class="container-fluid py-5 mt-5 bg-light">
        <h1>Therapeuten</h1>
        <p>Veel therapeuten hebben zich aangesloten bij ZKAG. <br> Plan uw afspraak hier, en word zo snel mogelijk geholpen</p>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
            @foreach ($therapists as $therapist )
            <div class="col">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h5 class="card-title">{{ $therapist->name  }}</h5>
                        <p class="card-text">
                            {{ $therapist->street_name }} {{ $therapist->street_number }}
                            <br>
                            {{ $therapist->zip_code }} {{ $therapist->city }}
                            <br>
                            {{ $therapist->province }}
                        </p>
                        <a href="{{ route('therapeuten.details', ['id' => $therapist->id]) }}" class="btn btn-info rounded-0">Afspraak maken</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection