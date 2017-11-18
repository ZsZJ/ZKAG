@extends('layouts.login_head')

@section('content')
<div class="container">
    <div class="col-6 mx-auto">
        <div class="card rounded-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <strong class="main">ZKAG I Zorgkantoor
                            <span class="secondary">Alternatieve Geneeswijze</span>
                        </strong>
                    </div>
                </div>
                <form class="form-horizontal mt-4" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label small">E-Mail Address</label>
                        <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label small">Wachtwoord</label>
                        <input id="password" type="password" class="form-control rounded-0" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded-0 border-0 bg-secondary">
                            Login
                        </button>

                        <a class="btn btn-link main" href="{{ route('password.request') }}">
                            Wachtwoord vergeten?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
