<section  id="app">
    <h2 class="featured">Featured Events</h2>
    <div class="swiper-container">
    <div class="swiper-wrapper">
            @foreach($posts as $post)
            <div class="swiper-slide">
                    <div class="image">
                        <a href="{{ route('posts.show', [$post->id,$post->slug]) }}">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->alt }}" width="100%" height="auto">
                        </a>
                    </div>
                    <div class="card-information">
                            <div class="event-name">
                                <div class="title">
                                    <h1><a href="{{ route('posts.show', [$post->id,$post->slug]) }}">
                                        {{ str_limit($post->title, 18) }}
                                    </a></h1>
                                </div>
                                <div class="event-button">
                                    @if(Auth::check())
                                        <favouritecard-component :postid={{$post->id}} :favourited={{$post->checkSaved()?'true':'false'}}></favouritecard-component>
                                    @else
                                        <button class="heart-button"><a href="{{ route('prompt.show') }}"><i class="fas fa-heart fa-2x" style="color: white;"></i></a></button>
                                    @endif
                                </div>
                            </div>
                        <div class="event-date">
                            <h4>{{ $post->date }}</h4>
                        </div>
                        <div class="card-info">
                            <p>{{ str_limit($post->description, 25) }}
                                <a href="{{ route('posts.show', [$post->id,$post->slug]) }}" style="color: white">see more</a>
                            </p>
                        </div>
                    </div>    
                </div>
         @endforeach
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="showmore">
        <a href="{{ route('posts.result') }}">show more</a>
    </div>
</div>

</section>