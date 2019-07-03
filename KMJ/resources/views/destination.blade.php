@section('title','Schedule')
@include('Layout.header')
<section id="destination">
	<div class="container">
		<div class="row justify-content-between">
			<h1 class="navbar-brand">Select Your Destination</h1>
			<div class="input-group input-group-sizing-sm ">
			  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
			  <div class="input-group-append">
			    <span class="btn btn-warning fas fa-search"></span>
			  </div>
			</div>
		</div>

		<hr>
    <div class="row justify-content-center">
      @if (isset($type))
          @include("Layout.destination.$type")
      @endif
      {{-- @include("Layout.destination.boat") --}}
  </div>
</section>
@include('Layout.contact-us')
@include('Layout.footer')
@include('Layout.common')
