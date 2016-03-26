@extends('layouts.app')

@section('content')
<!--welcome message-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Welcome  {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div><!--end of welcome message-->

<!--vehicle details-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Details for the Registered Vehicle(s)</div>
                <div class="panel-body">
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
                                <div class="col"><a href="/vehicle/{{ $vehicles->id }}">view</a> | <a href="/vehicle/{{ $vehicles->id }}/edit">edit</a></div>
                            </div>
                        @endforeach
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
