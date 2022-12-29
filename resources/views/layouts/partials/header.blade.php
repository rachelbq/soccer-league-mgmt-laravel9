<!-- header / nav -->
<div id="page" class=" w-full" max-height>

<header>

    <div id="header" class=" w-full bg-gradient-to-b from-gray-700 to-gray-800 h-28 flex flex-row">
        <div class="basis-1/4"></div>
        <div id="logo" class="basis-3/4">
            <a href="{{route('home');}}">
            <img class="mx-auto" src="{{url('images/logobis.png');}}" width="225px" height="225px" alt="JWSL'2023"></a>
        </div>
            <div class="basis-1/4"></div>
    </div>

    <nav class="bg-white text-gray-400 flex font-bold justify-between px-2 py-2">
        <ul class="flex justify-around w-3/12">
            <li class="hover:text-orange-400"><a href="{{ route('clubs.index') }}"><img src="{{url('images/ico.png');}}">CLUBS</a></li>
            <li class="hover:text-orange-400"><a href="{{ route('players.index') }}"><img src="{{url('images/ico.png');}}">PLAYERS/TEAM</a></li>
        </ul>
        <ul class="flex justify-around w-3/12">
            <li class="hover:text-orange-400"><a href="{{ route('competitions.index') }}"><img src="{{url('images/ico.png');}}">MATCHES</a></li>
            <li class="hover:text-orange-400"><a href="{{ route('home') }}"><img src="{{url('images/ico.png');}}">home</a></li>
        </ul>
    </nav>

</header>