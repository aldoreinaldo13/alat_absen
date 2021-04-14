<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <title>@yield('title', 'Stisla Laravel') &mdash; {{ env('APP_NAME') }}</title>
    @include('includes.css')

    @yield('styles')
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          @include('layouts.topnav')
        </nav>
        <div class="main-sidebar">
          @include('layouts.sidebar')
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
          @yield('content')
        </div>
        <footer class="main-footer">
          @include('layouts.footer')
        </footer>
      </div>
    </div>

    @include('includes.js')
    @yield('scripts')
  </body>
</html>
