@extends ('layouts.app')

@section('content')
    
    @if($items->count())
        <div class="w-full  mt-5 flex justify-center items-center flex-col">
        <div class="mb-5">
        <h2 class="inline text-bold text-gray-700 text-3xl mr-2">You have recycled </h2>
        @if($sum > 100) 
            <h2 class="inline text-bold text-gray-700 text-3xl"> {{ $sum/100 }}kg</h2>
        @else 
            <h2 class="inline text-bold text-gray-700 text-3xl"> {{ $sum }}g</h2>
        @endif
        </div>
        <div>
            @foreach($items as $item)
            <div class="flex w-full">
            <div class="w-96 h-10 text-gray-700 rounded-sm mb-3 flex justify-evenly items-center 
                @if($item->plastic_type->recycle_grade === 'low') bg-red-500 @elseif($item->plastic_type->recycle_grade === 'high') bg-green-500 @else bg-yellow-500 @endif">
                <span>{{ $item->plastic_type->type }}</span>
                <span>{{ $item->weight }}g</span>
            </div>
            <a href="{{ route('delete', ['item_id' => $item->id ]) }}">
            <div class="h-8 w-8 bg-red-400 ml-2 mt-1 rounded-sm text-center">
                <i class="fas fa-trash text-gray-200 mt-2"></i>
            </div>
            </a>
            </div>
            @endforeach

        </div>
        </div>
       
    @else
        <div class="text-center mt-6">
            <p class="text-2xl text-bold text-gray-700">You have recycled nothing so far!</p>
        </div>
    @endif

@endsection