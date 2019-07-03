@php
  $loc = $type.'/schedule';
@endphp
<div class="col-lg-3 text-center justify-content-center" onclick="location.href='{{$loc}}'")}}">
  <img src="{{ asset('img/'.$dest_thumbnail) }}" class="img-destination" alt="...">
  <h3>{{ isset($destination) ? $destination:"" }}</h3>
</div>
