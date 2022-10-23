<!-- resources/views/tweet/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Show Tweet Detail') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto">
      <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex">
          <div class="flex-initial" style="margin: 0px 10px 0px 0px;">
            <img style="width: 40vw; height: 40vh; object-fit:cover;" src="{{Storage::url($sweet->image_path)}}">
          </div>
          <div class="flex-initial" style="margin: 0px 10px 0px 0px; width: 70%;">
            <div class="font-bold" style="font-size: 2rem">{{$sweet->sweet_name}}</div>
            <div>{{$sweet->store}}</div>
            <hr>
            <div class="font-bold" style="font-size: 1.25rem; padding: 5px 0px;">￥ {{$sweet->price}}</div>
            <div>
              @foreach ($sweet->tags as $tag)
                <span style="padding: 3px; border: 1px solid;">{{$tag->tag}}</span>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div>
        @foreach($sweet->reviews as $review)
          <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin: 20px 0px;">
            <div>
              @php
                $star = $review->rate;
                $starLeft = 5 - $star;
              @endphp
              <span style="color: rgb(255, 187, 0); font-size: 1.25rem;">
              @for($i = 0; $i < $star; $i++)
                ★
              @endfor
              <span style="color: rgb(121, 121, 121);">
              @for($i = 0; $i < $starLeft; $i++)
                ★
              @endfor
            </div>

            <div style="padding: 10px 0px">
              {{$review->review}}
            </div>

            <div>
              {{$review->user->prefecture->prefecture}}　{{$review->user->age}}歳　
              @if($review->user->gender = 'male')
                男性
              @else
                女性
              @endif
            </div>
            {{$review->created_at}}
          </div>
        @endforeach
      </div>

    </div>
  </div>
</x-app-layout>
