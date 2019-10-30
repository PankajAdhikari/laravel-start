@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('admin.manage.users') }}">{{ __('Go Back') }}</a></div>
            </div>
        </div>
		
		<div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
				
                    <form method="POST" action="{{ route('admin.users.update') }}">
                        @csrf
						<input type="hidden" name="user_id" value="{{ $user->id }}" />
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" readonly autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name='role'>
									<option value='student' {{$user->role == 'student'  ? 'selected' : ''}}>Student</option>
									<option value='teacher' {{$user->role == 'teacher'  ? 'selected' : ''}}>Teacher</option>
									<option value='manager' {{$user->role == 'manager'  ? 'selected' : ''}}>Manager</option>
								</select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
