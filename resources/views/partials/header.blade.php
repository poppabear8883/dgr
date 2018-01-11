<dg-header>
    <div slot="nav">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/services">Services</a>
        </li>
        <li>
            <a href="/galleries">Galleries</a>
        </li>
        <li>
            <a href="/testimonies">Testimonies</a>
        </li>
        <li>
            <a href="/giveaways">Giveaways</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
        @guest
            <li>
                <a href="/login">Login</a>
            </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->profile->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </div>
</dg-header>