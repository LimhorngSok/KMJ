<div class="row justify-content-center" id={{ isset($type) ? $type:'' }}>
  @include('Layout.destination.destination-box', ['destination' => 'Siem Reap','dest_thumbnail' => 'sr'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Bankok','dest_thumbnail' => 'bk'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Sangapore','dest_thumbnail' => 'sp'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Dubai','dest_thumbnail' => 'db'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Malaysia','dest_thumbnail' => 'ml'.'.jpg'])
  @include('Layout.destination.destination-box', ['destination' => 'Vietnam','dest_thumbnail' => 'vn'.'.jpg'])
</div>
