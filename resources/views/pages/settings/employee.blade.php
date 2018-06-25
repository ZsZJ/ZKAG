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
                <li class="breadcrumb-item active">Werknemers</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-12">
                    <a  href="{{ route('employees.create') }}" class="btn btn-primary">Nieuwe werknemer</a>
                    <table class="table mt-3">
                        <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Functie</th>
                            <th scope="col">Acties</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name  }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->function }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('employees.edit', ['id' => $employee->id]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ Form::model($employee, ['route' => ['employees.destroy', $employee->id], 'method' => 'delete', 'class' => 'd-inline']) }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection