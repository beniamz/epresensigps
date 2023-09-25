@extends('layouts.presensi')
@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">E - Hadir</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->
    <style>
        .webcam-capture,
        .webcam-capture video{
            display:  inline-block;
            width: 100% !important;
            margin: auto;
            height: auto !important;
            border-radius: 15px;
        }
        #map { height: 200px; }

        .jam-digital-malasngoding {
 
        background-color: #27272783;
        position: absolute;
        top: 65px;
        right: 12px;
        z-index: 9999;
        width: 150px;
        border-radius: 10px;
        padding: 5px;
        }
        .jam-digital-malasngoding p {
        color: #fff;
        font-size: 14px;
        text-align: left;
        margin-top: 0;
        margin-bottom: 0;
        }

    </style>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

@endsection

@section('content')
<div class="row" style="margin-top: 60px">
    <div class="col">
        <p>
          <div class="alert-warning">
            <p>
            <b>Maaf, hari ini Anda tidak mempunyai jadual atau mungkin hari ini libur atau mungkin bisa jadi oleh operator madrasah anda belum dibuatkan jam kerja.</b>
            <br>
            Silahkan hubungi Tata Usaha atau Operator Madrasah.</p>
          </div>
        </p>
    </div>
</div>
@endsection
