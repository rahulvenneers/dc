@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create Store</div>
            
                <div class="panel-body">
              
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="row"><div class="col-md-12">
                  {{Form::open(['url'=>'/store/create'])}}
                        {{ csrf_field() }}
                        <div class="form-group @if ($errors->has('store_name')) has-error @endif">
                            {{Form::label('store_name','Store Name')}}
                            {{Form::text('store_name',null,['class'=>'form_control'])}}
                            @if ($errors->has('store_name')) <p class="help-block">{{ $errors->first('store_name') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('store_name')) has-error @endif">
                            {{Form::label('addr_line1','Address line 1')}}
                            {{Form::text('addr_line1',null,['class'=>'form_control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('addr_line2','Address line 2')}}
                            {{Form::text('addr_line2',null,['class'=>'form_control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('city','City')}}
                            {{Form::text('city',null,['class'=>'form_control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('emirate_id','Emirate')}}
                            {{Form::select('emirate_id',$emirates,null,['class'=>'form_control'])}}
                        </div>
                        {{Form::submit('Register Now')}}
                  {{Form::close()}}
                </div>
            </div>
                </div>
            </div>
    </div>
</div>
@endsection
<style>
    .has-error input{
        border-color:red;
    }
</style>