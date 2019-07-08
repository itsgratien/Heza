@extends('../layouts.index')
@section('title', 'read story')
@section('content')
<div class="story-single-story">
    <div class="story-show-story">
        <div class="show-story-title">
            {!! $story->title!!}
        </div>
        <div class="show-who-created-story mt-3 pb-3">
            <div class="avatar-img">
            <img src="{!! $story->avatar ? $story->avatar : 'https://i.ibb.co/c8ZKWhx/ninja-1.png'!!}" alt="">
            </div>
            <div class="user-info-date">
                <div>{!! $story->name!!}</div>
            <div>{!! $story->handle !!}</div>
            </div>
        </div>
        @if($story->image)
        <div class="show-story-image">
            <img src="{!! $story->image !!}" alt="">
        </div>
        @endif
        <div class="show-story-descriptions pt-3">
         {!! $story->story!!}
        </div>
    </div>
</div>
@endsection
