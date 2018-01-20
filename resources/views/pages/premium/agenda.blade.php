@extends('layouts.premium')

@section('content')

<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Agenda</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="{{ route('premium.index') }}"><i class="icon-dashboard"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#"><i class="icon-calendar active"></i> &nbsp;Agenda</a>
            </div>
        </li>
    </ol>

    {{-- Vue Calendar Component --}}
    <agenda-component></agenda-component>

</main>

@endsection