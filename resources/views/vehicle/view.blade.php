
@extends('layouts.app')

@section('content')

<!-- Modal Dialog -->
<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Parmanently</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirm">Delete</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
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
                   
                        <div class="form-group">
                      
                            <div class="col-md-6 col-md-offset-4">
                                {!! csrf_field() !!}
 
                                {!! Form::open(
                                [
                                    'method' => 'DELETE',
                                    'route' => ['vehicle.destroy', $vehicle->id ]

                                ]) !!}
                                <a  href="{{ route('print.show',$vehicle->id) }}" class="btn btn-primary">
                                  Print
                                </a>
                                <a href="{{ route('vehicle.edit',$vehicle->id) }}" class="btn btn-primary">
                                   Edit
                                </a>
                               
                                <input type="hidden" name="id" value="{{ $vehicle->id }}" />
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Vehicle Detail" data-message="Are you sure you want to delete this Vehicle details ?">
                                    <i class="glyphicon glyphicon-trash"></i> Delete
                                </button>
                                {!! Form::close() !!}

                            
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
