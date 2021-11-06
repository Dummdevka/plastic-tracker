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

    <!-- Back to the main page -->
    <button type="button" class="border border-gray-500 bg-purple-300 mt-4 text-black w-3/12 rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-purple-400 border-purple-700
                                            transition delay-170 duration-200 ease-in-out"> <a href="{{ route('main') }}">Back to the main page</a> </button>
    </div>
@endsection
