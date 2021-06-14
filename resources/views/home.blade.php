@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{ __('You are logged in!') }}

                    <div>
                        <ul>
                        
                        @permission('view.users') 
                            <li><a href="{{ url('users') }}" >Users</a></li>
                           <li><a href="{{ url('add-permission') }}" >Add permission</a></li>
                        @endpermission
                           
                        
                            
                        @role('user') 
                            <li><a href="{{ url('add-post') }}" >create post</a></li>
                        @endrole

                        @role('reader') 
                            <li><a href="{{ url('read-post') }}" >read post</a></li>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
