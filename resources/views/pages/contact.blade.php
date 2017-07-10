@extends('main')

@section('title', '| Kontakt')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Skontaktuj się z nami</h1>

            <hr>

            <form>
                <div class="form-group">
                    <label name="email">Email: </label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Temat: </label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Wiadomość: </label>
                    <textarea id="message" name="message" class="form-control">Twoja wiadomość</textarea>
                </div>

                <input type="submit" value="Wyślij" class="btn btn-success">
            </form>

        </div>
    </div>
@endsection