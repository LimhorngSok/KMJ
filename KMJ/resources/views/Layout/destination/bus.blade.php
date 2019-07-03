<div class="row justify-content-center" id={{ isset($type) ? $type:'' }}>
  @include('Layout.destination.destination-box', ['destination' => 'Siem Reap','dest_thumbnail' => 'sr'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Kompong Som','dest_thumbnail' => 'kps'.'.jpeg'])
  @include('Layout.destination.destination-box', ['destination' => 'Kompot','dest_thumbnail' => 'kp'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Koh Kong','dest_thumbnail' => 'kk'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Mondulkiri','dest_thumbnail' => 'mdk'.'.jpg'])
</div>
