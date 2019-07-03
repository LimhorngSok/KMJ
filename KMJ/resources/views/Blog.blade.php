@section('title','Blog - KMJ')
@include('Layout.common')
@include('Layout.header')
<section id="blog">
  <div class="intro text-center">
    <h3 class="align-middle">Blog - Tips, Events, and Recommendation</h3>
  </div>
  <div class="container">
    <div class="row">
      @include('user/blog')
    </div>
  </div>
</section>
@include('Layout.footer')
