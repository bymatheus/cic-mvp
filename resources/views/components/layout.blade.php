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
  </head>
  <body id="top">
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('dist/images/cic.svg') }}" alt="CIC">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {{ $slot }}

    <script src="{{ asset('.dist/js/all.min.js') }}" type="text/javascript"></script>
  </body>
</html>
