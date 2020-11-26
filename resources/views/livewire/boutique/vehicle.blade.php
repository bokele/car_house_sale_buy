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
    <div class="flex flex-wrap mt-12 justify-center">

        @if(!empty($car_solds) && $car_solds->count())
        @foreach ($car_solds as $car_sold)


        <div class="w-full lg:w-3/12 px-4 text-center">

            <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 bg-purple-200">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-purple-900">{{$car_sold->car->model->brand}}
                    </div>
                    <p class="text-grey-darker text-base">
                        <ul class="text-justify">
                            <li class="font-bold capitalize text-purple-900">Price: ${{$car_sold->max_price}}</li>
                            <li class="font-bold capitalize text-purple-900">Model: {{$car_sold->car->model->model}}
                            </li>
                            <li>Type: {{$car_sold->car->model->vehicle_type}} </li>
                            <li>Fabrication year:{{$car_sold->car->model->year}}</li>
                            <li>Mileage: {{$car_sold->car->mileage}}</li>
                            <li>Color:<button class="ring-0"
                                    style="background-color: {{$car_sold->car->color}};">Color</button>
                            </li>
                            <li class="capitalize">Fuel: {{$car_sold->car->vehicle_fuel_type}}</li>
                            <li class="capitalize">Gear Box: {{$car_sold->car->vehicle_gear_box_type}}</li>
                            <li>Seat Number: {{$car_sold->car->vehicle_seat_count}}</li>
                            <li>Door Number: {{$car_sold->car->vehicle_door_count}}</li>


                        </ul>

                    </p>
                    <p class="break-normal md:break-all truncate">
                        {{$car_sold->car->description_of_feature}}
                    </p>

                </div>
                <div class="px-6 py-4">
                    @if ($car_sold->car->status == 'sold')

                    <a href="{{ route('register') }}"
                        class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">

                        <i class="fa fa-shopping-basket"></i>&nbsp;Buy Now
                    </a>

                    @else
                    <a href="{{ route('register') }}"
                        class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                        type="button" style="transition: all .15s ease">

                        <i class="fa fa-truck-moving"></i>&nbsp;Rent Now
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-12 font-bold group relative w-full flex justify-center py-2 px-4">
            {{ $car_solds->links() }}
        </div>
        @endif
    </div>
</div> @endsection
