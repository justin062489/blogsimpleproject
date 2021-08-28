@extends('layouts.app')
@section('content')
    <h1> Blog Posts </h1>
     @if(count($posts)>0)
        @foreach ($posts as $post)
        <div class="card mb-3">
         <div class="row g-0">
           <div class="col-md-4">
             <img
               src="/storage/cover_images/{{ $post->cover_image }}"
               class="img-fluid" style="height: 200px;
               width:100%;
              object-fit: contain;"
             />
           </div>
           <div class="col-md-8">
             <div class="card-body">
               <h5 class="card-title"><a href="/posts/{{ $post->id }}"><h3>{{ $post->title }}</h5>
               <p class="card-text">
                 <small class="text-muted">Written on {{ $post->created_at }} by: {{ $post->user->name}}</small>
               </p>
             </div>
           </div>
         </div>
       </div>
            @endforeach
            

     @else 
     <div class="class well"> 
        <h6>No Posts Yet</h6>
     </div>   
     @endif
        

   
 

@endsection