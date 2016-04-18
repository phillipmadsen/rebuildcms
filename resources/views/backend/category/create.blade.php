@extends('backend/layout/layout')

@section('topscripts')
<link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />
<script type="text/javascript">
     $(document).ready(function () {
        $("#title").slug();

    });
</script>
@endsection

@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
                <li><a href="{!! url(getLang(). '/admin/category') !!}"><i class="fa fa-list"></i> Category</a></li>
                <li class="active">Add Category</li>
            </ol>
            <div class="page-header">
            <h1> Category <small> | Add Category</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">
            {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\CategoryController@store' )) !!}
            <!-- Title -->
            <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                <label class="control-label" for="title">Category</label>

                <div class="controls">
                    {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Category', 'value'=>Input::old('title'))) !!}
                    @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Form actions -->
            {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
            <a href="{!! url(getLang(). '/admin/category') !!}" class="btn btn-default">&nbsp;Cancel</a>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

@endsection
