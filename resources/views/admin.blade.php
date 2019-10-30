@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('admin.manage.users') }}">{{ __('Manage users') }}</a></div>
                <div class="card-header"><a class="nav-link" href="{{ route('admin.change.password') }}">{{ __('Change Password') }}</a></div>
            </div>
        </div>
		
		<div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    You are logged in as administrator !!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
