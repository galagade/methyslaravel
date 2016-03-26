
@extends('layouts.app')

@section('content')
{{ Html::script('js/print.js') }}
<!-- Modal Dialog -->
<div class="container">
    <div class="row">
    <div id="print_details">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading">Vehicle Details</div>
                <div class="panel-body form-horizontal">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Full Name</label>

                        <div class="col-md-6">
                            {{ $vehicle->name}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Contact number</label>

                        <div class="col-md-6">
                            {{ $vehicle->contactnumber }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            {{ $vehicle->email}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Manufacturer</label>

                        <div class="col-md-6">
                            {{ $vehicle->manufacture }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Type</label>

                        <div class="col-md-6">
                            {{ $vehicle->type }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Year</label>

                        <div class="col-md-6">
                            {{ $vehicle->year }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Colour</label>

                        <div class="col-md-6">
                            {{ $vehicle->colour }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Mileage</label>

                        <div class="col-md-6">
                             {{ $vehicle->mileage }}
                        </div>
                    </div> 
                </div>

            </div>
        </div>
        </div>
    </div>
</div>
@endsection
