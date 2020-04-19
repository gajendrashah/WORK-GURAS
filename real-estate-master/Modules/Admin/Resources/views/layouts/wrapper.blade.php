@extends('admin::layouts.master')


@section('container')
    <nav class="navbar navbar-inverse navbar-default navbar-static-top">
        <div class="container">
            <div style="width:100%">
                <a class="navbar-brand" href="{{ url('/') }}" style="text-align:center;width:90%;float:left;text-transform: uppercase;">
                    WELCOME TO ADMIN PANEL
                </a>

                <a class="navbar-brand" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="width:10%;float:right;text-align:right;">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }} 
                </form>

            </div>

        </div>
    </nav>
    
    <div class="container-fluid">
        @include('admin::common.sessionFlash')
        <div class="">
            @include('admin::navbar.header')
            <div class="col-md-10">

                @include('admin::common.errors')
                <div class="row">
                    <div class="row col-md-12">
                        <div class="panel panel-@yield('panel-color', 'primary')">
                            <div class="panel-heading"><strong>@yield('header')</strong></div>
                            <div class="panel-body">
                                <div class="col-md-10 col-md-offset-1">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

