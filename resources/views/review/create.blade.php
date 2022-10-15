<!-- resources/views/review/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Review') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('review.store') }}" method="POST"> <!-- actionいじる-->
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="sweet">Sweet</label>
              <select class="form-control" id="sweet" name="sweet_id">
              @foreach ($sweets as $sweet)
                <option value="{{$sweet->id}}">{{$sweet->sweet_name}}</option>
              @endforeach
              </select>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="review">Review</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="review" id="review">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="rate">Rate</label>
              <input class="border py-2 px-3 text-grey-darkest" type="number" name="rate" id="rate" min="1" max="5">
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Post Review
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

