<div  class="bg-restaurant"></div>
<div  class="">
  <p  class="my title-restaurant" style="font-family: 'Prata', serif !important;">Cucina &amp; Giardino</p>
</div>
<div  class="dividier-restaurant"></div>
<div  class="my content-info-restaurant">
  <p  class="info-restaurant">Rastrello Cucina &amp; Giardino is the perfect place to enjoy the historic center of Panicale, while overlooking Lake Trasimeno.</p><p  class="info-restaurant">Opened in September 2020, we have a panoramic garden terrace with breathtaking views as well as an intimate indoor space for the colder months.</p><p  class="info-restaurant">Our goal is to offer a unique place for Panicalesi, guests, and tourists alike. A setting where you can enjoy an aperitivo or a dinner in a fascinating environment.</p><p  class="info-restaurant">The menu created by Chef Nicola is closely linked to the territory that surrounds us and its products. Precisely for this reason, the menu follows the seasonality of each ingredient, including what is harvested daily from our gardens.</p>
</div>
<div  class="content-restaurant my">
  <div  class="grid-restaurant my">
    <div  class="column-restaurant">
      <p  class="opening-restaurant">OPENING HOURS</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant">Every day from 5pm until 11pm </td>
        </tr>
        <tr >
          <td  class="td-restaurant hour-restarant">Sunday BRUNCH from 9am to 2pm</td>
        </tr>
      </table>
      <p  class="opening-restaurant">RESERVATION PHONE</p>
      <table  class="table-restaurant">
        <tr >
          <td  class="td-restaurant hour-restarant"><a  href="tel:+390758379175"> +39 075 8379175</a></td>
        </tr>
      </table>
      <p  class="opening-restaurant">Closed January 15th until March 15th </p>
      <div  class="my">
        <a  class="btn -primary" href="https://api.whatsapp.com/send?phone=393534126302&amp;text=Hi%20Cucina%20%26%20Giardino!%20I%20would%20like%20to%20reserve%20a%20table.%20Do%20you%20have%20availability%3F" target="_blank">RESERVE A TABLE</a><br><br>
        <a  class="btn -primary" href="{{home_url()}}/wp-content/uploads/2022/05/menu-dec.pdf" target="_blank">VIEW OUR MONTHLY MENU</a><br><br>
        <a  class="btn -primary" href="" target="_blank">VIEW OUR SUNDAY MENU</a>
      </div>
    </div>
    <div  class="column-restaurant">
      <div  class="slideshow-container">
        @php $images=get_field('images') @endphp
        <div class="room-slide">
          @foreach($images as $image)
            <img src="{{ $image['image']['sizes']['room-slide'] }}" alt="">
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
