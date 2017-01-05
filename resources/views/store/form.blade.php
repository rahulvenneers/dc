@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create Store</div>
            
                <div class="panel-body">
                  {{Form::open()}}
                  {{Form::close()}}
                </div>
            </div>
    </div>
</div>
@endsection