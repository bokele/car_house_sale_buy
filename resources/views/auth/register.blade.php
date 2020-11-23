<x-guest-layout>

    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                            <h6 class="text-gray-600 text-sm font-bold">
                                Sign in with
                            </h6>
                        </div>

                        <hr class="mt-6 border-b-1 border-gray-400" />
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="name">{{ __('Name') }}</label>
                                <input type="text" :value="old('name')" name="name" id="name" required autofocus
                                    autocomplete="name"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Fullname" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" :value="old('email')" id="email" required
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" required autocomplete="new-password"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Password" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="password">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" required autocomplete="new-password"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Password" style="transition: all 0.15s ease 0s;" />
                            </div>

                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                    type="submit" style="transition: all 0.15s ease 0s;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                        <div class="flex flex-wrap ">

                            <div class="w-1/2 text-righ">
                                <a href="{{ route('login') }}" class="text-gray-600 mr-4 font-black"><small>
                                        {{ __('Already registered?') }}</small></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            </main>
</x-guest-layout>
