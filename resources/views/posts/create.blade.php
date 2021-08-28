@extends('layouts.app')
@section('content')
     
       <a href="/posts" class="btn btn-primary btn-sm">Back<a/>
            
      <h3>Create</h3> 
      {!! Form::open([ 'method' => 'post', 'action' => 'App\Http\Controllers\PostsController@store', 'enctype'=>'multipart/form-data']) !!}
 
      <div class="form-group">
         {{ Form::label('title','Title') }}
         {{ Form::text('title','', ['class' => 'form-control','placeholder' => 'Title']) }}

      </div>
      <div class="form-group">
         {{ Form::label('body','Body') }}
         {{ Form::textarea('body','', ['class' => 'form-control','placeholder' => 'Body']) }}

      </div>
      <div class="form-group">
        
         {{ Form::file('cover_image') }}

      </div>
      {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
     
      {!! Form::close() !!}
     

 

@endsection