@extends('layouts.app')

@section('content')

        <div class="col-md-8 float-left body">
            <div class="bodytop col-md-12 text-center ">
                <h1>Nastavení </h1>
            </div>

            <div class="bodytopimg">
            </div>

            <div class="bodyimg">

                <div class="text" style="margin-top: -60px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Staré heslo</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3  col-form-label">Nové heslo</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3  col-form-label">Opakovat heslo</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Změnit">
                </form>
                </div>
            </div>
            <div class="bodybottomimg"></div>
        </div>

@endsection
