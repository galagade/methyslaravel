@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Vehicle Details</div>
                <div class="panel-body ">

                        {!! csrf_field() !!}{!! Form::open([
                                'method' => 'patch',
                                'route' => ['vehicle.update', $vehicle->id ],
                                'class'=> 'form-horizontal'

                        ])!!}
                                
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           
                            {!! Form::label('name', 'Full Name', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">

                                {!! Form::text('name', $vehicle->name, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in first and last name'
                                ]) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                           
                            {!! Form::label('contact_number', 'Contact number', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">
                                {!! Form::text('contact_number', $vehicle->contactnumber, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in a contact number'
                                ]) !!}
                                @if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           
                            {!! Form::label('email', 'E-Mail Address', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">
                                
                                {!! Form::email('email', $vehicle->email, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in E-Mail Address'
                                ]) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('manufacturer') ? ' has-error' : '' }}">
                            {!! Form::label('manufacturer', 'Manufacturer', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">
                                
                                {!! Form::text('manufacturer', $vehicle->manufacture, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in a car Manufacturer'
                                ]) !!}
                                @if ($errors->has('manufacturer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manufacturer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            {!! Form::label('type', 'Type', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}

                            <div class="col-md-6">
                                
                                {!! Form::text('type', $vehicle->type, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in a car type'
                                ]) !!}
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                           
                            {!! Form::label('year', 'Year', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">
                                
                                {!! Form::number('year', $vehicle->year, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in car manufacturer year'
                                ]) !!}
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('colour') ? ' has-error' : '' }}">
                            
                            {!! Form::label('colour', 'Colour', [
                                    'class' => 'col-md-4 control-label' 
                            ]) !!}
                            <div class="col-md-6">
                                
                                {!! Form::text('colour', $vehicle->colour, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in a car colour'
                                ]) !!}
                                @if ($errors->has('colour'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colour') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mileage') ? ' has-error' : '' }}">
                            
                            {!! Form::label('mileage', 'Mileage', [
                                    'class' => 'col-md-4 control-label' 
                                ]) !!}
                            <div class="col-md-6">
                                {!! Form::number('mileage', $vehicle->mileage, [
                                    'class' => 'form-control', 
                                    'placeholder'=>'Fill in car mileage'
                                ]) !!}
                                @if ($errors->has('mileage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mileage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('vehicle.index') }}" class="btn btn-primary">
                                   Cancel
                                </a>
                            </div>
                        
                        </div>
      
                        {!! Form::close() !!}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
