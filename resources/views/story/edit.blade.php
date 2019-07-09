@extends('layouts.index')
@section('title', 'Edit a story')
@section('content')
<div class="story-single-story">
    <div class="story-show-story">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
         <div class="show-story-title create-story-title" contenteditable="true">
             {!! $story->title!!}
         </div>
        @if ($story->image)
        <div class="show-story-image upload-image" contenteditable="false">
                <img src="{!! $story->image !!}" alt="" class="imageURL" style="{display:block;}">
            </div>
        @else
        <div class="show-story-image upload-image" contenteditable="false">
                <img src="" alt="" class="imageURL">
            </div>
        @endif
        <input type="file" class="input-upload-file">
        <div class="show-story-descriptions pt-3 create-body" contenteditable="true">
                {!! $story->story!!}
        </div>
    <div class="publish-tags">
        <input type="hidden" name="anonymous" id="storyID" value="{!! $story->story_id!!}">
        <button type="button" class="update-btns">save changes</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/js/library.js" type="text/javascript"></script>
<script src="/js/story.js" type="text/javascript"></script>
<script src="/js/upload.js" type="text/javascript"></script>
@endsection
