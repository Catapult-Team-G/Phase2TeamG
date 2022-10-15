<!-- resources/views/sweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add New Sweet') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('sweet.confirm') }}" method="POST"> 
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="sweet_name">Sweet</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="sweet_name" id="sweet_name" value="{{ old('sweet_name') }}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="store">Store</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="store" id="store" value="{{ old('store')">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="price">Price</label>
              <input class="border py-2 px-3 text-grey-darkest" type="number" name="price" id="price" value="{{ old('price')">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_path">Image</label>
              <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_path" id="image_path" value="{{ old('image_path')">
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Create
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
