@extends('layouts.app')

@section('content')

    <div class="col-md-8 float-left body">
        <div class="bodytop col-md-12 text-center ">
            <h1>Sklad </h1>
        </div>

        <div class="bodytopimg">
        </div>

        <div class="bodyimg">

            <div class="text" style="margin-top: -120px;">

                <p>V tomto obchodě si můžete koupit různé ptáky. Každý pták přináší zvláštní vejce, které pak mohou být prodávány na trhu a vyměňovány za skutečné peníze. Každý pták dává jiný počet vajec, čím dražší je, tím víc to přináší. Můžete si koupit neomezený počet ptáků.</p>

                <table class="mt-5 table table-bordered text-center">
                    <tr>
                        <td  style="vertical-align: middle; text-align: center; "><img src="{{asset('imgs/robot1.png')}}" style="width: 100px;" class="img rounded" alt="..."></td>
                        <td  style="vertical-align: middle; text-align: center; " >Váš robot natěžil</td>
                        <td  style="vertical-align: middle; text-align: center; ">356 <img src="{{asset('imgs/silver.png')}}" style="width: 30px" alt=""></td>
                    </tr>

                    <tr>
                        <td  style="vertical-align: middle; text-align: center; "><img src="{{asset('imgs/robot2.png')}}" style="width: 100px" class="img rounded" alt="..."></td>
                        <td  style="vertical-align: middle; text-align: center; " >Váš robot natěžil</td>
                        <td  style="vertical-align: middle; text-align: center; ">356 <img src="{{asset('imgs/silver.png')}}" style="width: 30px" alt=""></td>
                    </tr>

                    <tr>
                        <td  style="vertical-align: middle; text-align: center; "><img src="{{asset('imgs/robot3.png')}}" style="width: 100px" class="img rounded" alt="..."></td>
                        <td  style="vertical-align: middle; text-align: center; " >Váš robot natěžil</td>
                        <td  style="vertical-align: middle; text-align: center; ">356 <img src="{{asset('imgs/silver.png')}}" style="width: 30px" alt=""></td>
                    </tr>

                    <tr>
                        <td  style="vertical-align: middle; text-align: center; "><img src="{{asset('imgs/robot.png')}}" style="width: 100px" class="img rounded" alt="..."></td>
                        <td  style="vertical-align: middle; text-align: center; " >Váš robot natěžil</td>
                        <td  style="vertical-align: middle; text-align: center; ">356 <img src="{{asset('imgs/silver.png')}}" style="width: 30px" alt=""></td>
                    </tr>

                </table>
                </div>

                    <p class="float-left pt-2">Celkem vlastníš: 72400</p> <div class="ml-2 float-left silver" style="vertical-align: middle; float:left;"></div>
                    <input type="submit" class="ml-4 btn btn-primary" value="Sebrat vše">



            </div>




        <div class="bodybottomimg"></div>

    </div>


@endsection
