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
                <li class="breadcrumb-item active">Nieuwe werknemer</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-3">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Werknemer toevoegen</h5>

                            {{ Form::open(array('route' => 'employees.store')) }}
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input id="name" type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name">E-mail</label>
                                <input id="email" type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="name">Functie</label>
                                <input id="function" type="text" name="function" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Werknemer toevoegen</button>

                            {{ Form::close() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection
