@extends ('layouts.app')

@section('content')
    <!-- Recycle info block -->
    <div class="w-full flex items-center flex-col">        
    
        <div class="
            @if($rec_grade === 'high') bg-green-200 border-green-500
            @elseif($rec_grade === 'semi') bg-yellow-200 border-yellow-500
            @else bg-red-200 border-red-500
            @endif
            flex items-center flex-col  w-8/12 border  p-3 rounded-lg mt-6">

            <!-- Non-recycable -->
            @if($rec_grade === 'low')
                <i class="block text-8xl text-red-600 mb-3 fa fa-ban"></i>

            @else
                <i class=" 
                {{ $rec_grade == 'high' ? 'text-green-600' : 'text-yellow-600' }}
                block fa fa-recycle text-8xl mb-3"></i>
            @endif
                <h2 class="block text-2xl font-bold mb-3"> {{ $plastic_type }} ({{ $acronym }})</h2>
                <p class="block text-gray-700 text-center">{{ $rec_data }}</p>
        </div>
    <!-- Calculations -->
    @if($rec_grade !== 'low')
        <p>Your plastic would be approximately {{ round($tshirt_part/160,2) }}% of a T-shirt!</p>
            <div class="flex justify-center w-full mt-5 mb-5">
            <!-- <span class="w-1 flex items-center fa-stack text-gray-300 text-9xl ">
                <i class="block fa-stack-1x fas fa-couch "></i>
                <i class=" block fa-stack-1x fas fa-couch text-blue-300 overflow-hidden w-20"></i>
            </span> -->
            <span class="w-1 mr-40 flex items-center fa-stack text-gray-300 text-9xl -mt-10 -mb-5">
                <i class="fa-stack-1x fas fa-tshirt "></i>
                <i style="width: {{ $tshirt_part }}px;" class="fa-stack-1x text-left fas fa-tshirt text-blue-300 overflow-hidden "></i>
            </span>
            </div>
    @endif

    @auth
    <!-- Add to my plastic button -->

    <form action="{{ route('recycled', ['acronym'=>$acronym, 'weight'=>$tshirt_part/20]) }}" method="post">
    @csrf
    <button type="submit" class="border border-gray-500 bg-blue-300 mt-4 text-black rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-blue-400 border-blue-700
                                            transition delay-170 duration-200 ease-in-out"><a href="{{ route('recycled') }}"> </a>Add </button>
    </form>
    @endauth
    <!-- Back to the main page -->
    <button type="button" class="border border-gray-500 bg-purple-300 mt-4 text-black w-3/12 rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-purple-400 border-purple-700
                                            transition delay-170 duration-200 ease-in-out"> <a href="{{ route('home') }}">Back to the main page</a> </button>
    </div>

    </div>
@endsection


