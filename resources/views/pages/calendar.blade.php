@extends('layouts.app-dashboard')

@section('content')

    <div id="app" class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Kalender</li>
            </ol>
            <calendar-component></calendar-component>
        </div>
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection