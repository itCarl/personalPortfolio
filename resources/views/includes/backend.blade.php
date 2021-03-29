<div class="utility-bar">
    <div class="utility-bar-item">
        {{ Auth::user()->name }}
    </div>
    <div class="utility-bar-item">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="utility-bar-item">
        <a href="{{ url()->previous() }}"> Back </a>
    </div>
</div>        
<div id="debug">
    {{-- dd(get_defined_vars()['__data']) --}}
</div>