@extends('layouts.app')

@section('title', 'Show')
    
@section('content')    
    
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Title: {{$post->title}}</h3>
                            <h6 class="card-text">ID: {{$post->id}}</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Content: {{$post->content}}</li>
                            <li class="list-group-item">Slug: {{$post->slug}}</li>                        
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection