@php $press_texts=get_field('press_texts') @endphp

@php

$url_lang=$get_current_lang;

foreach($press_texts as $key => $lang){
  if($lang['language']==$url_lang) {
    //echo $key;
    $curr_lang=$key;
  }
}

@endphp

<div class="press-banner" style="background-image: url('{{ get_the_post_thumbnail_url() }}')"></div>
<div class="division"></div>
<div class="press-content">
  <div class="title">
    <h3>{{ $press_texts[$curr_lang]['text_list']['title'] }}</h3>
    <div class="press-summary">
      <div>{{ $press_texts[$curr_lang]['text_list']['contact_title'] }}<br>{{ $press_texts[$curr_lang]['text_list']['contact_person'] }}
      <br> <br>{{ $press_texts[$curr_lang]['text_list']['person_email'] }}<br>{{ $press_texts[$curr_lang]['text_list']['person_phones'] }}</div>
    </div>
  </div>
  <div class="press-table">
    {{-- <div class="press-row" style="padding: 0;">
      <div class="press-title-group" tabindex="0">
        <div class="press-title"><a href="{{home_url()}}/hotel-fact-sheet">{{ $press_texts[$curr_lang]['text_list']['fact_sheet_page'] }}</a></div>
      </div>
    </div>
    <div class="press-row" style="padding: 0;">
      <div class="press-title-group" tabindex="0">
        <div class="press-title"> <a href="{{home_url()}}/meet-our-general-manager/">{{ $press_texts[$curr_lang]['text_list']['general_manager_page'] }}</a></div>
      </div>
    </div>
    <div class="press-row" style="padding: 0;">
      <div class="press-title-group" tabindex="0">
        <div class="press-title"><a href="{{home_url()}}/a-welcome-note-from-the-owner">{{ $press_texts[$curr_lang]['text_list']['owner_welcome_page'] }}</a></div>
      </div>
    </div>
    <div class="press-row" style="padding: 0;">
      <div class="press-title-group">
        <div class="press-title"><a href="https://firebasestorage.googleapis.com/v0/b/il-rastrello-6a0ef.appspot.com/o/Press%2FRASTRELLO-BROCHURE-DIGITAL%20.pdf?alt=media&token=b42c23a8-8fa0-45f5-a187-21c1ff64b0e5" target="_blank">{{ $press_texts[$curr_lang]['text_list']['brochure_text'] }}</a></div>
      </div>
    </div> --}}
    @foreach($press_texts[$curr_lang]['text_list']['pages'] as $page)
      <div class="press-row" style="padding: 0;">
        <div class="press-title-group" tabindex="0">
          <div class="press-title"> <a href="{{ $page['page']['url'] }}">{{ $page['page']['title'] }}</a></div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="title mb-title">
    <h3>{{ $press_texts[$curr_lang]['text_list']['articles_title'] }}</h3>
  </div>

  @php $articles=get_field('articles') @endphp

  @foreach($articles as $article)
    @if($loop->iteration%2 == 0)
      <div class="press-row">
        <div class="press-title-group">
          <div class="press-date"> {{ $article['date']}} </div>
          <div class="press-title"><a target="_blank"  href="{{ $article['link']}}">{{ $article['title']}}</a></div>
        </div>
      </div>
    </div>
    @elseif($loop->iteration%2 != 0)
    <div class="press-table press-row-wrap">
      <div class="press-row">
        <div class="press-title-group">
          <div class="press-date"> {{ $article['date']}} </div>
          <div class="press-title"><a target="_blank"  href="{{ $article['link']}}">{{ $article['title']}}</a></div>
        </div>
      </div>
    @elseif($loop->iteration%2 != 0 && $loop->last)
        <div class="press-row">
          <div class="press-title-group">
            <div class="press-date"> {{ $article['date']}} </div>
            <div class="press-title"><a target="_blank"  href="{{ $article['link']}}">{{ $article['title']}}</a></div>
          </div>
        </div>
      </div>
    @endif
  @endforeach
</div>
