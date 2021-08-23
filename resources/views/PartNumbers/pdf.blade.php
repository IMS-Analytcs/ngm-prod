<!DOCTYPE HTML>
<html lang=”pt-br”>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <!-- CSS only -->
    <link type="text/css" href="{{ env('BOOTSTRAP_DOMPDF') }}" rel="stylesheet" />

</head>

<body>
    <div class="container">
        @php
        echo $partnumber->sow;
        @endphp
    </div>
</body>

</html>
