@extends('master')
@section('title','Données transmises dans le formulaire : ')
@section('content')
    <main class="container justify-content-center">
        <strong>Name :</strong> {{ $data->name }} <br>
        <strong>Email :</strong> {{ $data->email }}<br>
        <strong>Phone :</strong> {{ $data->phone }}<br>
        <strong>Message :</strong> {{ $data->message }}
    </main>
@endsection