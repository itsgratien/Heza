@extends('layouts.index')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center mx-auto profile-section">
        <div class="user-profile">
        <div class="row">
            <div class="col-md-2">
                <img src="{!! $profile->avatar ? $profile->avatar: 'https://i.ibb.co/c8ZKWhx/ninja-1.png'!!}" alt="" class="avatar">
            </div>
            <div class="col-md-6 pt-2">
                <h5>{!! $profile->name !!}</h5>
                <h5><strong>{!! $profile->handle !!}</strong></h5>
            </div>
        </div>
        </div>
            @if($story->isEmpty())
            <div class="col-md-12">
                <h2>No story found</h2>
            </div>
            @else
            @foreach ($story as $item)
            <div class="user-articles mt-5">
            <div class="col-md-12">
            <div class="user-articles-top-section">
                <div class="articles-avatar">
                <img src="{!! $profile->avatar ? $profile->avatar: 'https://i.ibb.co/c8ZKWhx/ninja-1.png'!!}" alt="">
                </div>
                <div class="articles-infos">
                    {!! $profile->name !!}
                </div>
            </div>
            <div class="user-articles-image pt-2">
                <img src="{!! $item->image ? $item->image : 'https://res.cloudinary.com/heza/image/upload/v1562669012/whatisblog_vtnaim.png'!!}" alt="">
            </div>
            <div class="user-articles-container pt-2">
               <a href="/story/{!! $item->slug !!}">
                    <h1>{!! strip_tags($item->title)!!}</h1>
                <p>{!! substr(strip_tags($item->story), 0, 100)!!}..</p>
               </a>
            </div>
            @if (Auth()->user())
            <div class="user-articles-actions">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="/story/{!! $item->story_id!!}" method="POST">
                             @method('DELETE')
                             @csrf
                             <button type="submit" class="btn-action deleteBtn">
                                 <span class="icofont-long-arrow-right"></span><span>Delete</span>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-1">
                            <a href="/story/{!! $item->slug!!}/edit">
                                <button type="submit" class="btn-action EditBtn">
                                    <span class="icofont-long-arrow-right"></span><span>Edit</span>
                                </button>
                            </a>
                            </div>
                    </div>
                </div>
            @endif
                </div>
            </div>
            @endforeach
            @endif

    </div>
</div>
@endsection
