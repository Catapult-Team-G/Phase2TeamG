<!-- resources/views/sweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Sweet Index') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">sweet</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">store</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">price</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sweets as $sweet)
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">
                  <h3 class="text-left font-bold text-lg text-grey-dark">{{$sweet->sweet_name}}</h3>
                  <div class="flex">
                  </div>
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                  <h3 class="text-left font-bold text-lg text-grey-dark">{{$sweet->store}}</h3>
                  <div class="flex">
                  </div>
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                  <h3 class="text-left font-bold text-lg text-grey-dark">{{$sweet->price}}円</h3>
                  <div class="flex">
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

