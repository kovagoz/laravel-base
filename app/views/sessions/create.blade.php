@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'sessions.store']) }}
                    <fieldset>
                        @if (Session::has('flash_message'))
                            <div class="alert alert-danger">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                        <div class="form-group">
                            {{ Form::text('username', null, [
                                'placeholder' => 'Username',
                                'class' => 'form-control',
                                'autofocus'
                            ]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', [
                                'placeholder' => 'Password',
                                'class' => 'form-control'
                            ]) }}
                        </div>
                        <div class="checkbox">
                            <label>
                                {{ Form::checkbox('remember') }}
                                Remember Me
                            </label>
                        </div>
                        {{ Form::submit('Login', [
                            'class' => 'btn btn-lg btn-success btn-block'
                        ]) }}
                    </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
