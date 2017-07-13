@extends('main')

@section('title', '| Jak działa?')

@section('content')
    <script>
        function init() {
            window.addEventListener('scroll', function(e){
                var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 300,
                    header = document.querySelector("header");
                if (distanceY > shrinkOn) {
                    classie.add(header,"smaller");
                } else {
                    if (classie.has(header,"smaller")) {
                        classie.remove(header,"smaller");
                    }
                }
            });
        }
        window.onload = init();
    </script>
    </head>



    <body>

    <div id="wrapper">

        <div id="main">
            <div id="content">
                <section>
                    <div class="container">
                        <h1>Jak Działa?</h1>
                        <p>Strona jest stworzona z myślą o uczniach w każdym wieku. Głównym jej celem jest efektywne pomoc przy rozwiązywaniu zadaniań, udzielenia korepetycji online, pomaganiu przy tworzeniu projektów zarówno tych mniejszych jak i większych. Mamy nadzieje, że o każdej godzinie będziecie w stanie otrzymać zadawalającą was pomoc.</p>            </p>
                    </div>
                </section>


            </div>
        </div><!-- #main -->

        <div id="main">
            <div id="content">
                <section>
                    <div class="container">
                        <h1>Płatności</h1>
                        <p>Dozwolone są płatności zarówno automatycznie pobierane i rozliczanie co miesiąc (możliwe jedynie przy posiadaniu konta bankowego), pojedyncze przez przelew oraz za pomocą paysafecard.  </p>
                    </div>
                </section>


            </div>
        </div><!-- #main -->
        <div id="main">
            <div id="content">
                <section>
                    <div class="container">
                        <h1>Market</h1>
                        <p>W tym właśnie miejscu ustalacie cenę, piszecie o świadczonej usłudze. Przykładowo, chciałbyś, żeby ktoś pomógł Ci w zadaniu z biologi z gimnazjum. Dla porządku przujmujemy zasady oznaczania poziomu zadań/korepetycji, zadania/korepetycje podstawowe (podstawówka/gimnazjum/matura podstawowa) zadania/korepetycje rozszerzone (matura rozszerzona/studia). Następnie ustalasz cenę która oferujesz za rozwiązanie zadania czy udzielenia korpetycji w tym momencie otrzyujesz oferty za dane zadanie/korepetycje (cena również może być negocjowana). W przypadku zadania dodajesz jeszcze informacje o terminei wykonania. Po opublikowaniu zgłoszenia otrzymujesz rózne oferty, jesteś w stanie przeglądać opinie o potencjalnych korpetytorach ich ocny oraz ceny jakei oni proponują. Po otrzymaniu pomocy zobowiązan jesteś do dokonania płaności bez tej czynności nie jesteś w stanie wyjść z karty. </p>

                    </div>
                </section>


            </div>
        </div><!-- #main -->

        <footer>

    </div><!-- /#top-bar -->
    </footer><!-- /footer -->



    </div><!-- /#wrapper -->











@endsection