@extends('user/app')
@section('title','KMJ-Blog')
@section('sub-heading','Learn Together and Grow Together')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;

		}
	</style>
@endsection
@section('main-content')
	<!-- Main Content -->

	<div class="col-lg-8">
		@foreach ($posts as $post)
		<div class="col blog">
	    <a href="{{ $post->slug }}"><img id="img" class="img-fluid" src="{{Storage::disk('local')->url($post->image)}}" alt=""></a>
	    <a href="{{ $post->slug }}" class="date">{{ date('F d, Y', strtotime($post->created_at)) }}</a>
	    <div class="blog-detail">
	      <a href="{{ $post->slug }}" class="d-inline-block"><h5>{{$post->title}}</h5></a>
				<p><b>{{ $post->subtitle }}</b></p>
	      <hr class="col-lg-3" align=left>
	      <p>{!!  substr(strip_tags($post->body), 0, 150) !!}</p>
	      <div class="row">

	        <p class="text-secondary"><i class="fas fa-calendar-alt"></i>
						@foreach ($post->categories as $category)
								<a href="{{ route('category',$category->slug) }}">{{ $category->name }} </a>
						@endforeach
					</p>
	        <p class="text-secondary">|</p>
	        <p class="text-secondary"><i class="fas fa-heart"></i>133 Likes</p>
	      </div>
	    </div>
	  </div>
		@endforeach
		<ul class="pager">
					{{ $posts->links() }}
		</ul>
	</div>

	{{-- side bar --}}

	<div class="col-lg-4">
	  <div class="">
	    <h5>Search</h5>
	    <div class="form-group row">
	      <input type="text" class="form-control col" id="exampleDropdownFormEmail2" placeholder="Search">
	      <button type="button" name="button" class="btn btn-warning col-2"><i class="fas fa-search"></i></button>
	    </div>
	  </div>
	  <div class="Category">
	    <h5>Category</h5>
	    <ul class="list-group list-group-flush">
				<a href="{{ route('category','Events') }}"  class="list-group-item text-primary" >Events</a>
				<a href="{{ route('category','Tips') }}"  class="list-group-item text-primary" >Tips</a>
				<a href="{{ route('category','Recommendation') }}"  class="list-group-item text-primary" >Recommendation</a>
				<a href="{{ route('category','Story') }}"  class="list-group-item text-primary" >Story</a>
	    </ul>
	  </div>
	  <div class="subscribe">
	    <h5>Subscribe</h5>
	    <form>
	      <div class="form-group">
	        <label for="exampleDropdownFormEmail2">Email address</label>
	        <input type="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="Full name">
	      </div>
	      <div class="form-group">
	        <label for="exampleDropdownFormPassword2">Email</label>
	        <input type="email" class="form-control" id="exampleDropdownFormPassword2" placeholder="email@example.com">
	      </div>
	      <button type="submit" class="btn btn-warning">Subscribe</button>
	    </form>
	  </div>
	</div>


@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection

	    {{-- <div class="row" id="app">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						@foreach ($posts as $post)
							<a href="{{$post->slug}}">
								<h2>{{$post->title}}</h2>
							</a>

						@endforeach
	            <hr>
	            <!-- Pager -->
	            <ul class="pager">
	                <li class="next">
	                	{{ $posts->links() }}
	                </li>
	            </ul>
	        </div>
					<a href="#"></a>
	    </div> --}}
