<li class="right-side onhover-dropdown">
    <a class="header-icon user-box user-icon">                                                
        <i class="fa-solid fa-language"></i>
    </a>
    <div class="category-dropdown category-dropdown3 onhover-div">
        <ul class="cart-list">
            <li>
                <div class="drop-cart">
                    

                    <div class="drop-contain drop-contain2">

                        @foreach(Config::get('languages') as $lang => $language)
                            @if($lang != App::getLocale())
                            <a href="{{ route('lang', $lang) }}">
                                <h5 class="p-0 m-0">{{$language}}</h5>
                            </a>
                            @endif
                        @endforeach    
                    </div>
                </div>
            </li>
      
        </ul>
    </div>
</li>