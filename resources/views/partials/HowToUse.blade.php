<section>
    <h2>HOW TO USE</h2>
    <div class="contents">
        @if(Auth::check())
        @else
        <div class="use_contents">        
                <img src="../../LPImages/phone image 1 .png" alt="register page image">
            <div class="Description">
                <h3>Register</h3>
                <p>Register or login to use it more comfortably.</p>
                <div class="register-btn">
                    <a href="/register">Register</a>
                </div>
                
            </div>
        </div>
        @endif
        <div class="use_contents use_contents2">           
            <div class="Description" style="align-items: center;">
                <h3>Create a profile</h3>
                <p>Create your profile and be part of the community </p>
            </div>
            <img src="../../LPImages/phone image 2.png" alt="profile page image">
        </div>

        <div class="use_contents">        
            <img src="../../LPImages/phone image 3.png" alt="event search page image">
                <div class="Description">
                    <h3>Find events</h3>
                    <p><span style="color: #F70661; margin-right: 1rem;">●</span>Save your favorite events</p>
                        
                    <p><span style="color: #F70661; margin-right: 1rem;">●</span>Look at recommended events</p>
                           
                </div> 
        </div>
        <div class="use_contents use_contents2">
                <div class="Description">
                    <h3><span style="color: #F70661; margin-right: 1rem;">●</span>Chat with others</h3>
                    
                </div>
                <img src="../../LPImages/phone image 4.png" alt="chat image">
        </div>
    </div>   
    @if(Auth::check())
    @else
        <div class="start">
            <h3>Let's start</h3>
            <div class="register-btn">
                    <a href="/register">Register</a>
            </div>
        </div>
    @endif
</section>