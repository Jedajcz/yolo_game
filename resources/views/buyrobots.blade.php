@extends('layouts.app')

@section('content')

    <div class="col-md-8 float-left body">
        <div class="bodytop col-md-12 text-center ">
            <h1>Rekrutace </h1>
        </div>

        <div class="bodytopimg">
        </div>

        <div class="bodyimg">

            <div class="text" style="margin-top: -60px;">

                <p>V tomto obchodě si můžete koupit různé ptáky. Každý pták přináší zvláštní vejce, které pak mohou být prodávány na trhu a vyměňovány za skutečné peníze. Každý pták dává jiný počet vajec, čím dražší je, tím víc to přináší. Můžete si koupit neomezený počet ptáků.</p>

                <div class="card mt-2 mb-2">
                    <h5 class="card-header">Robot: UR-1</h5>
                    <div class="card-body">
                        <div class="col-md-4 float-left">
                            <img src="{{asset('imgs/robot1.png')}}" class="img rounded float-left" alt="...">
                        </div>
                        <div class="col-md-8 float-left">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Produktivita</td>
                                    <td>5 za hodinu</td>
                                </tr>
                                <tr>
                                    <td>Cena</td>
                                    <td> 150 stříbra</td>
                                </tr>
                                <tr>
                                    <td>Koupeno</td>
                                    <td> 5 ks</td>
                                </tr>

                                </tbody>
                            </table>
                            <form class="float-left">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Kolik ks?">
                                    </div>
                                    <div class="col">
                                        <input type="submit"  class="btn btn-primary" value="Koupit" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card mt-2 mb-2">
                    <h5 class="card-header">Robot: UR-2</h5>
                    <div class="card-body">
                        <div class="col-md-4 float-left">
                            <img src="{{asset('imgs/robot2.png')}}" class="img rounded float-left" alt="...">
                        </div>
                        <div class="col-md-8 float-left">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Produktivita</td>
                                    <td>5 za hodinu</td>
                                </tr>
                                <tr>
                                    <td>Cena</td>
                                    <td> 250 stříbra</td>
                                </tr>
                                <tr>
                                    <td>Koupeno</td>
                                    <td> 5 ks</td>
                                </tr>

                                </tbody>
                            </table>
                            <form class="float-left">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Kolik ks?">
                                    </div>
                                    <div class="col">
                                        <input type="submit"  class="btn btn-primary" value="Koupit" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card mt-2 mb-2">
                    <h5 class="card-header">Robot: UR-3</h5>
                    <div class="card-body">
                        <div class="col-md-4 float-left">
                            <img src="{{asset('imgs/robot3.png')}}" class="img rounded float-left" alt="...">
                        </div>
                        <div class="col-md-8 float-left">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Produktivita</td>
                                    <td>5 za hodinu</td>
                                </tr>
                                <tr>
                                    <td>Cena</td>
                                    <td> 850 stříbra</td>
                                </tr>
                                <tr>
                                    <td>Koupeno</td>
                                    <td> 5 ks</td>
                                </tr>

                                </tbody>
                            </table>
                            <form class="float-left">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Kolik ks?">
                                    </div>
                                    <div class="col">
                                        <input type="submit"  class="btn btn-primary" value="Koupit" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card mt-2 mb-2">
                    <h5 class="card-header">Robot: UR-4</h5>
                    <div class="card-body">
                        <div class="col-md-4 float-left">
                            <img src="{{asset('imgs/robot.png')}}" class="img rounded float-left" alt="...">
                        </div>
                        <div class="col-md-8 float-left">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Produktivita</td>
                                    <td>5 za hodinu</td>
                                </tr>
                                <tr>
                                    <td>Cena</td>
                                    <td> 1200 stříbra</td>
                                </tr>
                                <tr>
                                    <td>Koupeno</td>
                                    <td> 5 ks</td>
                                </tr>

                                </tbody>
                            </table>
                            <form class="float-left">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Kolik ks?">
                                    </div>
                                    <div class="col">
                                        <input type="submit"  class="btn btn-primary" value="Koupit" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bodybottomimg"></div>

    </div>


@endsection
