<?php

    class Movie {
        
        public string $title;
        public string $director;
        public $genres = [];
        


        public function __construct(string $title, string $director, array $genres)
        {
            $this->title = $title;
            $this->director = $director; 
            $this->genres = $genres;
        }


        public function parental_advisor()
        {
            if (in_array('Western', $this->categories) || in_array('Thriller', $this->categories)) {
                return 'adulto';
            } else {
                return 'di tutte le età';
            }
        }
        

    }

    $movieFirst = new Movie('Oppenheimer','Crhistopher Nolan', 'Thriller');
    var_dump($movieFirst);
    var_dump('Questo film è indicato per un pubblico ' . $movieFirst->parental_advisor());

    $movieSecond = new Movie('Il Signore degli Anelli','Peter Jackson', 'Fantasy Fiction');
    var_dump($movieSecond);
    var_dump('Questo film è indicato per un pubblico ' . $movieSecond->parental_advisor());

    $movieThird = new Movie('Django', 'Quentin Tarantino', 'Western');
    var_dump($movieThird);
    var_dump('Questo film è indicato per un pubblico ' . $movieThird->parental_advisor());
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- VUE JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    </head>
    <body>

        <header>
            HEADER
        </header>

        <main>
            MAIN
        </main>

        <footer>
            FOOTER
        </footer>

        <!-- JS BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- MY JS -->
        <script type="text/javascript" src="./js/scripts.js"></script>
    </body>
</html>