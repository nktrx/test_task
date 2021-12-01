@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{mix('css/app.css')}}" type="text/css" media="screen"/>

@endsection

@section('content_header')
    <div class="d-flex justify-content-between">
        <h2>Position</h2>
    </div>
@endsection

@section('content')
    <div  class="card col-6 custom-content">
        <div class="card-header">
            Create position
        </div>
        <div class="card-body">
            <form method="post" action="{{route('positions.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group countable">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <input maxlength="256" value="{{ old('name') }}" type="text" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif">
                        <span class="invalid-feedback">{{$errors->first('name')}}</span>
                    </div>
                    <small id="name-meta" class="text-gray fa-pull-right text-right d-block">0/256</small>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button  class="btn btn-primary ml-2">Save</button>
                    <a href="{{route('positions.datatables')}}" class="btn btn-secondary" >Cancel</a>
                </div>
            </form>

        </div>
    </div>
@endsection
