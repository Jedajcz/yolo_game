@extends('layouts.app')

@section('content')

    <div class="col-md-8 float-left body">
        <div class="bodytop col-md-12 text-center ">
            <h1>Obchod </h1>
        </div>

        <div class="bodytopimg">
        </div>

        <div class="bodyimg">

            <div class="text" style="margin-top: -60px;">

                <p>Maloobchodní prodejna vám umožní prodávat všechny vaše vejce za stříbro, které lze vyměnit za skutečné peníze. Stříbro získané z prodeje se rozděluje mezi dva účty (účet pro nákupy a faktura za stažení) v poměru: 70% na účtu u nákupů a 30% na stažen</p>

                <p><b>Prodejní cena: 100 stříbra = 1 zlato.</b></p>
                <table class="mt-5 table table-bordered text-center">
                    <tr>
                        <th></th>
                        <th>Vlastníš stříbra</th>
                        <th>Přepočet na zlato</th>
                    </tr>
                     <tr>
                        <th><img src="{{asset('imgs/silver.png')}}" style="width: 40px" alt=""></th>
                        <th>72400</th>
                        <th>724</th>
                    </tr>

                </table>
                </div>

            <div class="text-center">
                <button class="btn btn-primary">Prodat vše</button>
            </div>
            <br>
            <p>Pokud doplníte pokladice, můžete si koupit mnohem více robotů.</p>


        </div>




        <div class="bodybottomimg"></div>

    </div>


@endsection
