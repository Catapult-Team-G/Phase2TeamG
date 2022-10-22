<!-- resources/views/sweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Sweet Index') }}
    </h2>
  </x-slot>

  <div class="py-12">

    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">

      @foreach ($sweets as $sweet)
        <a href="{{route('sweet.show',$sweet->id)}}" style="margin: 50px;">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding: 20px;">
            <div class="flex">
              <div class="flex-initial" style="margin: 0px 10px 0px 0px;">
                <img style="width: 25vw; height: 30vh; object-fit:cover;" src="{{Storage::url($sweet->image_path)}}">
              </div>
              <div class="flex-initial" style="margin: 0px 10px 0px 0px; width: 70%;">
                <div class="font-bold" style="font-size: 2rem">{{$sweet->sweet_name}}</div>
                <div>{{$sweet->store}}</div>
                <hr>
                <div>￥ {{$sweet->price}}</div>
                <div>{{$sweet->tags}}</div>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</x-app-layout>

