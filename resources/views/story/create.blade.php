@extends('layouts.index')
@section('title', 'create a story')
@section('content')
<div class="story-single-story">
    <div class="story-show-story">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
         <div class="show-story-title create-story-title" contenteditable="true"></div>
        <div class="show-story-image upload-image" contenteditable="false">
            <img src="" alt="" class="imageURL">
        </div>
        <input type="file" class="input-upload-file">
        <div class="show-story-descriptions pt-3 create-body" contenteditable="true"></div>
    <div class="publish-tags">
            {{-- <div class="add-tags">
                <input type="text" class="form-control" placeholder="add tag" accept="image/*">
            </div> --}}
            <button type="button" class="publish-btn">Publish</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/js/library.js" type="text/javascript"></script>
<script src="/js/story.js" type="text/javascript"></script>
<script src="/js/upload.js" type="text/javascript"></script>
@endsection
