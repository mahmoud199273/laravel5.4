@extends ('layouts.layout')

@section('content')
<div class="col-md-8 blog-main">    
    <main role="main">
            <h1> {{ $post->title }}</h1>
          
            {{$post->body}}
        
    </main>    
</div>      
@endsection