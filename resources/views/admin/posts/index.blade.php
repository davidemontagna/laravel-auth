@extends('layouts.app')

@section('title', 'Post')
    
@section('content')

<section>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">thumb</th>
            
        </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)

        <tr>          
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-info">Show</button></a>
                <a href="{{route("posts.edit", $post->id)}}"><button type="button" class="mt-2 btn btn-success">Edit</button></a>
                <form action="{{route("posts.destroy", $post->id)}}" method="POST">
                @csrf
                @method("DELETE")
                
                    <input class="mt-2 btn btn-danger" type="submit" value="Delete">
                </form>
            </td>
           
        </tr>

        @endforeach
        
        </tbody>
    </table>
    <a href="{{route("posts.create", $post->id)}}"><button type="button" class="mb-5 btn btn-dark">Inserisci nuovo</button></a>
</section>

@endsection