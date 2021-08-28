@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-success btn-sm mr-1"  onclick="location.href='/posts/create'">Create Post</button>
                    <h3>Your Blog Post</h3>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col">Action</th>
                          
                          
                        </tr>
                      </thead>
                        
                            @foreach ($posts as $post)
                            <tbody>
                               
                          
                              <tr>
                                
                                <td>{{ $post->title }}</td>
                    
                                <td> <div class="btn-group" role="group" aria-label="Basic example"><button class="btn btn-success btn-sm mr-1"  onclick="location.href='/posts/{{ $post->id}}/edit'" >Edit</button>
                                  {!! Form::open([ 'method' => 'POST', 'action' => ['App\Http\Controllers\PostsController@destroy',$post->id]]) !!}
                                  {{Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm mr-1 ']) }}
                                  {!! Form::close() !!}
                                </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                            @else 
                            <p>No Posts Yet.</p>

                            @endif
                        
                        
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
