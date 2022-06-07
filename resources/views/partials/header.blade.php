@php
  global $wp;
@endphp

@php $page_texts=get_field('page_texts', 'option') @endphp


@php

//print_r($page_texts);
$url_lang=$get_current_lang;

//echo $url_lang;

foreach($page_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div  class="banner-bt -top" style="display: none">
  <div  class="start">
    <div >
      <img  alt="" src="@asset('images/telephone-handle-silhouette.svg')">
      <a  class="content" href="tel:+393534126302" style="color: white"> &#x202D;+39 353 4126302</a>
      <a  class="content" href="tel:+39075837246" style="color: white"> +39 075 837246</a>
    </div>
    <div >
      <img  alt="" src="@asset('images/black-back-closed-envelope-shape.svg')">
      <a  class="content" href="mailto:info@rastrello.com" style="color: white">INFO@RASTRELLO.COM</a>
    </div>
  </div>
  <div  class="end">
    <img  alt="" src="@asset('images/maps-and-flags.svg')">
    <a  class="content" href="https://www.google.com/maps/place/Rastrello+Boutique+Hotel/@43.0294284,12.0982164,19z/data=!3m1!4b1!4m5!3m4!1s0x132eadd3d0e97531:0x2b88e2f8cd44b8dd!8m2!3d43.0294284!4d12.0987636" style="color: white" target="_blank">VIA GROSSI 10, PANICALE (PG), ITALY</a>
  </div>
</div>
<div class="top-nav special {{ is_front_page() ? 'transparent' : ''}}">
  <div  class="menu">
    <div  class="bar1"></div>
    <div  class="bar2"></div>
    <div  class="bar3"></div>
  </div>
  <div  class="langs">
    <div class="selected-lang">
      @switch($get_current_lang)
          @case('en_EN')
              EN
              @break
          @case('es_ES')
              ES
            @break
          @case('it_IT')
              IT
            @break
          @default
            EN

      @endswitch
      </div>
    <div class="lang-options">
      <span><a href="{{ home_url( $wp->request ) }}/?c_lang=en_US">English</a></span>
      <span><a href="{{ home_url( $wp->request ) }}/?c_lang=it_IT">Italiano</a></span>
      <span>Deutsch</span>
      <span><a href="{{ home_url( $wp->request ) }}/?c_lang=es_ES">Español</a></span>
      <span>Português</span>
      <span>Français</span>
    </div>
  </div>
  <div  class="scrolled-icon" style="cursor: pointer;"><a href="{{home_url()}}"><img  alt="" class="logo" src="@asset('images/logo-black.svg')"><img  alt="" class="logo logo-white" src="@asset('images/logo.svg')">
  </a></div>
  <div class="right-menu-wrap">
    <div class="right-menu-items">
      <a target="_blank" href="https://rastrelloevoo.com/">Evoo</a>
      <a href="{{ home_url() }}/contact">{{ $page_texts[$curr_lang]['text_list']['contact_text'] }}</a>
    </div>
    <div class="right-menu-btn">
      <button id="open-booking"  class="btn-3 open-booking text-uppercase">{{ $page_texts[$curr_lang]['text_list']['book_now_text'] }}</button>
    </div>
  </div>
</div>

<div  class="modal">
  <div  class="actions">
    <div> <a href="{{ home_url() }}">{{ $page_texts[$curr_lang]['text_list']['home_menu'] }}</a></div>
    <div ><a href="{{ home_url() }}/location">{{ $page_texts[$curr_lang]['text_list']['location_menu'] }}</a></div>
    <div> <a href="{{ home_url() }}/#rooms">{{ $page_texts[$curr_lang]['text_list']['rooms_menu'] }}</a></div>
    <div ><a href="{{ home_url() }}/restaurant">{{ $page_texts[$curr_lang]['text_list']['restaurant_menu'] }}</a></div>
    <div > <a target="_blank" href="https://rastrelloevoo.com/">{{ $page_texts[$curr_lang]['text_list']['oil_menu'] }}</a></div>
    <div ><a href="{{ home_url() }}/gallery">{{ $page_texts[$curr_lang]['text_list']['gallery_menu'] }}</a></div>
  </div>
  <div  class="booking">
    <img  alt="" class="logo" src="@asset('images/logo.svg')">
    <div class="image">
      <img src="" alt="">
    </div>
    <button  id="open-booking" class="btn-3 open-booking text-uppercase ">{{ $page_texts[$curr_lang]['text_list']['book_now_text'] }}</button>
  </div>
</div>

<div  class="modal-nl">
  <div class="close" id="hide-nl">x</div>
  <script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=VYQX8r"></script>
  <div class="klaviyo-form-SJ8sb8"></div>
</div>

<div class="modal-space booking-modal">
  <div class="modal2">
    <div class="close" id="close-booking">x</div>
    <div class="title prata">{{ $page_texts[$curr_lang]['text_list']['booking_modal_title'] }}</div>
    <div class="division"></div>
    <form id="widget_link" novalidate="" target="_blank" action="https://be.synxis.com?" class="ng-untouched ng-pristine ng-valid">
      <input name="table" type="hidden" value="hotels">
      <input name="hotel_id" type="hidden" value="2849">
      <input name="listing_id" type="hidden" value="137532">
      <input name="mode" type="hidden" value="command">
      <input name="command" type="hidden" value="pleasewait">
      <input name="nextcommand" type="hidden" value="roomsearch">
      <input id="access_code" name="access_code" size="8" type="hidden" value="">
      <input id="num_babies" name="num_babies" type="hidden" value="0">
      <input name="theme" type="hidden" value="SBE_Rastrello_V2">
      <input name="chain" type="hidden" value="5154">
      <input name="config" type="hidden" value="SBE_Rastrello_V2">
      <input name="currency" type="hidden" value="EUR">
      <input name="hotel" type="hidden" value="36552">
      <input name="locale" type="hidden" value="en-US">
      <input name="rooms" type="hidden" value="1">
      <div class="inputs">
        <div class="input-box">
          <img src="@asset('images/check.svg')" alt="">
          <label for="from">
            <div class="prata">{{ $page_texts[$curr_lang]['text_list']['check_in'] }}</div>
            <input type="text" id="from" name="from">
          </label>
        </div>
        <div class="input-box">
          <img src="@asset('images/check.svg')" alt="">
          <label for="to">
            <div>{{ $page_texts[$curr_lang]['text_list']['check_out'] }}</div>
            <input type="text" id="to" name="to">
          </label>
        </div>
      </div>



    <div class="division"></div>
    <div class="inputs">
      <div class="input-box">
        <img alt="" src="@asset('images/adult.svg')">
        <label for="num_adults">
          <div class="prata">{{ $page_texts[$curr_lang]['text_list']['adults_field'] }}</div>
          <select id="adult" name="adult">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </label>
      </div>
      <div class="input-box">
        <img alt="" src="@asset('images/children.svg')">
        <label for="num_adults">
          <div class="prata">{{ $page_texts[$curr_lang]['text_list']['childrens_field'] }}</div>
          <select id="child" name="child">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </label>
      </div>
    </div>
    <div class="division"></div>
    <a target="_blank" id="book-cta" href="https://be.synxis.com/?adult=2&arrive=2022-04-04&chain=5154&child=3&command=pleasewait&config=SBE_Rastrello_V2&currency=EUR&depart=2022-04-08&hotel=36552&hotel_id=2849&level=hotel&listing_id=137532&locale=en-US&mode=command&nextcommand=roomsearch&num_babies=0&rooms=1&table=hotels&theme=SBE_Rastrello_V2">{{ $page_texts[$curr_lang]['text_list']['modal_cta_text'] }}</a>

  </form>
</div>
</div>
