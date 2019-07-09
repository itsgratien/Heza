@extends('layouts.index')
@section('title', 'welcome')
@section('content')
<div class="text-center app-title">
 <div>
     Open Source Blogging Application
 </div>
</div>
<div class="top-category-story">
    <div class="container">
    <div class="row rows-top">
        <div class="col-md-4">
            <div class="cat-story">
            <div class="cat-story-image">
                <img src="https://cdn.pixabay.com/photo/2015/06/22/08/37/children-817365_1280.jpg"
                alt="image">
            </div>
            <div class="cat-story-infos">
                <div class="cat-user-info">
                    <a href="#">
                    <img src="https://cdn.pixabay.com/photo/2015/06/22/08/37/children-817365_1280.jpg" alt="">
                    <span>Gratian</span>
                    </a>
                </div>
            </div>
            <div class="cat-story-description">
                    <p>How i learned to code without a computer</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="cat-story">
                    <div class="cat-story-image">
                        <img src="https://cdn.pixabay.com/photo/2015/01/15/16/17/hands-600497_1280.jpg"
                        alt="image">
                    </div>
                    <div class="cat-story-infos">
                        <div class="cat-user-info">
                            <a href="#">
                            <img src="https://cdn.pixabay.com/photo/2015/06/22/08/37/children-817365_1280.jpg" alt="">
                            <span>Gratian</span>
                            </a>
                        </div>
                    </div>
                    <div class="cat-story-description">
                            <p>How i learned to code without a computer</p>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cat-story">
                    <div class="cat-story-image">
                        <img src="https://cdn.pixabay.com/photo/2018/07/21/19/51/horse-3553269_1280.jpg"
                        alt="image">
                    </div>
                    <div class="cat-story-infos">
                        <div class="cat-user-info">
                            <a href="#">
                            <img src="https://cdn.pixabay.com/photo/2015/06/22/08/37/children-817365_1280.jpg" alt="">
                            <span>Gratian</span>
                            </a>
                        </div>
                    </div>
                    <div class="cat-story-description">
                            <p>How i learned to code without a computer</p>
                        </div>
                </div>
                </div>
    </div>
    </div>
</div>
<div class="bodys">
        <div class="container">
                <div class="row justify-content-center">
                    @if($data->isEmpty() && $users->isEmpty())
                    <div class="text-center p-5">
                        Sorry the requested result could not be found.
                    </div>
                    @else
                    @foreach ($data as $item)
                     @foreach ($users as $owners)
                        @if ($owners->id == $item->owner_id)
                        <div class="col-md-4">
                                <div class="story-image">
                                  <img src="{!! $item->image ? $item->image: 'https://res.cloudinary.com/heza/image/upload/v1562669012/whatisblog_vtnaim.png'!!}" alt="">
                                </div>
                                 <div class="story-begin">
                                <div class="story-title">
                                        {!! strip_tags(substr($item->title, 0,40))!!}
                                    </div>
                                        <div class="story-footers mt-2">
                                            <div class="story-created-by">
                                                <div class="story-avatar">
                                                <img src="{!! $owners->avatar ? $owners->avatar : 'https://i.ibb.co/c8ZKWhx/ninja-1.png'!!}" alt="">
                                                </div>
                                                <div class="story-date-username">
                                                    <a href="/{!! $owners->handle!!}">
                                                       <p>{!! $owners->name !!}</p>
                                                    </a>
                                                    <p> <strong>Created on</strong> {!! $item->created_at !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                              </div>
                        @endif
                     @endforeach
                    @endforeach
                    @endif
                </div>
              </div>
</div>
@endsection
