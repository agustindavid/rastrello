<div  class="bg-restaurant"></div>
<div  class="">
  <p  class="my title-restaurant" style="font-family: 'Prata', serif !important;">Contact</p>
</div>
<div  class="dividier-restaurant"></div>
<div  class="my content-info-restaurant" style="display:none">
  <p  class="info-restaurant">Rastrello Cucina &amp; Giardino is the perfect place to enjoy the historic center of Panicale, while overlooking Lake Trasimeno.</p><p  class="info-restaurant">Opened in September 2020, we have a panoramic garden terrace with breathtaking views as well as an intimate indoor space for the colder months.</p><p  class="info-restaurant">Our goal is to offer a unique place for Panicalesi, guests, and tourists alike. A setting where you can enjoy an aperitivo or a dinner in a fascinating environment.</p><p  class="info-restaurant">The menu created by Chef Nicola is closely linked to the territory that surrounds us and its products. Precisely for this reason, the menu follows the seasonality of each ingredient, including what is harvested daily from our gardens.</p>
</div>
<div  class="content-restaurant my">
  <div  class="grid-restaurant my">
    <div  class="column-restaurant">
      <p  class="opening-restaurant">EMAIL</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant"> <a href="info@rastrello.com">INFO@RASTRELLO.COM</a></td>
        </tr>
      </table>
      <p  class="opening-restaurant">PHONE NUMBERS</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant"><a  href="tel:+39075837246">+39 075 837246</a></td>
        </tr>
        <tr >
          <td  class="td-restaurant hour-restarant"><a  href="tel:393534126302">+39 353 4126302</a></td>
        </tr>
      </table>
    </div>
    <div  class="column-restaurant">
      <div  class="slideshow-container">
        @php $images=get_field('images') @endphp
        <div class="room-slide contact-slide">
          @foreach($images as $image)
            <img src="{{ $image['image']['sizes']['room-slide'] }}" alt="">
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
