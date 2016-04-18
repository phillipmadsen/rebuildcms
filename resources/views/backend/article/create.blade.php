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
                <li><a href="{!! url(getLang() . '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
                <li class="active">Add Article</li>
            </ol>
            <div class="page-header">
            <h1> Article <small> | Add Article</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection
@section('content')
<div class="row">
        <div class="col-sm-12">
        <!-- start: PANLEL TABS -->
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="fa fa-reorder"></i>
                Panel Tabs
                </div>
                <div class="panel-body">
                 {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\ArticleController@store', 'files'=>true)) !!}
                    <div class="tabbable panel-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"> <a data-toggle="tab" href="#article-content"> Article Content </a> </li>
                            <li> <a data-toggle="tab" href="#seo"> SEO </a> </li>
                            <li> <a data-toggle="tab" href="#social"> SOCIAL </a> </li>
                            <li>{!! Form::submit('Create', array('class' => 'btn btn-success')) !!}</li>
                        </ul>
                        <div class="tab-content">
                            <div id="article-content" class="tab-panel">
                                <div class="container-fluid">
                                    <div class="row-fluid">

                                        <div class="col-md-4">
                                            <!-- Image -->
                                            <div class="fileinput fileinput-new control-group {!! $errors->
                                                has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 500px; height: 400px;">
                                                </div>
                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                                                        @if ($errors->first('image'))
                                                        <span class="help-block">{!! $errors->first('image') !!}</span>
                                                        @endif
                                                    </span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>


                                            <hr />

                                            <div class="control-group {!! $errors->has('tag') ? 'has-error' : '' !!}">
                                                <label class="control-label" for="title">Tag</label>
                                                <div class="controls">
                                                    {!! Form::textarea('tag', null, array('class'=>'form-control', 'id' => 'tag', 'placeholder'=>'Tag', 'value'=>Input::old('tag'))) !!}
                                                    @if ($errors->first('tag'))
                                                    <span class="help-block">{!! $errors->first('tag') !!}</span>
                                                    @endif
                                                </div>
                                            </div>




                                        </div>

                                        <div class="col-md-8">
                                            <div class="row">
                                                <!-- Title -->
                                                <div class="col-md-6 control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                                                    <label class="control-label" for="title">Title</label>
                                                    <div class="controls">
                                                        {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                                                        @if ($errors->first('title'))
                                                        <span class="help-block">{!! $errors->first('title') !!}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Category -->
                                                <div class="col-md-4 control-group {!! $errors->has('category') ? 'error' : '' !!}">
                                                    <label class="control-label" for="title">Category</label>
                                                    <div class="controls">
                                                        {!! Form::select('category', $categories, null, array('class' => 'form-control', 'value'=>Input::old('category'))) !!}
                                                        @if ($errors->first('category'))
                                                        <span class="help-block">{!! $errors->first('category') !!}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Published -->
                                                <div class="col-md-2 control-group checkbox-table publishclass {!! $errors->has('is_published') ? 'has-error' : '' !!}">
                                                    <div class="controls">
                                                    {!! Form::checkbox('is_published', 'is_published', ['class' => 'flat-blue']) !!}
                                                        <label class="control-label"> Publish ?</label>
                                                        @if ($errors->first('is_published'))
                                                        <span class="help-block">{!! $errors->first('is_published') !!}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            <!-- Content -->
                                            <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
                                                <label class="control-label" for="title">Content</label>
                                                <div class="controls">
                                                    {!! Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
                                                    @if ($errors->first('content'))
                                                    <span class="help-block">{!! $errors->first('content') !!}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Tag -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="seo" class="tab-pane mh">
                                <!-- Meta Description -->
                                <div class="control-group {!! $errors->has('meta_description') ? 'has-error' : '' !!}">
                                    <label class="control-label" for="title">Meta Description</label>

                                    <div class="controls">
                                        {!! Form::text('meta_description', null, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) !!}
                                        @if ($errors->first('meta_description'))
                                        <span class="help-block">{!! $errors->first('meta_description') !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Meta Keywords -->
                                <div class="control-group {!! $errors->has('meta_keywords') ? 'has-error' : '' !!}">
                                    <label class="control-label" for="title">Meta Keywords</label>

                                    <div class="controls">
                                        {!! Form::textarea('meta_keywords', null, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) !!}
                                        @if ($errors->first('meta_keywords'))
                                        <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div id="social" class="tab-pane mh">
                            <p>comming soon</p>
                            </div>
                        </div>
                        </div>
                    </div>
                {!! Form::close() !!}
                <!-- end: PANLEL TABS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/bootbox/bootbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/jquery-mockjax/jquery.mockjax.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/select2/select2.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/DT_bootstrap.js') !!}"></script>
        <script src="{!! asset('/backend/assets/js/table-data.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/bootstrap/js/bootstrap-tagsinput.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/jquery.slug.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };

        $(document).ready(function () {

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }
        });
    </script>
@endsection
@section('clipinline')
TableData.init();
@endsection
