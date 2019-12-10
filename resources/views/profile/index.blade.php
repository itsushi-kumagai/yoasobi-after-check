<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name=description content="Yoasobi profile page, find new friends here. To create your profile, register or login now.">
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
                        <img src="{{asset('uploads/')}}/{{Auth::user()->profile->image}}" class="image-preview__image">
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
  
  </div>
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
  
      <a href="{{ route('home.show') }}"><img src="{{asset('logo/yoasobi.png')}}" class="logo sp-logo" alt="logo-smartphone"></a>
      <input type="checkbox" class="openSidebarSearch" id="openSidebarSearch">
      <label for="openSidebarSearch" class="sidebarIconSearch">
          <i class="fas fa-search search_icon"></i>
      </label>
      <div id="sidebarSearch">
          <form action="{{ route('posts.result') }}"  method="GET">
              <div class="search-area">
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
                  <div class="search-area">
                      <div class="search-title">Day</div>
                      <input type="text" id="date_search" class="Day-box" name="date" >
                  </div>
                  <button type="submit" class="test">
                      <i class="fas fa-search "></i>
                  </button>    
          </form>

      </div>



    </section>
            <div class="content">
                <div class="userinfo">
                    <div class="profile">
                    </div>
                    <div class="person">
                        @if(empty(Auth::user()->profile->image))
                        <img src="{{asset('avatar/avatar.png')}}" class="image-preview__image" alt="avatar">
                        @else
                        <img src="{{asset('uploads/')}}/{{Auth::user()->profile->image}}" alt="profile image">
                        @endif
                    </div>
                   
                    <div class="edit-image">
                        <button type="submit" class="editBtn" ><a href="{{ route('profile.create') }}">Change Image</a></button>
                    </div>
                   
                    <ul class="information">
                    <li>Name :<br>
                        <p>@if(!empty(Auth::user()->name))
                            {{ Auth::user()->name }}
                            @endif
                        </p>
                    </li><br>
                        <li>Gender :<br>
                            <p>@if(!empty(Auth::user()->profile->gender))
                                {{ Auth::user()->profile->gender }}
                                @endif
                            </p>
                        </li><br>
                        <li>Country :<br>
                            <p>@if(!empty(Auth::user()->profile->country))
                                {{ Auth::user()->profile->country }}
                                @endif
                            </p>
                        </li><br>
                        <li>Birthday :<br>
                            <p>@if(!empty(Auth::user()->profile->bod))
                                {{ Auth::user()->profile->bod }}
                                @endif
                            </p>
                        </li><br>
                        <li>Instagram :<br>
                            <p>@if(!empty(Auth::user()->profile->instagram))
                                {{ Auth::user()->profile->instagram }}
                                @endif
                            </p>
                        </li><br>
                    </ul>
                    <div class="description"><span class="user-description">・User Description</span><br>
                       <span class="description-p">
                            @if(!empty(Auth::user()->profile->description))
                            {{ Auth::user()->profile->description }}
                            @endif
                        </span>    
                        </li>
                    </div> 
                    <div class="linkToEdit">
                        <button class="saveBtn"><a href="{{ route('profile.create') }}">Edit</a></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="saved-container">
            <h2>Saved Events</h2>
            <div class="swiper-container" id="app">
                    <div class="swiper-wrapper">
                        @foreach($posts as $post)
                        <div class="swiper-slide">
                            <a href="{{ route('posts.show', [$post->id,$post->slug]) }}">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="300px" height="200px">
                            </a>
                            <div class="name">
                                    <div class="event-name">
                                        <a href="{{ route('posts.show', [$post->id,$post->slug]) }}">
                                            {{ str_limit($post->title, 20) }}
                                        </a>
                                    </div>
                                </div>
                                @if(Auth::check())
                                    <favouriteprofile-component :postid={{$post->id}} :favourited={{$post->checkSaved()?'true':'false'}}></favouriteprofile-component>
                                @endif
                            <div class="card-information">
                                <div class="event-date">
                                    {{ $post->date }}
                                </div>
                                <div class="card-info">
                                    <p>{{ str_limit($post->description, 40) }}</p>
                                        <a class="link" href="{{ route('posts.show', [$post->id,$post->slug]) }}" style="color: white">see more</a>
                                </div>
                            </div>   
                        </div>     
                        @endforeach 
                    </div>
                    
                </div>    
            </div>
            </div>
        </div>
    </section>
                     
                                    
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
    
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('/js/flatpickr.js') }}"></script>
    <script src="{{ asset('/js/scroll.js') }}"></script>
        
</body>
</html>