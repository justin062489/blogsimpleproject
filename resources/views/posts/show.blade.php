@extends('layouts.app')
@section('content')
     
       <a href="/posts" class="btn btn-secondary btn-sm">Back<a/>
        
            <br><br>

            <div class="card mb-2">
              <img
                src="/storage/cover_images/{{ $posts->cover_image }}"
                class="card-img-top" 
                alt="..." style=" width: 100%;
                height:400px; object-fit: contain;
                "
              />
              <div class="card-body">
                <h5 class="card-title">{{ $posts->title }}</h5>
                <p class="card-text">
                 {{$posts->body}}
                </p>
                <p class="card-text">
                  <small class="text-muted">Written on {{ $posts->created_at }}</small>
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                  @if(!Auth::guest())
                  @if(Auth::user()->id == $posts->users_id)
                  <button class="btn btn-success btn-sm mr-1"  onclick="location.href='/posts/{{ $posts->id}}/edit'" href="/posts/{{ $posts->id}}/edit" >Edit</button>
                  {!! Form::open([ 'method' => 'POST', 'action' => ['App\Http\Controllers\PostsController@destroy',$posts->id]]) !!}
                  {{Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm mr-1 btn-block']) }}
                  {!! Form::close() !!}
                  @endif
                  @endif
                </div>
              </div>
              
            </div>

@endsection