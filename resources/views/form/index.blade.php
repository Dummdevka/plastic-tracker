@extends ('layouts.app')

@section('content')
    

    <form action="{{ route('results') }}" method="post" class="grid place-items-center mt-5 border-t border-gray-500 pt-4">
    @csrf 

    <!-- Select type of plastic object -->
    <div class="w-100 inline-flex justify-center">
    <div class="flex items-center mr-4 mb-4">
    <input type="radio" id="bottle"  name="object">
    <label for="bottle" class="flex items-center cursor-pointer ml-1">
     Plastic bottle</label>
   </div>
    <div class="flex items-center mr-4 mb-4">
    <input type="radio" id="stroke"  name="object">
    <label for="stroke" class="flex items-center cursor-pointer ml-1">
     Stroke</label>
   </div>
    <div class="flex items-center mr-4 mb-4">
    <input type="radio" id="lid"  name="object">
    <label for="lid" class="flex items-center cursor-pointer ml-1">
     Lid</label>
   </div>
    <div class="flex items-center mr-4 mb-4">
    <input type="radio" id="plastic_bag"  name="object">
    <label for="plastic_bag" class="flex items-center cursor-pointer ml-1">
     Plastic bag</label>
   </div>
    <div class="flex items-center mr-4 mb-4">
    <input type="radio" id="another"  name="object">
    <label for="another" class="flex items-center cursor-pointer ml-1">
     Another</label>
   </div>
   </div>

    <!-- Plastic type, weight -->
    <select name="plastic_type" id="plasticType" class="form-select block flow-root w-5/12 text-gray-500 rounded-sm border border-green-500 mb-3">
        <option value="PET">PET</option>
        <option value="HDPE">HDPE</option>
        <option value="V">V</option>
        <option value="LDPE">LDPE</option>
        <option value="PP">PP</option>
        <option value="PS">PS</option>
        <option value="Other">Other</option>
    </select>
    <label for="plasticWeight">Weight (g):</label>
    <input type="number" step=".1" name="plastic_weight" id="plasticWeight" value="0" min="0" class="border border-green-500 p-1 rounded-sm h-7">

    @error('plastic_weight')
      <div class="text-red-500 text-sm">
        {{ $message }}
      </div>
    @enderror
    <!-- Button -->
    <button type="submit" class="border border-gray-500 bg-purple-300 mt-4 text-black w-3/12 rounded-sm p-0.5 cursor-pointer 
                                            hover:bg-purple-400 border-purple-700
                                            transition delay-170 duration-200 ease-in-out">Check</button>
    </form>
@endsection