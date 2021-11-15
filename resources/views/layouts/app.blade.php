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

<a href="{{ route('home') }}"><h1 class="text-gray-700 m-2 text-2xl font-bold"><i class="text-green-500 text-5xl fa fa-pagelines mr-3 ml-2"></i>Track your plastic consume online! </h1></a>
@guest
    <h3 class="inline-block text-bold ml-7 text-2xl text-green-500">Hey, stranger</h3>
    <span class="underline inline-block ml-7 text-blue-500 text-xs"><a href="{{ route('register') }}">You can also create a profile!</a></span>
@endguest

@auth
    <h3 class="inline-block text-bold ml-7 text-2xl text-green-500">Hey, {{ auth()->user()->username }}</h3>

    <!-- Log out -->
    <form action="{{ route('logout') }}" method="post" class="ml-8 inline-block">
        @csrf 
        <button type="submit" class="text-gray-700 border border-gray-700 rounded-sm p-1"> Logout </button>
    </form>

    <!-- My plastic -->
    <form action="{{ route('recycled') }}" method="get" class="ml-8 inline-block">
        @csrf
        <button type="submit" class="text-gray-700 border border-gray-700 rounded-sm p-1"> My plastic </button>
    </form>
@endauth

    @yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.1.0/cash.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>