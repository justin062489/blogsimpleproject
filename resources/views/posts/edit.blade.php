@extends('layouts.app')
@section('content')
     
       <a href="/posts" class="btn btn-primary btn-sm">Back<a/>
            
      <h3>Edit Post</h3> 
      {!! Form::open([ 'method' => 'POST', 'enctype'=>'multipart/form-data', 'action' => ['App\Http\Controllers\PostsController@update',$posts->id]]) !!}
 
      <div class="form-group">
         {{ Form::label('title','Title') }}
         {{ Form::text('title',$posts->title, ['class' => 'form-control','placeholder' => 'Title']) }}

      </div>
      <div class="form-group">
         {{ Form::label('body','Body') }}
         {{ Form::textarea('body',$posts->body, ['class' => 'form-control','placeholder' => 'Body']) }}

      </div>
      <div class="form-group">
         {{ Form::file('cover_image') }}

      </div>
    
      {{Form::hidden('_method', 'PUT') }}
      {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
      {!! Form::close() !!}
     

 

@endsection