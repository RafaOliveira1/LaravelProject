@extends('layouts.app')
@section('content')

<main class="container-fluid">
   
    <div class="container-fluid">
        <div class="jumbtron">
            <h1>Latest Blogs</h1>
        </div>
        <div class="col-sm-12">
            @foreach($blogs as $blog )
                <article>
                    <h2><a href="{{action('App\Http\Controllers\BlogController@show', [$blog->id])}} ">{{ $blog->title}}</a></h2>
                    <p>{{$blog -> body}}</p>
                </article>
            @endforeach
        </div>      
   </div>
</main>



@endsection