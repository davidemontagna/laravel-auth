@extends('layouts.dashboard')


    
@section('content')

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)

                    <tr>          
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a href="{{route("admin.posts.show", $post->id)}}"><button type="button" class="btn btn-info">Show</button></a>
                            <a href="{{route("admin.posts.edit", $post->id)}}"><button type="button" class="mt-2 btn btn-success">Edit</button></a>
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
            </div>
        </div>
    </div>
    
</section>

@endsection