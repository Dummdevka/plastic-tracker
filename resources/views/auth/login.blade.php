@extends ('layouts.app')

@section ('content')
<div class="flex items-center flex-col">
    <h2 class="text-gray-700 text-2xl mt-4">Log in</h2>
   
    <form action="{{ route('login') }}" method="post" class="w-4/12 mt-5 flex flex-col justify-center items-center pt-4 rouded-md bg-purple-200 border border-gray-400 rounded-md">
        @csrf 
        <div class="w-9/12">
        <div class="mb-2">
        <label for="email" class="block text-gray-800 text-sm">Email:</label>
        <input type="text" name="email"  id="email" class="w-full bg-gray-100 border rounded-sm mt-1 @error('email') border-red-500 @enderror">

        @error('email')
            <div class="text-red-500 text-sm">
            {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-2">
        <label for="password" class="block text-gray-800 text-sm">Password:</label>
        <input type="password" name="password"  id="password" class="w-full bg-gray-100 border rounded-sm mt-1 @error('email') border-red-500 @enderror">

        @error('password')
        <div class="text-red-500 text-sm">
            {{ $message }}
            </div>
        @enderror
        </div>
        <div>
        <input type="checkbox" name="remember" id="remember_me">
        <label class="text-xs text-gray-600" for="remember">Remember me</label>
        </div>
        <button type="submit" class="border border-gray-500 bg-purple-300 mt-2 mb-3 text-black w-3/12 rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-blue-400 border-purple-700
                                            transition delay-170 duration-200 ease-in-out"> Log in </button>
        </div>
    </form>
    <span class="text-sm text-blue-500 mt-1"><a href="{{ route('register') }}">Don't have an account yet?</a></span>

</div>
@endsection