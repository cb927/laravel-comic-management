@extends('layouts.frontend')
@section('content')
<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('./assets/img/bg0.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>コミック貸出・返却管理</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="section">
        <div class="container tim-container">
            <div id="contentAreas" class="cd-section">
                <div class="content__top">
                    <a href="./lend.html">
                        <img src="./assets/img/lending.png" alt="">
                    </a>
                    <a href="./return.html">
                        <img src="./assets/img/return.png" alt="">
                    </a>
                    <a href="./checkout.html">
                        <img src="./assets/img/checkout.png" alt="">
                    </a>
                </div>
                <div class="content__bottom">
                    <a href="./room_list.html">
                        <img src="./assets/img/on-loan.png" alt="">
                    </a>
                    <a href="#">
                        <img src="./assets/img/history.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection