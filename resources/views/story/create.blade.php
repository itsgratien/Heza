@extends('../layouts.index')
@section('title', 'create a story')
@section('content')
<div class="story-single-story">
    <div class="story-show-story">
        <div contenteditable="true" class="show-story-title create-story-title"></div>
        <div class="show-story-image upload-image" contenteditable="false"></div>
        <input type="file" class="input-upload-file">
        <div class="show-story-descriptions pt-3 create-body" contenteditable="true"></div>
    <div class="publish-tags">
            <div class="add-tags">
                <input type="text" class="form-control" placeholder="add tag">
            </div>
            <button type="button" class="publish-btn">Publish</button>
        </div>
    </div>
</div>
@endsection
