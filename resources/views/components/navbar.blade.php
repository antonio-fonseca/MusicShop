@if (Route::currentRouteName() == 'home')
    <div class="container mb-0">
        @guest
        <div class="row mt-2 mb-0 justify-content-end">
            <h1 class="text-1 text-center font-welcome mb-0">WELCOME to</h1>
        </div>
        @endguest
        @auth
        <div class="row mt-2 mb-0 justify-content-end">
            
            
            <div class="col-12 col-lg-7 d-flex justify-content-end">
                <h1 class="navbar-link-user text-end mb-0">
                    ciao {{Auth::user()->name}}
                </h1>
                <span class="d-flex justify-content-end text-light">
                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <small class="font-text pb-0 pe-1 log-out">log out</small><i class="fa-solid fa-arrow-right-from-bracket text-white pt-1 log-out"></i>
                    </a>
                    <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">@csrf</form>
                </span>
            </div>
        </div>
        @endauth

        
    </div>
        <ul class="col-11 col-md-10 col-lg-8 d-flex flex-column mx-auto mt-0">
            <li>
                <a href="{{route('home')}}"class="rounded-end navbar-div bg-1">
                    <h1 class="navbar-link">musicshop  .  com</h1>
                </a>
            </li>
            <li>
                <a href="{{route('product.create')}}"class="rounded-end navbar-div bg-2">
                    <h1 class="navbar-link">crea_prodotto</h1>
                </a>
            </li>
            <li>
                <a href="{{route('product.index')}}"class="rounded-end navbar-div bg-3">
                    <h1 class="navbar-link">collezione</h1>
                </a>
            </li>
            <li>
                <a href="{{route('contact')}}"class="rounded-end navbar-div bg-6">
                    <h1 class="navbar-link">lavora_con_noi</h1>
                </a>
            </li>
            @guest
            <div class="row justify-content-end">
                
                <div class="col-7">
                    <li>
                        <a href="{{route('login')}}"class="rounded-end navbar-div bg-4">
                            <h1 class="navbar-link">accedi</h1>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('register')}}"class="rounded-end navbar-div bg-5">
                            <h1 class="navbar-link">registrati</h1>
                        </a>
                    </li>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center icon_disco">
                    <img src="/media/logo-bianco.png" class="logo" alt="">
                </div>
            </div>
                @endguest

                {{-- quando è logato! --}}
                @auth
                <div class="row justify-content-end">
                    <div class="col-5 d-flex justify-content-center align-items-center">
                        <img src="/media/logo-bianco.png" class="logo mt-3" alt="">
                    </div>
                </div>
                @endauth
            
            
        </ul>
@else
        {{-- NAVBAR NO HOMEPAGE --}}
        <ul class="d-flex justify-content-evenly justify-content-lg-evenly mt-2">
            <li class="col-2 col-sm-2">
                <a href="{{route('home')}}"class="rounded-end navbar-div-2 bg-1">
                    <h1 class="navbar-link-2">musicshop .com</h1>
                    
                </a>
            </li>
            <li class="col-2 col-sm-2">
                <a href="{{route('product.create')}}"class="rounded-end navbar-div-2 bg-2">
                    <h1 class="navbar-link-2">crea <br> prodotto</h1>
                </a>
            </li>
            
            <li class="col-2 col-sm-2">
                <a href="{{route('product.index')}}"class="rounded-end navbar-div-2 bg-3">
                    <h1 class="navbar-link-2">collezione</h1>
                </a>
            </li>
            <li class="col-2 col-sm-2">
                <a href="{{route('contact')}}"class="rounded-end navbar-div-2 bg-6">
                    <h1 class="navbar-link-2">lavora <br> con_noi</h1>
                </a>
            </li>
            @guest
            <li class="col-2 col-sm-2">
                <a href="{{route('login')}}"class="rounded-end navbar-div-2 bg-4">
                    <h1 class="navbar-link-2">accedi</h1>
                </a>
            </li>
            <li class="col-2 col-sm-2">
                <a href="{{route('register')}}"class="rounded-end navbar-div-2 bg-5">
                    <h1 class="navbar-link-2">registrati</h1>
                </a>
            </li>
        </ul>
            @endguest

            {{-- quando è logato! --}}
            @auth
            <li class="col-4 me-3 d-flex flex-column justify-content-center">
                <h1 class="navbar-link-user-2 text-end mb-0">
                    ciao     {{Auth::user()->name}}
                </h1>
                <div class="d-flex justify-content-end text-light">
                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <small class="font-text pb-0 pe-1 log-out">log out</small><i class="fa-solid fa-arrow-right-from-bracket text-white pt-1 log-out"></i>
                    </a>
                    <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">@csrf</form>
                </div>
            </li>
            @endauth
        

@endif
