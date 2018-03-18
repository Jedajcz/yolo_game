<div class="col-md-4 sidebar float-md-left float-sm-none">

    <div class="col-md-12 box">
        <div class="sidebartop col-md-12 text-center ">
            <h1>Můj učet </h1>
        </div>
        <div class="col md-12 mt-2 text-center">
            <h5>Uživatel: <span class="blue">YOLO</span></h5>
        </div>
        <div class="col md-12 text-center">
            <h5>Suroviny celkem:</h5>
        </div>

        <div class="row mt-2" style="border:1px solid gainsboro; margin: 10px; ">

              <div class="col mt-3 float-left ">
                  <div class="silver" style="vertical-align: middle;"></div><p class="username pt-2">72400</p>
              </div>
              <div class="col mt-3 float-left ">
                  <div class="gold" style="vertical-align: middle"></div><p class="username pt-2">724</p>
              </div>

        </div>

        <ul class="nav mt-2 flex-column">

            <li class="nav-item">
                <a class="nav-link" href="{{route('profile')}}"><div class="profile"></div>Můj profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('setting')}}"><div class="setting"></div>Nastavení</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><div class="logout"></div>Odhlásit se</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12 mt-5 box">

        <div class="sidebartop col-md-12 text-center ">
            <h1>Moje kolonie </h1>
        </div>

        <ul class="nav mt-2  flex-column ">
            <li class="nav-item">
                <a class="nav-link" href="{{route('buyrobots')}}"><div class="buy"></div>Koupit Roboty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('store')}}"><div class="store"></div>Sklad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('market')}}"><div class="shop"></div>Obchod</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('exchange')}}"><div class="money"></div>Výměna</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12 mt-5 box">
        <div class="sidebartop col-md-12 text-center ">
            <h1>Ostatní </h1>
        </div>

        <ul class="nav mt-2 flex-column ">
            <li class="nav-item ">
                <a class="nav-link" href="#"><div class="profit"></div>Vypočítat zisk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('partners')}}"><div class="recomanded"></div>Mé doporučení</a>
            </li>

        </ul>
    </div>
</div>