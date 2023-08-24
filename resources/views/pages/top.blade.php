@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="topMvSlider">
        <x-mainVisual />
    </div>

    <div id="videoList">
        <x-contentBox.contentMovie />
    </div>

    @if(isset($fEntSearchAxisData))
        <div id="topSearchBox">
            <x-searchBox :fEntSearchAxisData="$fEntSearchAxisData" :fEntConfig="$page->fEntConfig" />
        </div>
    @endif

    @if($page->fEntConfig->frontendSettings['isDispRecommendJob']??null)
        <div id="topRecommendJob">
            <x-recommendJob.index />
        </div>
    @endif

    @if($page->fEntConfig->frontendSettings['isDispLatestJob']??null)
{{--        <div id="topLatestJob">--}}
{{--            <x-latestJob.oneLineStyle />--}}
{{--        </div>--}}
    @endif

    <div id="bannerHome">
        <x-linkBoxAbout />
    </div>

    <div id="template01" class="topContentBox">
{{--        <x-contentBox.contentMovie />--}}
        <x-contentBox.contentJobs />
        <x-contentBox.contentBeginners />
        <x-contentBox.contentPoint />
{{--        <x-contentBox.contentFlow />--}}
    </div>


@endsection
