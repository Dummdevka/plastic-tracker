@extends ('layouts.app')

@section ('content')
<div class="flex items-center flex-col">
    <h2 class="text-gray-700 text-2xl mt-4">Registration</h2>
    
    <form action="{{ route('register') }}" method="post" class="w-4/12 mt-5 flex flex-col justify-center items-center pt-4 rouded-md bg-purple-200 border border-gray-400 rounded-md">
        @csrf
        <div class="w-9/12">
        <div class="mb-2">
        <label for="username" class="block text-gray-800 text-sm">Username:</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" class=" w-full bg-gray-100 border rounded-sm mt-1 @error('username') border-red-500 @enderror">
        @error('username')
            <div class="text-red-500 mt-3">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-2">
        <label for="email" class="block text-gray-800 text-sm">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" class="w-full bg-gray-100 border rounded-sm mt-1 @error('email') border-red-500 @enderror">
        @error('email')
            <div class="text-red-500 mt-3">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-2">
        <label for="password" class="block text-gray-800 text-sm">Password:</label>
        <input type="password" name="password" id="password" class="w-full bg-gray-100 border rounded-sm mt-1 @error('password') border-red-500 @enderror">
        @error('password')
            <div class="text-red-500 mt-3">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-2">
        <label for="rep_password" class="block text-gray-800 text-sm">Repeat password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-gray-100 border rounded-sm mt-1">
        </div>
        <button type="submit" class="border border-gray-500 bg-purple-300 mt-2 mb-3 text-black w-3/12 rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-blue-400 border-purple-700
                                            transition delay-170 duration-200 ease-in-out"> Sign in </button>
        </div>
    </form>
    <span class="text-sm text-blue-500 mt-1"><a href="{{ route('login') }}">Already have an account?</a></span>
</div>
@endsection