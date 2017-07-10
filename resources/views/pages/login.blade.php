@extends('main')

@section('title', '| Login')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Zaloguj się:</h1>

            <hr>

            <form>
                <div class="form-group">
                    <label name="email">Login: </label>
                    <input id="email" name="login" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Hasło: </label>
                    <input type="password" id="subject" name="subject" class="form-control">
                </div>
                    <div class = "form-group">
                    <input type="submit" value="Wyślij" class="btn btn-success">
                </div>

                <a value="Zarejstruj się" class="btn btn-primary" href="/" > Zarejestruj się </a>


                </form>


        </div>
    </div>
@endsection