<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Profile') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
  
            <form class="mb-6" action="{{route('profile.update',$user->id)}}" method="POST">
              @method('put')
              @csrf
              <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Name</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name" value="{{$user->name}}">
              </div>
              <div class="flex flex-col mb-4">
                  <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="age">Age</label>
                  <input type="number" name="age" min="0" max="150" value="{{$user->age}}">
              </div>
              <div class="flex flex-col mb-4">
                  <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="prefecture">Prefecture</label>
                  <select class="form-control" id="prefecture" name="prefecture_id">
                  @foreach ($prefectures as $prefecture)
                      @if($user->prefecture_id === $prefecture->id)
                          <option value="{{$prefecture->id}}" selected>{{$prefecture->prefecture}}</option>
                      @else
                          <option value="{{$prefecture->id}}">{{$prefecture->prefecture}}</option>
                      @endif
                  @endforeach
                  </select>
              </div>
              <div class="flex flex-col mb-4">
                  <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="gender">Gender</label>
                  <div>
                      @if($user->gender === 'male')
                          <input type="radio" name="gender" value="male" checked>??????
                          <input type="radio" name="gender" value="female">??????
                      @else
                          <input type="radio" name="gender" value="male">??????
                          <input type="radio" name="gender" value="female" checked>??????
                      @endif
                  </div>
              </div>
              <div class="flex justify-evenly">
                <a href="{{ url()->previous() }}" class="block text-center w-5/12 py-3 mt-6 font-medium tracking-widest text-black uppercase bg-gray-100 shadow-sm focus:outline-none hover:bg-gray-200 hover:shadow-none">
                  Back
                </a>
                <button type="submit" class="w-5/12 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-orange-800 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                  Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
  