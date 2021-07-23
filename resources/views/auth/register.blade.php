@extends('layouts.app')

@section('content')

  <div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
      <form action="{{ route('register') }}" method='post'> 
        @csrf
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name"
                   class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror' value=''>
        </div>
        @error('name')
          <div class='text-red-500 mt-2 text-sm'>
            {{ $message }}
          </div>
        @enderror

        <div class="mb-4">
          <label for="usermane" class="sr-only">Username</label>
          <input  type="text" name="username" id="username" placeholder="Username"
                  class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror' value=''>
        </div>
        @error('username')
          <div class='text-red-500 mt-2 text-sm'>
            {{ $message }}
          </div>
        @enderror

        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input  type="text" name="email" id="email" placeholder="Your email"
                  class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror' value=''>
        </div>
        @error('email')
          <div class='text-red-500 mt-2 text-sm'>
            {{ $message }}
          </div>
        @enderror

        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input  type="text" name="password" id="password" placeholder="Password"
                  class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror' value=''>
        </div>
        @error('password')
          <div class='text-red-500 mt-2 text-sm'>
            {{ $message }}
          </div>
        @enderror

        <div class="mb-4">
          <label for="password_confirmation" class="sr-only">Password again</label>
          <input  type="text" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" 
                  class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror' value=''>
        </div>
        @error('password_confirmation')
          <div class='text-red-500 mt-2 text-sm'>
            {{ $message }}
          </div>
        @enderror

        <div>
          <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
        </div>
      </form>
    </div>
  </div>

@endsection
