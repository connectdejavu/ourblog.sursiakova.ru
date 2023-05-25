<div class="header">
        <div class="inner__header">
            <div class="logo">OURBLOG</div>
            <ul class="navigation">
                
                <a href='{{ route("main") }}' class="navigation-link"><li class="nav-item"><img src="../../res/home_svg.svg" class="navigation-icon" alt=""><span>главная</span></li></a>
                <a href='{{ route("blog") }}' class="navigation-link"><li class="nav-item"><img src="../../res/pencil_svg.svg" class="navigation-icon" alt=""><span>блог</span></li></a>
                <a href='' class="navigation-link"><li class="nav-item"><img src="../../res/settings_svg.svg" class="navigation-icon" alt=""><span>настройки</span></li></a>

                <a href='{{ route("register") }}' class="navigation-link"><li class="nav-item"><img src="../../res/settings_svg.svg" class="navigation-icon" alt=""><span>рега</span></li></a>
                <a href='{{ route("login") }}' class="navigation-link"><li class="nav-item"><img src="../../res/settings_svg.svg" class="navigation-icon" alt=""><span>вход</span></li></a>
             

            </ul>
            <div class="inp">
                <input type="text" class="inp-search">
               
                <img class="navigation-icon" src="../../res/search_svg.svg" alt="">
            </div>
            
            <form action='{{ route("logout") }}' method = "POST" >
                @csrf
              <input type="submit" value="выход" class="exit-btn"></input>
            </form>
        </div>
       
    </div>