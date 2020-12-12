@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Quotes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-primary" id="backbtn" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row" id="showdiv">
        <div class="col-xs-12 col-sm-12 col-md-12" id="title">
            <div class="form-group animate__animated animate__bounceIn" id="showname">
                <strong>Name:</strong>
                {{ $blog->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" id="description">
            <div class="form-group animate__animated animate__bounceIn" id="showquote">
                <strong><i class="far fa-comments"></i> Quote:</strong>
                {{ $blog->description }}
            </div>
        </div>
    </div>
@endsection