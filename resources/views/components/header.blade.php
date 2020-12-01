<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <style>
      body{
        font-family: "Raleway", sans-serif;
        color:"white"}

      a {
        color: 	#ffcc95;
      }
    </style>

    <a href="{{ route('welcome') }}">ALA</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    @if (Route::has('login'))
            @auth
              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">UserHome</a>
            @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
    @endif
</div>
