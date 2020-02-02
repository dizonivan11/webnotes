@extends('layouts.app')
@section('title', 'Home')
@section('css', URL::asset('css/home.css'))
@section('js', URL::asset('js/home.js'))

@section('content')
<?= session("user") ?>
@endsection