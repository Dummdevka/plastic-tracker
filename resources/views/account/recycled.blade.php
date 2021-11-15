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
            <div class="w-96 h-10 text-gray-700 rounded-sm mb-3 flex justify-evenly items-center 
                @if($item->plastic_type->recycle_grade === 'low') bg-red-500 @else bg-green-500 @endif">
                <span>{{ $item->plastic_type->type }}</span>
                <span>{{ $item->weight }}g</span>
            </div>
            @endforeach

        </div>
        </div>
       
    @else
        <p>You have recycled nothing yet!</p>
    @endif

@endsection