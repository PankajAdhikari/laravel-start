@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Go Back') }}</a></div>
            </div>
        </div>
		
		<div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
				
					<table class="table table-hover">
						<thead>
							<th>Full Name</th>
							<th>Email Address</th>
							<th>Role</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$user->name}} </td>
									<td>{{$user->email}} </td>
									<td>{{$user->role}} </td>
									<td><a class="sidebar-link-admin" href="{{ route('admin.users.edit', $user->id) }}">{{ __('Edit') }}</a> | <a class="sidebar-link-admin" href="{{ route('admin.users.delete', $user->id) }}">{{ __('Delete') }}</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
