@extends('layouts.app')

@section('content')



<!--vehicle details-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Details for the Registered Vehicle(s)</div>
                <div class="flash-message">
                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                    @endif
                  @endforeach
                </div>
                <div class="panel-body">

                <main>
                <div class="container">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </main>
                @if(!$vehicle)
                    <p>Data not available</p>
                @else
                    <div class="container_report">
                        <div class="headedd">
                            <div class="col">Owner name</div>
                            <div class="col">Vehicle manufacturer & type</div>
                            <div class="col">Date registered</div>
                            <div class="col">Action</div>
                        </div>
                         @foreach($vehicle as $vehicles)
                            <div class="table-row">
                                <div class="col">{{ $vehicles->name }}</div>
                                <div class="col">{{ $vehicles->manufacture}} {{$vehicles->type}}</div>
                                <div class="col">{{ $vehicles->year }}</div>
                                <div class="col"><a href="/vehicle/{{ $vehicles->id }}"><span>View</span></a> | <a href="/vehicle/{{ $vehicles->id }}/edit"><span>Edit</span></a></div>
                            </div>
                        @endforeach
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div><!--end of vehicle details-->
@endsection