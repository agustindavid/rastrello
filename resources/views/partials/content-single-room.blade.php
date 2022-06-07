@php $page_texts=get_field('page_texts', 'option') @endphp
@php $room_texts=get_field('room_texts') @endphp


@php

//print_r($page_texts);

$url_lang=$get_current_lang;

foreach($room_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

foreach($page_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="row no-margin room-wrap-row">
  <div class="col-lg-6 room-details">
    <h1 class="title">
      {{ the_title() }}
    </h1>
    <div class="room-desc">
      {!! $room_texts[$curr_lang]['text_list']['room_description'] !!}
    </div>
    <div>
{{--       <pre>
      @php
        print_r($get_features)
      @endphp
      </pre>
 --}}
      @php $features = $get_features['features'] @endphp
      <div class="room-features-wrap">
        @foreach($get_features['bed_type_quantity'] as $beds)
        <div class="feature">
          <img src="@asset('images/bed.svg')" alt="">
          <p>{{ $beds['bed_type_quantity'] }}</p>
        </div>
        @endforeach
        @foreach ($features as $feature)
        <div class="feature">
          <img src="@asset('images/' . $feature["value"] . '.svg')" alt="">
          <p>{{ $page_texts[$curr_lang]['text_list'][$feature["value"] ] }} </p>
        </div>
        @endforeach
      </div>
    </div>
    @if(get_field('custom_link'))
      <a href="{{ get_field('custom_link') }}" class="btn btn-3 -primary book-link" target="_blank">{{ $page_texts[$curr_lang]['text_list']['book_now_text'] }}</a>
    @else
      <button id="open-booking" class="btn btn-3 -primary open-booking">{{ $page_texts[$curr_lang]['text_list']['book_now_text'] }}</button>
    @endif
  </div>
  <div class="no-padding col-lg-6 flex-grow-1">
    <div class="room-slide">
      @foreach($get_images as $image)
        <img src="{{ $image['image']['sizes']['room-slide'] }}" alt="">
      @endforeach
    </div>
  </div>
</div>

@if(get_field('virtual_tour_link'))

<div class="tour-content" style="background-image: url('@asset('images/tour.jpg')')">
  <div class="tour-content-title">
    <h3>{{ $page_texts[$curr_lang]['text_list']['virtual_tour_title'] }}</h3>
  </div>
  <div class="tour-content-button"><a href="{{ get_field('virtual_tour_link') }}" target="_blank">{{ $page_texts[$curr_lang]['text_list']['virtual_tour_cta'] }}</a>
  </div>
</div>

@endif

<div class="other-rooms">
  <div class="title prata">{{ $page_texts[$curr_lang]['text_list']['rooms_title'] }}</div>
  <div class="rooms-gallery">
    @foreach($get_single_rooms as $room)

    <div class="room" style="background-image: url('{{ $room['featured_img'] }}');">
      <a href="{{ $room['link'] }}"></a>
      <div class="prata">{{ $room['title'] }} </div>
    </div>
    @endforeach
  </div>
</div>
