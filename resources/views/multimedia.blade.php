@extends('layouts.medac')

@section('titulo')
    <h1>MULTIMEDIA</h1>
@endsection

@section('indice')
    <h2>Inicio > Multimedia</h2>
@endsection

@section('header')
    <header class="menus">
    @endsection

    @section('contenido')
        <div id="audios" class="row flex justify-center my-5">
            <div class="col-xl-4 flex justify-center">
                <audio class="mb-4" controls src="../public/media/audios1.mp3"></audio>
            </div>
            <div class="col-xl-4 flex justify-center">
                <audio class="mb-4" controls src="../public/media/audios2.ogg"></audio>
            </div>
            <div class="col-xl-4 flex justify-center">
                <audio class="mb-4" controls src="../public/media/audios3.wav"></audio>
            </div>
        </div>

        <div id="videos" class="row text-center my-5">
            <div class="col-xl-4 flex justify-center">
                <video class="mb-4" controls type="video/mp4" width="300" height="300" src=../public/media/video1.mp4></video>
            </div>
            <div class="col-xl-4 flex justify-center">
                <video class="mb-4" controls autoplay muted type="video/webm" width="300" height="300" src=../public/media/video2.webm></video>
            </div>
            <div class="col-xl-4 flex justify-center">
                <video controls type="video/ogv" width="300" height="300" src=../public/media/video3.ogv></video>
            </div>
        </div>
    @endsection
