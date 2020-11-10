@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="post.html">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                    </a>
                    <img src="{{ asset('storage/'.$article->image)}}" style="height: 400px" alt="">
                    <p class="post-meta">{{$article->content}}</p>
                </div>
                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="{{route('admin.posts.edit', $article->slug)}}"">Edit &rarr;</a>
                </div>
            </div>
        </div>
    </div>
@endsection