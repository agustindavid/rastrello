<div class="sec-1">
  <div class="prev-video-wrapper">
    <iframe  allow="autoplay; fullscreen" allowfullscreen="" class="prev-video" frameborder="0" src="https://player.vimeo.com/video/463608060?autoplay=1&amp;loop=1&amp;background=1&amp;hd=1"></iframe>
  </div>
  <img style="display: none"  alt="" src="@asset('images/logo.svg')">
</div>

<div class="sec-2">
  <div class="title">
    Luxury Meets History
  </div>
  <div class="content-sec-2" style="text-align: justify">
    <p>Panicale has been recognized as one of the “Borghi più belli d’Italia” (Most Beautiful Villages of Italy). It is located in Umbria on the border with Tuscany. Umbria is called the “green heart” of Italy because of its central location and natural landscape. Olive trees fill the fields and line the roads, representing olive oil as an important part of local culture.</p>

    <div class="hidden-text">
      <p>Rastrello is the Italian word for the hand rake used to gently pluck ripe olives from the tree. For us, it is the symbol of family and friends coming together in the olive grove to share the age-old beauty of the harvest.</p>

      <p>Panicale is situated equidistance from Rome and Florence, with a fast train to each city leaving from Chiusi (20 minute drive from Panicale). We cater to the world traveler who wants to experience the “real” Italy, the typical Italian village, away from the big cities. Even though Panicale is small, there are a few wonderful restaurants and cafes to choose from, all of which are only a minute walk from the hotel. Panicale is a close drive to many lovely Umbrian towns, such as Perugia, Assisi, Orvieto, Solomeo, Montefalco, Gubbio and Deruta. With Tuscany so close, it is also very easy to drive to Chiusi, Cortona, Siena, Pienza, Montepulciano and Arezzo.</p>
    </div>
  </div>
  <button class="btn-3" id="show-more"> LEARN MORE </button>
</div>

<div class="sec-10" id="location">
  <button class="btn-location-cercles"><a href="https://rastrello.com/location/"></a></button>
  <button class="btn-location" style="cursor: pointer">
    <a href="https://rastrello.com/location/">
      SEE LOCATION ON MAP
    </a>
  </button>
</div>

<div class="sec-4">
  <div class="title"> Our<br>Rooms </div>
  <div class="content">
    Our extensively renovated 500-year-old Palazzo Grossi shows its historic past yet provides modern amenities. Pelizzari Studio created each room to evoke nature with its calming color palette, warm materials, and custom furniture. Bathroom products from Grown Alchemist and Pomi di Umbria and Italian sheets and towels help each guest feel luxury to its fullest. The day begins with breakfast of local products and ends with a complementary aperitif that you can either enjoy while watching the sunset from the garden or any of the guest rooms' views over Lake Trasimeno.
  </div>
</div>

<style>
  .slick-arrow {
    display: none !important;
  }
</style>

<pre style="display: none">

 @php $texts=print_r(get_field('texts')) @endphp
 @php $texts=get_field('texts') @endphp

 @php

  $url_lang=$_GET['c_lang'];

  if(!($url_lang)) {
    $url_lang='en_US';
  }

  foreach($texts as $key => $lang){
    if($lang['language']==$url_lang) {
      echo $key;
      $curr_lang=$key;
    }
  }

 @endphp

 {{ $texts[$curr_lang]['text_list']['luxury_title'] }}

</pre>

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
    <a href="{{ $get_rooms[0]['link'] }}">See Room</a>
  </div>
</section>

<div  class="sec-3">
  <div  class="text">
    <span >Explore Rastrello</span>
    <div  class="button-row">
      <button  class="btn-location" style="cursor: pointer"> <a href="https://my.matterport.com/show/?m=V2VKeEYwHca" target="_blank"> Take the virtual tour </a> </button>
      <button  class="btn-location" style="cursor: pointer"> <a href="{{ home_url() }}/gallery"> Photo gallery </a> </button>
    </div>
  </div>
</div>

<div  class="sec-6">
  <div  class="title">Unique Experiences in the<br>"Green Heart of Italy"</div>
  <div  class="imgs">
    <div  class="wrapper-1">
      <div  style="background-image: url('@asset('images/olive.jpg')'">
        <a class="overlay-link" href="https://store.rastrello.com"></a>
        <div  class="title">Extra Virgin Olive Oil</div>
      </div>
      <div  style="background-image: url('@asset('images/panicale.jpg')')">
        <a class="overlay-link" href="{{ home_url() }}/panicale"></a>
        <div  class="title">Panicale</div>
      </div>
      <div  style="background-image: url('@asset('images/nearby.jpg')')">
        <a class="overlay-link" href="{{ home_url() }}/experiences"></a>
        <div  class="title">Nearby</div>
      </div>
    </div>
  </div>
</div>

<div class="sec-9">
  <div class="column-1">
    <div class="text">
      <span >Bardi Apartment in Florence</span>
    </div>
    <img alt="" src="@asset('images/apartament-florence.jpg')">
  </div>
  <div class="column-2">
    <div class="text">
      <span >Bardi Apartment in Florence</span>
    </div>
    <p> Located in the Florence’s historic center, our apartment in Palazzo Bardi transports you back to the Renaissance. The sixteenth century art biographer Giorgio Vasari wrote that Filippo Brunelleschi (who also designed Florence's Duomo) designed Palazzo Bardi around 1430. It is probably the first private cortile (courtyard) designed by Brunelleschi, after the public courtyards of Palazzo Bargello and Palazzo Vecchio.</p>
    <button  class="btn-location brwn" style="cursor: pointer" tabindex="0"><a href="{{ get_permalink(198) }}">SEE MORE </a></button>
  </div>
</div>

<div class="my-5 text-center">
  <button class="show-nl btn-3" style="cursor: pointer" tabindex="0">Join our newsletter</button>
</div>

<div class="float-wrap">
  <a href="#" class="float-button accepted-policies open-booking" id="open-booking" >Check availability</a>
</div>
