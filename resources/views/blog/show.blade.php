@extends('layouts.app')
@section('content')

<main class="container-fluid">
   
        <div class="container-fluid">
            <article>
                <div class="jumbtron">
                    <h1>{{$blog->title}} </h1>
                </div>
                <div class="col-sm-8 col-sm-offest-2">
                    <p>{{$blog -> body}}</p>
                </div>    
            </article>  
        </div>
</main>



@endsection