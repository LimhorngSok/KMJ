<div class="row justify-content-center" id={{ isset($type) ? $type:'home' }}>
  @include('Layout.destination.destination-box', ['destination' => 'Siem Reap','dest_thumbnail' => 'sr'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Kompong Som','dest_thumbnail' => 'kps'.'.jpeg'])
  @include('Layout.destination.destination-box', ['destination' => 'Kompot','dest_thumbnail' => 'kp'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Koh Kong','dest_thumbnail' => 'kk'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Mondulkiri','dest_thumbnail' => 'mdk'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'V-Kirirom','dest_thumbnail' => 'vkr'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Bankok','dest_thumbnail' => 'bk'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Sangapore','dest_thumbnail' => 'sp'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Dubai','dest_thumbnail' => 'db'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Malaysia','dest_thumbnail' => 'ml'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Vietnam','dest_thumbnail' => 'vn'.'.jpg'])
</div>
