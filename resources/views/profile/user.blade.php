<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name=description content="Yoasobi user profile page, check out user's profile and talk each other, to see user's progile, register or login.">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('/css/main-profile.css') }}">
    
    <title>Profile</title>
</head>
<body>
<div class="container">
    <section id="header-container">
        <div id="header">
            <div class="header-sp">               
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-bars" style="color: white;"></i>
            </label>
            <a href="{{ route('home.show') }}""><img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo"></a>
            <button type="submit" class="search-btn-sp">
                <i class="fas fa-search "></i>
            </button>
        </div>   
<div class="head">
            
<div class="menu">
    <div class="menu-list">
        <a href="{{ route('posts.result') }}">Events</a>
        @if(Auth::check())
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
        <a href="/login">Login</a>
        @endif
        @if(Auth::check())
            @if(empty(Auth::user()->profile->image))
                <a href="/user/profile">
                <img src="{{asset('avatar/avatar.png')}}" class="image-preview__image" alt="avatar">
                </a>
                @else
                <a href="/user/profile">
                <img src="{{asset('uploads/')}}/{{Auth::user()->profile->image}}" class="image-preview__image" alt="profile image">
                </a>
            @endif
        @else
            <a href="/register">Register</a>
        @endif
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times" style="color: white;"></i>
        </label>
    </div>
</div> 
        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times" style="color: white;"></i>
        </label>
        <input type="checkbox" id="chk">
    </div>
</div>
<div class="header2">
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner">
            <li><a href="{{ route('home.show') }}">Home</a></li>
            @if(Auth::check())
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <li><a href="/login">Login</a></li>
            @endif
            <li><a href="{{ route('posts.result') }}">Events</a></li>
            {{-- <li><a href="#">Log in</a></li>
            <li><a href="#">Log out</a></li> --}}
            @if(Auth::check())
                <li><a href="/user/profile">Profile</a></li> 
            @else
                <li><a href="/register" >Register</a></li>
            @endif
        </ul>
    </div>
    <a href="{{ route('home.show') }}""><img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo"></a>
    <input type="checkbox" class="openSidebarSearch" id="openSidebarSearch">
    <label for="openSidebarSearch" class="sidebarIconSearch">
    <i class="fas fa-search search_icon"></i>
    </label>
        <div id="sidebarSearch">
            <div class="search-erea">
             <form action="{{ route('posts.result') }}"  method="GET">
            <div class="search-title">Enter the name of event</div>
                <input type="text" class="search_text">
            </div>
            <div class="search-erea">
                <div class="search-title">Categories</div>
                <select name="category_id" id="select" class="Genre">
                    <option value="" hidden>Category</option>
                    @foreach(App\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="search-erea">
                <div class="search-title">Day</div>
                <input type="text" id="date-box" class="Day-box">
            </div>
            <button type="submit" class="test">
                <i class="fas fa-search "></i>
            </button>
        </div>
    </div>
</form>
</section>

<div class="content">
    <div class="userinfo">
        <div class="profile">
        </div>
        <div class="person">
            @if(empty($user->profile->image))
                <img src="{{asset('people/person5.jpg')}}" >
            @else
            <img src="{{asset('uploads/')}}/{{$user->profile->image}}" class="image-preview__image">
            @endif
            {{-- @if(!empty($user->profile->image))
            <img src="{{asset('uploads/profile')}}/{{$user->profile->image}}" >
            @else
            <img src="{{asset('people/person7.jpg')}}">
            @endif --}}
        </div>
        
        <ul class="information">
        <li>Name :<br>
            
            <p>{{ $user->name }}
            </p>
            
        </li><br>
            <li>Gender :<br>
                @if(!empty($user->profile->gender))
                <p>{{ $user->profile->gender}}
                </p>
                @endif
            </li><br>
            <li>Country :<br>
                @if(!empty($user->profile->country))
                <p>{{ $user->profile->country}}
                </p>
                @endif
            </li><br>
            <li>Birthday :<br>
                @if(!empty($user->profile->bod))
                <p>{{ $user->profile->bod}}
                </p>
                @endif
            </li><br>
            <li>Instagram :<br>
                @if(!empty($user->profile->instagram))
                <p>{{ $user->profile->instagram}}
                </p>
                @endif
            </li><br>
        </ul>
        <div class="description"><span class="user-description">・User Description</span><br>
            @if(!empty($user->profile->description))
            <p>{{ $user->profile->description}}
            </p>
            @endif
            </li>
        </div>
    </div>
</div>
</div>            
</form>
    <footer>
    <div class="footer">
        <span class="follow">Follow Us Now !! #yoasobi</span>
        <div class="social">
            <a href="" target="_blank"><img src="{{asset('social link/001-facebook.svg')}}" width="32" height="32" alt="facebook link"></a>
            <a href="" target="_blank"><img src="{{asset('social link/011-instagram.svg')}}" width="32" height="32" alt="instagram link"></a>
            <a href="" target="_blank"><img src="{{asset('social link/013-twitter-1.svg')}}" width="32" height="32" alt="twitter link"></a>
        </div>
        <span class="terms"><a href="{{ route('terms.show') }}">Terms of service</a></span>
            <small class="copyright">Copyright 2019- yoasobi All Rights Reserved.</small>
    </div>
    </footer>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('/js/flatpickr.js') }}"></script>
    <script src="{{ asset('/js/scroll.js') }}"></script>
</body>
</html>