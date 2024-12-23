@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございました</h2>
    </div>
    <div class="thanks__heading-hidden">
        <h2 class="thanks__logo">Thank you</h2>
    </div>
    <div class="back-to-home">
        <a href="" class="back-to-home__button">HOME</a>
    </div>
</div>
@endsection