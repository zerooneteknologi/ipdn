<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>LSP IPDN | @yield('title', 'Home')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/logo/Logo_IPDN.png')}}" rel="icon">
  <link href="{{ asset('/assets/img/logo/Logo_IPDN.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  @stack('css')

  <!-- =======================================================
  * Template Name: Avilon
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * modifie : sasa nurjaman (sasa nurjaman)
    ======================================================== -->
</head>