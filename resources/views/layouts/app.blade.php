<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Plastic tracker</title>
</head>
<body class="bg-gray-200">

    <h1 class="text-gray-700 m-2 text-2xl font-bold"><i class="text-green-500 text-5xl fa fa-pagelines mr-3 ml-2"></i>Track your plastic consume online! </h1>
    @yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.1.0/cash.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>