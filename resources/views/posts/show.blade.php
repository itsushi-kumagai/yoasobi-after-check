<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name=description content="{{$posts['particular_post']->meta}}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Merriweather|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('/css/main-info.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="{{ asset('/css/swiper.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<title>{{ str_limit($posts['particular_post']->title,35 )}}/Shibuya</title>
</head>
<body>
<div class="container" id="app">
<section id="header-container">
    <div id="header">
    <div class="header-sp">               
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-bars" style="color: white;"></i>
        </label>
        <a href="{{ route('home.show') }}"><img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo"></a>
        <button type="submit" class="search-btn-sp">
            <i class="fas fa-search "></i>
        </button>
    </div>
    <div class="head">
        <div class="seach-erea">
        <form action="{{ route('posts.result') }}" class="search" method="GET">
            <input type="text" name="description" class="search_text" placeholder="Enter the key words">
            <select name="category_id" id="select" class="Genre">
                <option value="" hidden>Category</option>
                @foreach(App\Category::all() as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <input type="text" name="date" class="search_date" id="date" placeholder="Choose date">
            <button type="submit" class="test">
                <i class="fas fa-search "></i>
            </button>
        </form>
        </div>
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
                    <li><a class="menu-link" href="{{ route('home.show') }}">Home</a></li>
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
                        <li><a href="/register">Register</a></li>
                    @endif
                </ul>
            </div>
            <a href="{{ route('home.show') }}" ><img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo"></a>
            <input type="checkbox" class="openSidebarSearch" id="openSidebarSearch">
            <label for="openSidebarSearch" class="sidebarIconSearch">
            <i class="fas fa-search search_icon"></i>
            </label>
            <div id="sidebarSearch">
            <form action="{{ route('posts.result') }}"  method="GET">
                <div class="search-erea">
                <div class="search-title">Enter the name of event</div>
                    <input type="text" class="search_text" name="description">
                </div>
                <div class="search-erea">
                    <div class="search-title">Categories</div>
                    <div class="Category-list">
                        <select name="category_id" id="select" class="Genre">
                            <option value="" hidden>Category</option>
                            @foreach(App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="search-erea">
                    <div class="search-title">Day</div>
                    <input type="text" id="date-responsive" class="Day-box" name="date" >
                </div>
                <button type="submit" class="test">
                    <i class="fas fa-search "></i>
                </button>
            </div>
    </div>
</section>
    <div class="content" >
        <img src="{{ asset('storage/'.$posts['particular_post']->image) }}" alt="{{ $posts['particular_post']->alt }}" width="750px" height="450px">
        <div class="event-info">
            <div class="pic-contents">
                <div class="event-title">
                    <div class="event-title">
                        <h1>{{ str_limit($posts['particular_post']->title,80 )}}</h1>
                    </div>
                    <div class="fav">
                        <button class="fav-icon">
                            <i class="fas fa-link link-icon" style="color: rgb(155, 155, 155);"></i>
                        </button>
                        @if(Auth::check())
                            <favourite-component :postid={{$posts['particular_post']->id}} :favourited={{$posts['particular_post']->checkSaved()?'true':'false'}}></favourite-component>
                        @else
                            <button class="fav-icon"><a href="{{ route('prompt.show') }}"><i class="fas fa-heart fa-2x" style="color: white;"></i></a></button>
                        @endif
                    </div>
                </div>
            <div class="pic-map">
                <div class="genre">
                    Category: <p>{{ $posts['particular_post']->category->name }}</p>
                </div>
                <div class="tag-group">
                        Tags: 
                        @foreach($posts['particular_post']->tags as $tag)<span class="w3-tag"> {{ $tag->name }}</span> @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="information">
        <div class="about">
            <div class="map">
                <h4><i class="far fa-map"></i>
                <a href="{{ $posts['particular_post']->map }}" target="_blank">{{ str_limit($posts['particular_post']->place,35)  }}</a></h4>
            </div>
            <div class="date">
                <h4><i class="fas fa-calendar-alt"></i> {{ $posts['particular_post']->date  }}</h4>
            </div>
        </div>
        <div class="detail">
            <p>
            {{ $posts['particular_post']->description }}
            </p>
        </div>
        <div class="comments">
            <div class="organizer-name">
                Organizer:<h3><a href="{{ $posts['particular_post']->organizer_link }}" target="_blank">{{ $posts['particular_post']->organizer }}</a></h3>
            </div>
        </div>
        @if(Auth::check())
        <comments-component :post="{{ $posts['particular_post'] }}"></comments-component>
        @else
        <span style="float: right; margin-top: 1rem;" ><a class="authcomment" href="{{ route('prompt.show') }}">Login to add comment</a></span>
        <comments-component :post="{{ $posts['particular_post'] }}"></comments-component>
        @endif
    </div>
</div>
       
<section class="recomend-container">
    <h2>Recommended events</h2>
        <div class="swiper-container">       
        <div class="swiper-wrapper">
                @foreach($posts['recommended_posts'] as $recommended_post)
            <div class="swiper-slide">
                <div class="image">
                    <a href="{{ route('posts.show', [$recommended_post->id,$recommended_post->slug]) }}">
                        <img src="{{ asset('storage/'.$recommended_post->image) }}" alt="{{ $recommended_post->alt }}" width="100%" height="100%">
                    </a>
                </div>
            <div class="card-information">
            <div class="name-button">
                <div class="event-name">
                    <h4><a href="{{ route('posts.show', [$recommended_post->id,$recommended_post->slug]) }}">
                        {{ str_limit($recommended_post->title, 15) }}
                    </a></h4>
                </div>
            </div>
            <div class="heart-button">
                    @if(Auth::check())
                        <favouritecard-component :postid={{$recommended_post->id}} :favourited={{$recommended_post->checkSaved()?'true':'false'}}></favouritecard-component>
                    @else
                        <button class="heart-button"><a href="{{ route('prompt.show') }}"><i class="fas fa-heart fa-2x" style="color: white;"></i></a></button>
                    @endif
            </div>
            <div class="event-date">
                    <h5>{{ $recommended_post->date }}</h5>
            </div>
                <div class="card-info">
                    <p>{{ str_limit($recommended_post->description, 40) }}
                        <a class="link" href="{{ route('posts.show', [$recommended_post->id,$recommended_post->slug]) }}" >see more</a>
                    </p>
                </div>
            </div>    
        </div>
            @endforeach
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
</div>
</section>
        </div>
        </form>
        <footer>
            <div class="footer">
                <!-- <div class="follow">Follow Us Now !! #yoasobi</div>
                <div class="social">
                    <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/facebook.svg')}}" width="25" height="25" alt="facebook link"></a></div>
                    <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/instagram-logo.svg')}}" width="25" height="25" alt="instagram link"></a></div>
                    <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/twitter.svg')}}" width="25" height="25" alt="twitter link"></a></div> 
                </div> -->
                <div class="terms"><a href="{{ route('terms.show') }}">Terms of service</a></div>
                    <small class="copyright">©︎ 2019- yoasobi All Rights Reserved.</small>
            </div>
        </footer>
        
    </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/js/swiper.min.js') }}">
        <script src="https://unpkg.com/swiper/js/swiper.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="{{ asset('/js/flatpickr.js') }}"></script>
        <script src="{{ asset('/js/swiper.js') }}"></script>
        <script src="{{ asset('/js/scroll.js') }}"></script>
</body>
</html>