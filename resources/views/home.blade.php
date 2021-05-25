@extends('layouts.app')


@section('content')
<div class="container">
    @include('includes.ads.top')

    <div class="row">
        <div class="col-md-8">

             @if (Session::get('register_using_code') !== null)
                <div class="alert alert-{{ (Session::get('register_using_code') ? 'success' : 'danger' ) }} alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {!! (Session::pull('register_using_code') ? '<strong>Awesome!</strong> You have successfully signed up with a valid registration code.' : '<strong>Bugger!</strong> Your registration code was not able to be used during signup, so you only have base user privileges.' ) !!}
                </div>
            @endif
            <div class="panel panel-default latest-activity">
                <div class="panel-heading"><p>Latest Posts</p></div>
                <div class="panel-body" style="text-align: center">
                    {{-- <a href="{{ route('forum.topics.create.form') }}" class="btn btn-primary btn-block">Create a post</a>
                    <br /> --}}

                     {{-- @foreach ($posts as $post)
                        <div class="all-post">
                            <h2>
                                {{ $posts-> }}
                            </h2>
                        </div>
                     @endforeach --}}
                   



                    <ul class="list-group">
                        @if (count($posts))
                            @foreach ($posts as $post)
                                <div class="posts">
                                    <a href="">
                                        <img src="{{ $user->avatar }}" alt="{{  }}">
                                    </a>
                                    <a href="">
                                         <h4>{{ $title }}</h4> 
                                         {{-- <span class="badge">{{ $post->count() }}</span> --}}
                                    </a>
                                    <br />
                                    <strong>Created</strong> {{ Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
                                    <br />
                                    <strong>Last post</strong> {{ Carbon\Carbon::createFromTimeStamp(strtotime($post->updated_at))->diffForHumans() }}
                                    @can ('delete', $post)
                                        <form action="" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-link danger-link"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            @endforeach
                        @else
                            <p>You haven't created any posts yet.</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('includes.home.activeMember')
        </div>
    </div>
</div>
@endsection
