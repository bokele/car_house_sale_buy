@extends('layouts.app')

@section('content')



<div class=" container mx-auto px-2 lg:pt-3 lg:pb-32">
    <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-white">Estate or property for sale and rent</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Put the potentially record low maximum sea ice extent tihs year
                down to low ice. According to the National Oceanic and
                Atmospheric Administration, Ted, Scambos.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap mt-6 justify-center">

        @if(!empty($estates) && $estates->count())
        @foreach ($estates as $estate)


        <div class="w-full lg:w-3/12 px-4 text-center">

            <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 bg-purple-200">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-purple-900">{{$estate->estate_name}}
                    </div>
                    <p class="text-grey-darker text-base">
                        <ul class="text-justify">
                            <li>Country: {{$estate->address->country->name}}</li>
                            <li>Province: {{$estate->address->state}}</li>
                            <li>City: {{$estate->address->city}}</li>
                            <li class="truncate">Full Address: {{$estate->address->full_address}}</li>
                            <li>Type: {{$estate->type->name}}</li>
                            <li>Space size: {{$estate->estate_space_size}}</li>



                        </ul>
                    </p>
                    <p class="break-normal md:break-all truncate">
                        {{$estate->estate_descriptions}}
                    </p>
                </div>
                <div class="px-6 py-4">
                    <a href="{{ route('register') }}"
                        class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">

                        <i class="fa fa-landmark"></i>&nbsp;Buy Now
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        <a href="#" type="submit"
            class="mt-12 font-bold group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <!-- Heroicon name: lock-closed -->

            </span>
            <i class="fa fa-landmark"></i>&nbsp;More House
        </a>
        @endif

    </div>
</div>




@endsection
