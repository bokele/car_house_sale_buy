@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
    <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-white">Vehicule for sale and rent</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Put the potentially record low maximum sea ice extent tihs year
                down to low ice. According to the National Oceanic and
                Atmospheric Administration, Ted, Scambos.
            </p>
        </div>
    </div>



    <div class="container mx-auto px-2 lg:pt-3 lg:pb-32">
        <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold text-white">House for sale and rent</h2>
                <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                    Put the potentially record low maximum sea ice extent tihs year
                    down to low ice. According to the National Oceanic and
                    Atmospheric Administration, Ted, Scambos.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap mt-6 justify-center">

            @if(!empty($houses) && $houses->count())
            @foreach ($houses as $house)


            <div class="w-full lg:w-3/12 px-4 text-center">

                <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 bg-purple-200">
                    <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        {{-- <div class="font-bold text-xl mb-2 text-purple-900">{{$estate->estate_name}}
                    </div> --}}
                    <p class="text-grey-darker text-base">
                        <ul class="text-justify">
                            <li>Country: {{$house->address->country->name}}</li>
                            <li>Province: {{$house->address->state}}</li>
                            <li>City: {{$house->address->city}}</li>
                            <li class="truncate">Full Address: {{$house->address->full_address}}</li>
                            <li>Type: {{$house->type->name}}</li>
                            <li>Property Space size: {{$house->estate_space_size}}</li>
                            <li>House Space Size: {{$house->house_space_size}}</li>
                            <li> Number of balconies: {{$house->number_of_balconies}} - {{$house->balconies_space_size}}
                            </li>
                            <li>property Space size: </li>
                            <li>Number of bedrooms: {{$house->number_of_bedrooms}}</li>
                            <li>Number of bathrooms: {{$house->number_of_bathrooms}}</li>
                            <li>Number of garages: {{$house->number_of_garages}}</li>
                            <li>pets allowed: @if ($house->pets_allowed == 1)
                                <span class="text-green-600 font-bold">Allowed</span>

                                @else
                                <span class="text-red-600 font-bold">Not Allowed</span>
                                @endif


                            </li>



                        </ul>

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


        <div class="mt-12 font-bold group relative w-full flex justify-center py-2 px-4">
            {{ $car_solds->links() }}
        </div>
        @endif

    </div>
</div>

@endsection
