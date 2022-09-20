<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
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
        {{ $slot }}
    </body>
</html>
