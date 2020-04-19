
@extends('admin::layouts.wrapper')

@section('header', 'Seller Details')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading"><strong>Seller Details</strong></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name:</strong> {{ $user->full_name }}</p> 
                    <p><strong>Email:</strong>: {{ $user->email }}</p> 
                    <p><strong>Email Varifiy:</strong>: @if($user->is_site_visit) <span style="color:green">Varified</span> @else <span style="color:red"> Not Varified</span> @endif</p> 
                    <p><strong>Mobile No:</strong>: {{ $user->userProfile ? $user->userProfile->mobile : "" }}</p> 
					<p><strong>Phone No:</strong>: {{ $user->userProfile ? $user->userProfile->phone : "" }}</p> 
					<p><strong>District:</strong>: {{ $user->userProfile ? $user->userProfile->district : "" }}</p> 
					<p><strong>Address 1:</strong>: {{ $user->userProfile ? $user->userProfile->address1 : "" }}</p> 
					<p><strong>Address 2:</strong>: {{ $user->userProfile ? $user->userProfile->address2 : "" }}</p> 
					<p><strong>Address 3:</strong>: {{ $user->userProfile ? $user->userProfile->address3 : "" }}</p> 
                    <p><strong>Register Ip:</strong>: {{ $user->registered_ip }}</p> 
                    <p><strong>Last Login Ip:</strong>: {{ $user->last_logged_ip }}</p> 
                    
                </div>
            </div>
        </div>
    </div>

   
@endsection
