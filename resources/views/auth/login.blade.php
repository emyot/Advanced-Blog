@extends('layouts.app')

@section('content')
  <div class="panel">
    <p class="panel-heading">
      Log In
    </p>
    <div class="panel-tabs">
    </div>
  </div>
  <div class="columns is-mobile">
    <div class="column is-one-third is-offset-one-third">
      <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="label">Email</label>
          <div class="control has-icons-left">
            <input type="email" name="email" id="email"
              class="input {{ $errors->has('email') ? 'is-danger': 'is-primary' }}"
              value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <p class="help is-danger">
                      <strong>{{ $errors->first('email') }}</strong>
                  </p>
              @endif
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="label">Password</label>
          <div class="control has-icons-left">
            <input type="password" name="password" id="password"
            class="input {{ $errors->has('password') ? 'is-danger': 'is-primary' }}"
            placeholder="password" required>
            @if ($errors->has('password'))
                <p class="help is-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </p>
            @endif
            <span class="icon is-small is-left">
              <i class="fa fa-key"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox">
              <b-checkbox type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              </b>
              Remember Me
            </label>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button type="submit" name="button" class="button is-link is-outlined is-fullwidth">
              Login
            </button>
          </div>
        </div>
        </form>

        <div class="control has-text-centered m-t-10">
              <a href="{{ route('password.request') }}">
                <span class="icon is-small is-left">
                  <i class="fa fa-unlock-alt"></i>
                </span>
                Forgot your password?
              </a>
        </div>
      </div>
  </div>

@endsection
