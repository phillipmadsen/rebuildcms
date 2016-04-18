@extends('backend/layout/layout')

@section('topscripts')
<link rel="stylesheet" href="{!! asset('ckeditor/contents.css') !!}" type="text/css" />

 <script type="text/javascript">
        $(document).ready(function () {


        });
    </script>
@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
                <li><a href="{!! langRoute('admin.article.index') !!}"><i class="fa fa-book"></i> Article</a></li>
                <li class="active">Show Article</li>
            </ol>
            <div class="page-header">
                <h1> Article <small> | Show Article</small> </h1>
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
<a href="{!! langRoute('admin.article.index') !!}" class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Back </a>

        <table class="table table-striped table-bordered table-hover table-full-width">
            <tbody>
            <tr>
                <td><strong>Title</strong></td>
                <td>{!! $article->title !!}</td>
            </tr>
            <tr>
                <td><strong>Slug</strong></td>
                <td>{!! $article->slug !!}</td>
            </tr>
            <tr>
                <td><strong>Category</strong></td>
                <td>{!! $article->category[0]->title !!}</td>
            </tr>
            <tr>
                <td><strong>Date Created</strong></td>
                <td>{!! $article->created_at !!}</td>
            </tr>
            <tr>
                <td><strong>Date Updated</strong></td>
                <td>{!! $article->updated_at !!}</td>
            </tr>
            <tr>
                <td><strong>Meta Keywords</strong></td>
                <td>{!! $article->meta_keywords !!}</td>
            </tr>
            <tr>
                <td><strong>Meta Description</strong></td>
                <td>{!! $article->meta_description !!}</td>
            </tr>
            <tr>
                <td><strong>Published</strong></td>
                <td>{!! $article->is_published !!}</td>
            </tr>
            <tr>
                <td><strong>Tag</strong></td>
                <td>
                    @foreach($article->tags as $tag)
                        {!! $tag->name !!},
                    @endforeach
                </td>
            </tr>
            <tr>
                <td><strong>Content</strong></td>
                <td>{!! $article->content !!}</td>
            </tr>
            </tbody>
        </table>


            </div>
        </div>
    </div>
</div>

@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript" src="assets/plugins/bootbox/bootbox.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
        <script src="assets/js/table-data.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

TableData.init();
@endsection