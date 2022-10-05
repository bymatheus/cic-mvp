<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bundle.min.css') }}">
    <!-- Facebook -->
    <meta property="og:title"          content="">
    <meta property="og:description"    content="">
    <meta property="og:site_name"      content="">
    <meta property="og:url"            content="">
    <meta property="og:image"          content="">
    <meta property="og:image:type"     content="image/png">
    <meta property="og:image:width"    content="800">
    <meta property="og:image:height"   content="600">
    <meta property="og:type"           content="website">
    <!-- Twitter -->
    <meta name="twitter:card"          content="summary">
    <meta name="twitter:title"         content="">
    <meta name="twitter:description"   content="">
    <meta name="twitter:image"         content="">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dist/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dist/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dist/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dist/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dist/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('dist/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('dist/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('dist/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/images/favicon/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body id="top">
    @includeWhen(!$key && !$dashboard, 'components.navbar.ladingpage')
    @includeWhen(!$key && $dashboard, 'components.navbar.dashboard')

    @if($dashboard)
      <main class="dashboard container-fluid">
      @include('components.template.dashboard')
    @endif

    {{ $slot }}

    @if($dashboard)
      </main>

      @include('components.offcanvas.notification')
      @include('components.modal.logout')
    @endif

    <script src="{{ asset('dist/js/all.min.js') }}" type="text/javascript"></script>
  </body>
</html>
