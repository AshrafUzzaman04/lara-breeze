<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="mx-auto mt-5 space-y-5 lg:container">
            <div class="space-y-5 text-center">
                <div class="text-5xl font-extrabold ...">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500">
                      This is Contact Page
                    </span>
                  </div>

                  <div class="font-bold text-slate-700">
                      <button class="px-2 text-white bg-pink-600 rounded"><a href="{{URL::previous()}}">Back</a></button>
                      <button class="px-2 text-white bg-blue-400 rounded"><a href="{{ url("/about") }}">About</a></button>
                  </div>
            </div>

                <form action="{{route('store.contact')}}" method="POST" class="flex flex-col gap-3 mx-auto w-96">
                    @csrf
                    <input type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Your Name"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6  @error('name') ring-red-500 focus:ring-red-500 @enderror">


                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror

                    <textarea name="message" placeholder="Write Your Message..." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 @error('message') ring-red-500 focus:ring-red-500
                    @enderror">{{ old("message") }}</textarea>
                    @error('message')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    @if (session()->get("msg"))
                    <div class="font-bold text-green-400">{{session("msg")}}</div>
                    @endif
                    <input type="submit" class="px-2 py-2 text-white rounded cursor-pointer box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 hover:box-decoration-slice">
                </form>

        </div>
    </body>
</html>
