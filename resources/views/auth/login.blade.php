@extends('layouts.login_head')

@section('content')
<div class="container">
    <div class="col-6 mx-auto">
        <div class="card rounded-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="main font-weight-bold">ZKAG I Zorgkantoor
                            <span class="secondary">Alternatieve Geneeswijze</span>
                        </h5>
                    </div>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label small font-weight-bold">E-Mail</label>
                        <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label small font-weight-bold">Wachtwoord</label>
                        <input id="password" type="password" class="form-control rounded-0" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded-0 border-0 bg-secondary">
                            Inloggen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
