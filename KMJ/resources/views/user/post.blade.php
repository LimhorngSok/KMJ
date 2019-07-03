@extends('user/app')

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('main-content')
<!-- Post Content -->
<div class="col-lg-8">

  <div class="col blog">
    <a href=""><img  class="img-fluid" src="{{Storage::disk('local')->url($post->image)}}" alt=""></a>
    <a href="" class="date">{{ date('F d, Y', strtotime($post->created_at)) }}</a>
    <div class="blog-detail">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <article class="d-flex justify-content-center flex-column ">

        <div class="col-lg-12 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach ($post->categories as $category)
            <h6 class="pull-right" style="margin-right: 20px"><b>Category :
                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></b>
            </h6>
            @endforeach
            <h5>{{$post->title}}</h3>
            <h6>{{$post->subtitle}}</h6>
            {!! htmlspecialchars_decode($post->body) !!}
            {{-- Tag clouds --}}
            <p><b>#Tag : </b>
            @foreach ($post->tags as $tag)
            <a href="{{ route('tag',$tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                                {{ $tag->name }}
                            </small></a></p>
            @endforeach

        <div class="fb-comments"data-href="{{ Request::url() }}" data-numposts="5"></div>
        </div>
      </article>
    </div>
  </div>

</div>

@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection
<div class="col-lg-8">




</div>
