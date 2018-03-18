@extends('layouts.app')

@section('content')

        <div class="col-md-8 float-left body">
            <div class="bodytop col-md-12 text-center ">
                <h1>Můj profil </h1>
            </div>

            <div class="bodytopimg">
            </div>

            <div class="bodyimg">

                <table class="table table-striped" style="margin-top: -60px; width: 100%">

                    <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="row">524623</th>
                    </tr>
                    <tr>
                        <th scope="row">Přezdívka</th>
                        <th scope="row">Nife</th>
                    </tr>
                    <tr>
                        <th scope="row">E-mailová adresa</th>
                        <th scope="row">webforyoucz@gmail.com</th>
                    </tr>
                    <tr>
                        <th scope="row">Zůstatek (při nákupu)</th>
                        <th scope="row">27,77 zlato</th>
                    </tr>
                    <tr>
                        <th scope="row">Bilance (při stažení)</th>
                        <th scope="row">34,19 zlato</th>
                    </tr>
                    <tr>
                        <th scope="row">Získané na doporučení</th>
                        <th scope="row">0,00 zlata</th>
                    </tr>
                    <tr>
                        <th scope="row">Placené</th>
                        <th scope="row">0,00 Kč</th>
                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="bodybottomimg"></div>

        </div>

@endsection
