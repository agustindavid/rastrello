@php $texts=get_field('texts') @endphp

@php //print_r($texts) @endphp


@php

$url_lang=$get_current_lang;


foreach($texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="sec-1">
  <div class="prev-video-wrapper">
    <iframe  allow="autoplay; fullscreen" allowfullscreen="" class="prev-video" frameborder="0" src="https://player.vimeo.com/video/463608060?autoplay=1&amp;loop=1&amp;background=1&amp;hd=1"></iframe>
  </div>
  <img style="display: none"  alt="" src="@asset('images/logo.svg')">
</div>

<div class="sec-2">
  <div class="title">
    {{ $texts[$curr_lang]['text_list']['luxury_title'] }}
  </div>
  <div class="content-sec-2" style="text-align: justify">
    <p>
      {!! $texts[$curr_lang]['text_list']['luxury_text'] !!}
    <div class="hidden-text">
      {!! $texts[$curr_lang]['text_list']['luxury_text_hidden'] !!}
    </div>
  </div>
  <button class="btn-3" id="show-more">
    {{ $texts[$curr_lang]['text_list']['luxury_button_text'] }}
  </button>
</div>

<div class="sec-10" id="location">
  <button class="btn-location-cercles"><a href="https://rastrello.com/location/"></a></button>
  <button class="btn-location" style="cursor: pointer">
    <a href="https://rastrello.com/location/">
      {{ $texts[$curr_lang]['text_list']['location_button'] }}
    </a>
  </button>
</div>

<div class="sec-4">
  <div class="title">{!! $texts[$curr_lang]['text_list']['our_rooms_title'] !!}</div>
  <div class="content">
    {!! $texts[$curr_lang]['text_list']['our_rooms_text'] !!}
  </div>
</div>

<style>
  .center .room-slide-arrow {
    top: 35%;
  }

  .center .room-slide-arrow span {
    font-size: 4rem;
  }

  .center .room-slide-arrow {
    left: 40px;
  }

  .center .room-slide-arrow.next {
    right: 40px;
    left: auto;
  }
</style>

<section id="rooms" class="rooms-home" style="  transition: background 1s linear; background-image:url('{{ $get_rooms[0]['featured_img'] }}'); background-size:cover">

  <div style="display:none;">
    @foreach($get_rooms as $room)
    <img src="{{ $room['featured_img'] }}" width="1" height="1"alt="Image 01">
    @endforeach
  </div>

<div class="slider center">
  @foreach($get_rooms as $room)
    <div style="width: 100%" class="text-center room-slide" data-bg="{{ $room['featured_img'] }}" data-href="{{ $room['link'] }}" id="{{ sanitize_title($room['title']) }}">
      <h3 data-slide="{{$loop->iteration}}">{{$room['title']}}</h3>
    </div>
  @endforeach
  </div>
  <div class="view-room-btn">
    <a href="{{ $get_rooms[0]['link'] }}">{{ $texts[$curr_lang]['text_list']['see_room_button'] }}</a>
  </div>
</section>

<div  class="sec-3">
  <div  class="text">
    <span>{{ $texts[$curr_lang]['text_list']['explore_rastrello'] }}</span>
    <div  class="button-row">
      <button  class="btn-location" style="cursor: pointer"> <a href="https://my.matterport.com/show/?m=V2VKeEYwHca" target="_blank">{{ $texts[$curr_lang]['text_list']['virtual_tour_button'] }}</a> </button>
      <button  class="btn-location" style="cursor: pointer"> <a href="{{ home_url() }}/gallery"> {{ $texts[$curr_lang]['text_list']['photo_gallery_button'] }} </a> </button>
    </div>
  </div>
</div>

<div  class="sec-6">
  <div  class="title">{!! $texts[$curr_lang]['text_list']['experiences'] !!}</div>
  <div  class="imgs">
    <div  class="wrapper-1">
      <div  style="background-image: url('@asset('images/olive.jpg')'">
        <a class="overlay-link" href="https://store.rastrello.com"></a>
        <div  class="title">{{ $texts[$curr_lang]['text_list']['olive_oil_square'] }}</div>
      </div>
      <div  style="background-image: url('@asset('images/panicale.jpg')')">
        <a class="overlay-link" href="{{ home_url() }}/panicale"></a>
        <div  class="title">{{ $texts[$curr_lang]['text_list']['panicale_square'] }}</div>
      </div>
      <div  style="background-image: url('@asset('images/nearby.jpg')')">
        <a class="overlay-link" href="{{ home_url() }}/experiences"></a>
        <div  class="title">{{ $texts[$curr_lang]['text_list']['nearby_square'] }}</div>
      </div>
    </div>
  </div>
</div>

<div class="sec-9">
  <div class="column-1">
    <div class="text">
      <span >{{ $texts[$curr_lang]['text_list']['bardi_title'] }}</span>
    </div>
    <img alt="" src="@asset('images/apartament-florence.jpg')">
  </div>
  <div class="column-2">
    <div class="text">
      <span >{{ $texts[$curr_lang]['text_list']['bardi_title'] }}</span>
    </div>
    {!! $texts[$curr_lang]['text_list']['bardi_text'] !!}
    <button  class="btn-location brwn" style="cursor: pointer" tabindex="0"><a href="{{ get_permalink(198) }}">{{ $texts[$curr_lang]['text_list']['apartment_link'] }}</a></button>
  </div>
</div>

<div class="my-5 text-center">
  <button class="show-nl btn-3" style="cursor: pointer" tabindex="0">{{ $texts[$curr_lang]['text_list']['join_newsletter'] }}</button>
</div>

<div class="float-wrap">
  <a href="#" class="float-button accepted-policies open-booking" id="open-booking" >{{ $texts[$curr_lang]['text_list']['check_availability'] }}</a>
</div>
