<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <title>{{ __('app.app_name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="{{ asset('Regna/img/logo.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <!-- Google Fonts -->

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('Regna/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('Regna/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Regna/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->

    <link href="{{ asset('Regna/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Regna/css/quote.css') }}" rel="stylesheet">

    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">



    <!-- =======================================================
      Site Name: Domina digitalis
      Site URL: https://dominadigitalis.com
      Author: Domina digitalis
    ======================================================= -->
</head>

<body>
