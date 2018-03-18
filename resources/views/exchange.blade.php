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

                <p>Ve směnárně si můžete pro nákup koupit stříbro pro výběr stříbra. Při výměně stříbra dostanete na účet 20% na nákup.</p>

                <p><b>Výměna je možná pouze v jednom směru</b></p>
                <form class="form-inline">
                <p>Dáváte stříbro pro stažení (min. 1000]:	<input type="number" value="1000" class="col-md-3 form-control"> </p>
                <p>Získejte stříbro pro nákupy [+ 20%]::	<input type="number" value="1200" class="col-md-3 form-control"> </p>
                </form>
                <div class="text-center">
                    <button class="btn btn-primary">Výměna</button>
                </div>

                </div>


            <br>
            <p>Pokud doplníte pokladice, můžete si koupit mnohem více robotů.</p>


        </div>




        <div class="bodybottomimg"></div>

    </div>


@endsection
