<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=description content="Yoasobi profile edit page, change your profile image, gender, country, age, instagram account and description.">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('/css/main-profile-create.css') }}">
    <title>Profile Edit</title>
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
      <label for="openSidebarSearch" class="sidebarIconSearch sp-check">
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
            <div class="image-preview" id="imagePreview">
                @if(empty(Auth::user()->profile->image))
                <img src="{{asset('avatar/avatar.png')}}" id="image-preview__image" alt="avatar">
                @else
                <img src="{{asset('uploads/')}}/{{Auth::user()->profile->image}}"  id="preview" alt="profile image">
                @endif
        </div>
        
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="preview">
                <input type="file" id="file" accept="image/*" name="image">
            <label for="file" class="Change-image">
                Change Image
            </label>
        </div>
        <ul class="information">
            <li>Gender :<br>
                <div class="gender">
                    <select name="gender" id="" name="gender" >
                        <option class="option" value="@if(empty(Auth::user()->profile->gender))Select Gender
                                @else{{ Auth::user()->profile->gender }}@endif" selected="selected">
                                @if(empty(Auth::user()->profile->gender))Select Gender
                                @else{{ Auth::user()->profile->gender }}@endif
                        </option>
                        <option value="male" >male</option> 
                        <option value="female" class="selected">female</option> 
                        <option value="any">any</option> 
                    </select>       
                </div>
            </li>   
            <li>Country :<br>
                <div class="country">
                    <select name="country" id="" name="country">
                            <option class="option" value="@if(empty(Auth::user()->profile->country))Select country
                                    @else{{ Auth::user()->profile->country }}@endif" selected="selected">
                                
                                    @if(empty(Auth::user()->profile->country))Select country
                                    @else{{ Auth::user()->profile->country }}@endif
                            </option>
                            <option value="Afghanistan">Afghanistan</option> 
                            <option value="Albania">Albania</option> 
                            <option value="Algeria">Algeria</option> 
                            <option value="American Samoa">American Samoa</option> 
                            <option value="Andorra">Andorra</option> 
                            <option value="Angola">Angola</option> 
                            <option value="Anguilla">Anguilla</option> 
                            <option value="Antarctica">Antarctica</option> 
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                            <option value="Argentina">Argentina</option> 
                            <option value="Armenia">Armenia</option> 
                            <option value="Aruba">Aruba</option> 
                            <option value="Australia">Australia</option> 
                            <option value="Austria">Austria</option> 
                            <option value="Azerbaijan">Azerbaijan</option> 
                            <option value="Bahamas">Bahamas</option> 
                            <option value="Bahrain">Bahrain</option> 
                            <option value="Bangladesh">Bangladesh</option> 
                            <option value="Barbados">Barbados</option> 
                            <option value="Belarus">Belarus</option> 
                            <option value="Belgium">Belgium</option> 
                            <option value="Belize">Belize</option> 
                            <option value="Benin">Benin</option> 
                            <option value="Bermuda">Bermuda</option> 
                            <option value="Bhutan">Bhutan</option> 
                            <option value="Bolivia">Bolivia</option> 
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                            <option value="Botswana">Botswana</option> 
                            <option value="Bouvet Island">Bouvet Island</option> 
                            <option value="Brazil">Brazil</option> 
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                            <option value="Brunei Darussalam">Brunei Darussalam</option> 
                            <option value="Bulgaria">Bulgaria</option> 
                            <option value="Burkina Faso">Burkina Faso</option> 
                            <option value="Burundi">Burundi</option> 
                            <option value="Cambodia">Cambodia</option> 
                            <option value="Cameroon">Cameroon</option> 
                            <option value="Canada">Canada</option> 
                            <option value="Cape Verde">Cape Verde</option> 
                            <option value="Cayman Islands">Cayman Islands</option> 
                            <option value="Central African Republic">Central African Republic</option> 
                            <option value="Chad">Chad</option> 
                            <option value="Chile">Chile</option> 
                            <option value="China">China</option> 
                            <option value="Christmas Island">Christmas Island</option> 
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                            <option value="Colombia">Colombia</option> 
                            <option value="Comoros">Comoros</option> 
                            <option value="Congo">Congo</option> 
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                            <option value="Cook Islands">Cook Islands</option> 
                            <option value="Costa Rica">Costa Rica</option> 
                            <option value="Cote D'ivoire">Cote D'ivoire</option> 
                            <option value="Croatia">Croatia</option> 
                            <option value="Cuba">Cuba</option> 
                            <option value="Cyprus">Cyprus</option> 
                            <option value="Czech Republic">Czech Republic</option> 
                            <option value="Denmark">Denmark</option> 
                            <option value="Djibouti">Djibouti</option> 
                            <option value="Dominica">Dominica</option> 
                            <option value="Dominican Republic">Dominican Republic</option> 
                            <option value="Ecuador">Ecuador</option> 
                            <option value="Egypt">Egypt</option> 
                            <option value="El Salvador">El Salvador</option> 
                            <option value="Equatorial Guinea">Equatorial Guinea</option> 
                            <option value="Eritrea">Eritrea</option> 
                            <option value="Estonia">Estonia</option> 
                            <option value="Ethiopia">Ethiopia</option> 
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                            <option value="Faroe Islands">Faroe Islands</option> 
                            <option value="Fiji">Fiji</option> 
                            <option value="Finland">Finland</option> 
                            <option value="France">France</option> 
                            <option value="French Guiana">French Guiana</option> 
                            <option value="French Polynesia">French Polynesia</option> 
                            <option value="French Southern Territories">French Southern Territories</option> 
                            <option value="Gabon">Gabon</option> 
                            <option value="Gambia">Gambia</option> 
                            <option value="Georgia">Georgia</option> 
                            <option value="Germany">Germany</option> 
                            <option value="Ghana">Ghana</option> 
                            <option value="Gibraltar">Gibraltar</option> 
                            <option value="Greece">Greece</option> 
                            <option value="Greenland">Greenland</option> 
                            <option value="Grenada">Grenada</option> 
                            <option value="Guadeloupe">Guadeloupe</option> 
                            <option value="Guam">Guam</option> 
                            <option value="Guatemala">Guatemala</option> 
                            <option value="Guinea">Guinea</option> 
                            <option value="Guinea-bissau">Guinea-bissau</option> 
                            <option value="Guyana">Guyana</option> 
                            <option value="Haiti">Haiti</option> 
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                            <option value="Honduras">Honduras</option> 
                            <option value="Hong Kong">Hong Kong</option> 
                            <option value="Hungary">Hungary</option> 
                            <option value="Iceland">Iceland</option> 
                            <option value="India">India</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                            <option value="Iraq">Iraq</option> 
                            <option value="Ireland">Ireland</option> 
                            <option value="Israel">Israel</option> 
                            <option value="Italy">Italy</option> 
                            <option value="Jamaica">Jamaica</option> 
                            <option value="Japan">Japan</option> 
                            <option value="Jordan">Jordan</option> 
                            <option value="Kazakhstan">Kazakhstan</option> 
                            <option value="Kenya">Kenya</option> 
                            <option value="Kiribati">Kiribati</option> 
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                            <option value="Korea, Republic of">Korea, Republic of</option> 
                            <option value="Kuwait">Kuwait</option> 
                            <option value="Kyrgyzstan">Kyrgyzstan</option> 
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                            <option value="Latvia">Latvia</option> 
                            <option value="Lebanon">Lebanon</option> 
                            <option value="Lesotho">Lesotho</option> 
                            <option value="Liberia">Liberia</option> 
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                            <option value="Liechtenstein">Liechtenstein</option> 
                            <option value="Lithuania">Lithuania</option> 
                            <option value="Luxembourg">Luxembourg</option> 
                            <option value="Macao">Macao</option> 
                            <option value="North Macedonia">North Macedonia</option> 
                            <option value="Madagascar">Madagascar</option> 
                            <option value="Malawi">Malawi</option> 
                            <option value="Malaysia">Malaysia</option> 
                            <option value="Maldives">Maldives</option> 
                            <option value="Mali">Mali</option> 
                            <option value="Malta">Malta</option> 
                            <option value="Marshall Islands">Marshall Islands</option> 
                            <option value="Martinique">Martinique</option> 
                            <option value="Mauritania">Mauritania</option> 
                            <option value="Mauritius">Mauritius</option> 
                            <option value="Mayotte">Mayotte</option> 
                            <option value="Mexico">Mexico</option> 
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                            <option value="Moldova, Republic of">Moldova, Republic of</option> 
                            <option value="Monaco">Monaco</option> 
                            <option value="Mongolia">Mongolia</option> 
                            <option value="Montserrat">Montserrat</option> 
                            <option value="Morocco">Morocco</option> 
                            <option value="Mozambique">Mozambique</option> 
                            <option value="Myanmar">Myanmar</option> 
                            <option value="Namibia">Namibia</option> 
                            <option value="Nauru">Nauru</option> 
                            <option value="Nepal">Nepal</option> 
                            <option value="Netherlands">Netherlands</option> 
                            <option value="Netherlands Antilles">Netherlands Antilles</option> 
                            <option value="New Caledonia">New Caledonia</option> 
                            <option value="New Zealand">New Zealand</option> 
                            <option value="Nicaragua">Nicaragua</option> 
                            <option value="Niger">Niger</option> 
                            <option value="Nigeria">Nigeria</option> 
                            <option value="Niue">Niue</option> 
                            <option value="Norfolk Island">Norfolk Island</option> 
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                            <option value="Norway">Norway</option> 
                            <option value="Oman">Oman</option> 
                            <option value="Pakistan">Pakistan</option> 
                            <option value="Palau">Palau</option> 
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                            <option value="Panama">Panama</option> 
                            <option value="Papua New Guinea">Papua New Guinea</option> 
                            <option value="Paraguay">Paraguay</option> 
                            <option value="Peru">Peru</option> 
                            <option value="Philippines">Philippines</option> 
                            <option value="Pitcairn">Pitcairn</option> 
                            <option value="Poland">Poland</option> 
                            <option value="Portugal">Portugal</option> 
                            <option value="Puerto Rico">Puerto Rico</option> 
                            <option value="Qatar">Qatar</option> 
                            <option value="Reunion">Reunion</option> 
                            <option value="Romania">Romania</option> 
                            <option value="Russian Federation">Russian Federation</option> 
                            <option value="Rwanda">Rwanda</option> 
                            <option value="Saint Helena">Saint Helena</option> 
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint Lucia">Saint Lucia</option> 
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                            <option value="Samoa">Samoa</option> 
                            <option value="San Marino">San Marino</option> 
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option> 
                            <option value="Senegal">Senegal</option> 
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                            <option value="Seychelles">Seychelles</option> 
                            <option value="Sierra Leone">Sierra Leone</option> 
                            <option value="Singapore">Singapore</option> 
                            <option value="Slovakia">Slovakia</option> 
                            <option value="Slovenia">Slovenia</option> 
                            <option value="Solomon Islands">Solomon Islands</option> 
                            <option value="Somalia">Somalia</option> 
                            <option value="South Africa">South Africa</option> 
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                            <option value="Spain">Spain</option> 
                            <option value="Sri Lanka">Sri Lanka</option> 
                            <option value="Sudan">Sudan</option> 
                            <option value="Suriname">Suriname</option> 
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                            <option value="Swaziland">Swaziland</option> 
                            <option value="Sweden">Sweden</option> 
                            <option value="Switzerland">Switzerland</option> 
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                            <option value="Tajikistan">Tajikistan</option> 
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                            <option value="Thailand">Thailand</option> 
                            <option value="Timor-leste">Timor-leste</option> 
                            <option value="Togo">Togo</option> 
                            <option value="Tokelau">Tokelau</option> 
                            <option value="Tonga">Tonga</option> 
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                            <option value="Tunisia">Tunisia</option> 
                            <option value="Turkey">Turkey</option> 
                            <option value="Turkmenistan">Turkmenistan</option> 
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                            <option value="Tuvalu">Tuvalu</option> 
                            <option value="Uganda">Uganda</option> 
                            <option value="Ukraine">Ukraine</option> 
                            <option value="United Arab Emirates">United Arab Emirates</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="United States">United States</option> 
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                            <option value="Uruguay">Uruguay</option> 
                            <option value="Uzbekistan">Uzbekistan</option> 
                            <option value="Vanuatu">Vanuatu</option> 
                            <option value="Venezuela">Venezuela</option> 
                            <option value="Viet Nam">Viet Nam</option> 
                            <option value="Virgin Islands, British">Virgin Islands, British</option> 
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                            <option value="Wallis and Futuna">Wallis and Futuna</option> 
                            <option value="Western Sahara">Western Sahara</option> 
                            <option value="Yemen">Yemen</option> 
                            <option value="Zambia">Zambia</option> 
                            <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>    
            </li>
            <li>Birthday :<br>
                <input type="text" class="birthday" id="bod" name="bod" 
                value="@if(!empty(Auth::user()->profile->bod)){{ Auth::user()->profile->bod }}@endif">
            </li>
            <li> Instagram :<br>
            <input type="text" class="instagram"  name="instagram" 
                value="@if(!empty(Auth::user()->profile->instagram)){{ Auth::user()->profile->instagram }}@endif">
            </li><br>
            <li>User Description :<br>
                <textarea name="description" id="" cols="60" rows="10">@if(!empty(Auth::user()->profile->description)){{ Auth::user()->profile->description }}@endif</textarea></li>
                <button type="submit" class="saveBtn">Save</button>
        </ul>
        
    </div>
    </form>
    </div> 
</div>
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

    <script src="{{ asset('/js/previewImg.js') }}"></script>
    <script src="{{ asset('/js/cleave.min.js') }}"></script>
    <script src="{{ asset('/js/cleave.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('/js/scroll.js') }}"></script>
</body>
</html>
