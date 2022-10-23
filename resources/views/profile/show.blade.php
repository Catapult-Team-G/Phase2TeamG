<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Your Profile') }}
      </h2>
    </x-slot>
  
    <div class="pb-60 bg-orange-100">
    <div class="pt-12 pb-60 bg-orange-100">
      <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <table>
              <tr>
                <td><p class="mb-2 text-grey-darkest">User Name</p></td>
                <td><p class="mb-2 font-bold text-lg text-grey-darkest">{{$user->name}}</p></td>
              </tr>
              <tr>
                <td><p class="mb-2 text-grey-darkest">Email</p></td>
                <td><p class="mb-2 font-bold text-lg text-grey-darkest">{{$user->email}}</p></td>
              </tr>
              <tr>
                <td><p class="mb-2 text-grey-darkest">Created At</p></td>
                <td><p class="mb-2 font-bold text-lg text-grey-darkest">{{$user->created_at}}</p></td>
              </tr>
              <tr>
                <td><p class="mb-2 text-grey-darkest">Age</p></td>
                <td>
                  <p class="mb-2 font-bold text-lg text-grey-darkest">
                    @if(isset($user->age))
                      {{$user->age}}
                    @else
                      Not Set
                    @endif
                  </p>
                </td>
              </tr>
              <tr>
                <td><p class="mb-2 text-grey-darkest">Prefecture</p></td>
                <td>
                  <p class="mb-2 font-bold text-lg text-grey-darkest">
                    @if(isset($user->prefecture))
                      {{$user->prefecture->prefecture}}
                    @else
                      Not Set
                    @endif
                  </p>
                </td>
              </tr>
              <tr>
                <td><p class="mb-2 text-grey-darkest">Gender</p></td>
                <td>
                  <p class="mb-2 font-bold text-lg text-grey-darkest">
                    @if(isset($user->gender))
                      {{$user->gender}}
                    @else
                      Not Set
                    @endif
                  </p>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="text-center">
          <form action="{{ route('profile.edit',$user->id) }}" method="GET">
            <button type="submit" class="px-3 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-orange-800 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Edit Profile
            </button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </x-app-layout>
  