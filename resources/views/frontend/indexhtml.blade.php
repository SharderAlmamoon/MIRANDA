@extends('frontend.mastertemplate.mastertemplate')
@section('maincontent')
        <!-- SLIDER -->
        @include('frontend.includes.heroslider')

        <!-- EDITORSPIC -->
        @include('frontend.includes.editorspictrend')

        <!-- majerthumbnail -->
        @include('frontend.includes.majerthumbnail')

        <!-- politics and business -->
        @include('frontend.includes.politicsbusiness')

        <!-- recent&popular -->
        @include('frontend.includes.recentpopular')

        <!-- SUBSCRIBER -->
        @include('frontend.includes.subcriber')
@endsection
