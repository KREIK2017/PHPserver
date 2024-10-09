<header>
    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('blog') }}">Blog</a>
    
    
        @if(Auth::check())
            <span>Вітаємо, {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:blue; cursor:pointer;">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
        </nav>
</header>
