@extends('layouts.app-dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">Instellingen</li>
                <li class="breadcrumb-item active">
                    <a href="/employees">Werknemers</a>
                </li>
                <li class="breadcrumb-item active">{{ $employee->name }}</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Werknemer wijzigen</h5>

                            {{ Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'patch']) }}
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ $employee->name }}">
                            </div>

                            <div class="form-group">
                                <label for="name">E-mail</label>
                                <input id="email" type="email" name="email" class="form-control" value="{{ $employee->email }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Functie</label>
                                <input id="function" type="text" name="function" class="form-control" value="{{ $employee->function }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Werknemer wijzigen</button>

                            {{ Form::close() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection