@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Account Sign up ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>Sign up</h3>
</div>
<div class="row">
	<form method="post" action="{{ route('signup') }}" class="form-horizontal" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />


		<!-- User Name-->
		<div class="control-group{{ $errors->first('username', ' error') }}">
			<label class="control-label" for="username">User Name</label>
			<div class="controls">
				<input type="text" name="username" id="username" value="{{ Input::old('username') }}" />
				{{ $errors->first('username', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Email -->
		<div class="control-group{{ $errors->first('email', ' error') }}">
			<label class="control-label" for="email">Email</label>
			<div class="controls">
				<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Email Confirm -->
		<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
			<label class="control-label" for="email_confirm">Confirm Email</label>
			<div class="controls">
				<input type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
				{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Password -->
		<div class="control-group{{ $errors->first('password', ' error') }}">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="password" name="password" id="password" value="" />
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Password Confirm -->
		<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
			<label class="control-label" for="password_confirm">Confirm Password</label>
			<div class="controls">
				<input type="password" name="password_confirm" id="password_confirm" value="" />
				{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<hr>

		<!-- Form actions -->
		<div class="control-group">
			<div class="controls">
				<a class="btn" href="{{ route('home') }}">Cancel</a>

				<button type="submit" class="btn">Sign up</button>
			</div>
		</div>
	</form>
</div>
@stop
