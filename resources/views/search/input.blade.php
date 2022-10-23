<!-- resources/views/search/input.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search Review') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('search.result') }}" method="GET">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="prefecture">Prefecture</label>
                <select class="form-control" id="prefecture" name="prefecture_id">
                    <option value="noprefecture" selected>選択してください</option>
                @foreach ($prefectures as $prefecture)
                    <option value="{{$prefecture->id}}">{{$prefecture->prefecture}}</option>
                @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="nogender" selected>選択してください</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="age">Age</label>
                <select class="form-control" id="age" name="age">
                    <option value="noage" selected>選択してください</option>
                    <option value=0>0-9</option>
                    <option value=10>10-19</option>
                    <option value=20>20-29</option>
                    <option value=30>30-39</option>
                    <option value=40>40-49</option>
                    <option value=50>50-59</option>
                    <option value=60>60-69</option>
                    <option value=70>70-79</option>
                    <option value=80>80-89</option>
                </select>
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-orange-800 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Search
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

