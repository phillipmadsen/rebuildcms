@extends('backend/layout/layout')

@section('topscripts')
    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />

    {!! HTML::script('ckeditor/ckeditor.js') !!}
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
            <li><a href="{!! url(getLang() . '/admin/page') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
            <li class="active">Add Page</li>
        </ol>
        <div class="page-header">
            <h1> Page <small> | Add Page</small> </h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
@endsection

@section('content')
    <div class="col-sm-12">
        <!-- start: PANLEL TABS -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-reorder"></i>
                Panel Tabs
            </div>
            <div class="panel-body">
                <div class="tabbable panel-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel_tab_content"> Article Content </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_seo"> SEO < META > </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_social"> SOCIAL </a> </li>
                        <li>{!! Form::submit('Create', array('class' => 'btn btn-success')) !!}</li>
                    </ul>
                    {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\PageController@store')) !!}
                    <div class="tab-content">

                        <div id="panel_tab_content" class="tab-pane active">


                                    <!-- Title -->
                            <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                                <label class="control-label" for="title">Title</label>

                                <div class="controls">
                                    {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                                    @if ($errors->first('title'))
                                        <span class="help-block">{!! $errors->first('title') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <br>
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
                            <br>
                            <!-- Published -->
                            <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">

                                <div class="controls">
                                    <label class="">{!! Form::checkbox('is_published', 'is_published', [ 'class' => 'flat-blue']) !!} Publish ?</label>
                                    @if ($errors->first('is_published'))
                                        <span class="help-block">{!! $errors->first('is_published') !!}</span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <!-- Form actions -->
                            {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}


                        </div>
                        <div id="panel_tab_seo" class="tab-pane">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto assumenda debitis id minus, nam quidem sit veritatis! Alias consequuntur delectus deleniti doloribus facilis illum labore laudantium modi, nobis quibusdam?

                        </div>
                        <div id="panel_tab_social" class="tab-pane">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam blanditiis, distinctio dolores doloribus eius, eos error excepturi incidunt ipsa ipsam molestiae nulla odio officia quam quas quo ut veniam.
                        </div>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- end: PANLEL TABS -->
    </div>
@endsection

@section('bottomscriptsss')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

    TableData.init();
@endsection