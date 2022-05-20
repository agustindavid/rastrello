@php $gallery=get_field('gallery') @endphp

<div class="gallery">
  @foreach ($gallery as $image)
    @if($loop->first)
      <div class="gal-row">
        <div>
          <a href="{{ $image['image']['url'] }}" data-lightbox="rastrello"><img src="{{ $image['image']['sizes']['gallery-thumb'] }}" alt=""></a>
        </div>
    @elseif($loop->iteration%3 == 0 && !($loop->last))
        <div>
          <a href="{{ $image['image']['url'] }}" data-lightbox="rastrello"><img src="{{ $image['image']['sizes']['gallery-thumb'] }}" alt=""></a>
        </div>
      </div>
      <div class="gal-row">
    @elseif($loop->last && !($loop->iteration%3 == 0))
        <div>
          <a href="{{ $image['image']['url'] }}" data-lightbox="rastrello"><img src="{{ $image['image']['sizes']['gallery-thumb'] }}" alt=""></a>
        </div>
      </div>
    @else
        <div>
          <a href="{{ $image['image']['url'] }}" data-lightbox="rastrello"><img src="{{ $image['image']['sizes']['gallery-thumb'] }}" alt=""></a>
        </div>
    @endif
  @endforeach
</div>
