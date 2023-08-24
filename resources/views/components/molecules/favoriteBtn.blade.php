@props([
    'device' => '',
    'favoriteList' => [],
    'code' => '',
    'jobId' => ''
])

@php
    $checked = false;
    /** @var array $favoriteList */
    if(is_array($favoriteList) && count($favoriteList) > 0) {
        /** @var string $code */

        $checked = \App\Util\UtilFavorite::getFavoriteStatus($favoriteList,$code);

    }
@endphp
<div id="favLinkBtn" class="favLinkBtn goApply favoriteBtn">
    <a class="favLink js-favLink {{ $checked ? 'favo' : 'add' }}" data-jmc="{{$code}}" onclick="">
{{--        {!! file_get_contents(public_path('images/common/favoriteIcon.svg')) !!}--}}
        {!! file_get_contents(public_path('images/common/favoriteJobIcon.svg')) !!}
        <div class="favLabel"></div>
    </a>
</div>
<script>
    $('.js-favLink').click(function() {
        // GoogleAnalytics
        ga('send', 'event', '{{ $checked ? 'del' : 'add' }}-favorite-{{$jobId}}{{$device ? '-'.$device : ''}}', 'click', 'fav-btn');
    });
</script>