@extends('admin.layouts.master')

@section('main')

<h1>Change Password</h1>
<hr>

@include('admin.flash')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-10 p-0">
			<div class="card">
				<div class="card-header">Change your password</div>
				<div class="card-body">
					<form method="POST" action="{{ route('admin.changePass.update') }}">
						@csrf
						<div class="form-group row">
							<label for="current-password" class="col-md-5 col-lg-4 col-form-label text-md-right">Current password</label>
							<div class="col-md-7 col-lg-6">
								<input id="current-password" type="password" class="form-control{{ $errors->has('current-password') ? ' is-invalid' : '' }}" name="current-password" value="{{ $current->password ?? old('current-password') }}" required autofocus>

								@if ($errors->has('current-password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('current-password') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<label for="new-password" class="col-md-5 col-lg-4 col-form-label text-md-right">New Password</label>
							<div class="col-md-7 col-lg-6">
								<input id="new-password" type="password" class="form-control{{ $errors->has('new-password') ? ' is-invalid' : '' }}" name="new-password" required>

								@if ($errors->has('new-password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('new-password') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group row">
							<label for="new-password-confirm" class="col-md-5 col-lg-4 col-form-label text-md-right">Confirm New Password</label>

							<div class="col-md-7 col-lg-6">
								<input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
							</div>
						</div>
						<div class="form-group row mb-0 justify-content-center">
							<div class="col-md-7 col-lg-6 offset-md-5 offset-lg-2">
								<button type="submit" class="btn btn-primary">
									{{ __('Reset Password') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection