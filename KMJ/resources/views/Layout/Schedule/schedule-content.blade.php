<section id="schedule-content">
  <div class="container tab-content">
    <div class="tab-pane fade show active" id="tap1">
      @if (empty($schedules))
          @include('Layout.Schedule.none-schedule-list')
      @else
        @foreach ($schedules as $schedule)
          @php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          @endphp
          @include('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => '11:00 AM'])
        @endforeach
      @endif
    </div>
    <div class="tab-pane fade" id="tap2">
      @if (empty($schedules))
          @include('Layout.Schedule.none-schedule-list')
      @else
        @foreach ($schedules as $schedule)
          @php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          @endphp
          @include('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => '11:00 AM'])
        @endforeach
      @endif
    </div>
    <div class="tab-pane fade" id="tap3">
      @if (empty($schedules))
          @include('Layout.Schedule.none-schedule-list')
      @else
        @foreach ($schedules as $schedule)
          @php
            $price = $schedule->price;
            $departing_time = $schedule->departing_time;
            $arriving_time = $schedule->arriving_time;
            $date = $schedule->available_date;
          @endphp
          @include('Layout.Schedule.airplane-schedule-list',['price' => '$ '.$price,'started_time' => $departing_time, 'ended_time' => '11:00 AM'])
        @endforeach
      @endif
    </div>
    <div class="tab-pane fade" id="tap4">

    </div>
    <div class="tab-pane fade" id="tap5">

    </div>
    <div class="tab-pane fade" id="tap6">

    </div>
    <div class="tab-pane fade" id="tap7">

    </div>
    <div class="tab-pane fade" id="tap8">

    </div>
    <div class="tab-pane fade" id="tap9">

    </div>
    <div class="tab-pane fade" id="tap10">

    </div>
    <div class="tab-pane fade" id="tap11">

    </div>
    <div class="tab-pane fade" id="tap12">

    </div>
    <div class="tab-pane fade" id="tap13">

    </div>
    <div class="tab-pane fade" id="tap14">

    </div>
    <div class="tab-pane fade" id="tap15">

  </div>
</section>
