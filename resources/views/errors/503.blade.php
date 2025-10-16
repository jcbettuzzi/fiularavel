<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #F19A60;
        margin: 0;
    }
    img { 
        max-width: 100%; 
        height: auto; 
    }
    .emoji-vert { 
        position: absolute; 
        left: 5%; 
        width: 125px;
        top: 25%;
    }
    .emoji-bleu { 
        position: absolute;
        right: 15%;
        width: 75px;
        top: 10%
    }
    .emoji-rose { 
        position: absolute;
        right: 15%;
        bottom: 10%;
        width: 150px; 
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;      
    }

    .etoile {
        position: absolute;
        width: 25px;
    }

    .etoile_vide {
        position: absolute;
        width: 30px;
    }

    h1 {
        font-size: 1.1em;
    }

    p {
        font-size: 0.8em;
    }

    .etoile_vide1 {
        left: 30%;
        top: 10%;

    }

    .etoile_vide2 {
        bottom: 23%;
        left: 15%;
    }

    .etoile_vide3 {
        bottom: 25%;
        left: 28%;
    }

    .etoile_vide4 {
        bottom: 25%;
        right: 13%;
    }

    .etoile1 {
        left: 20%;
        top: 15%
    }

    .etoile2 {
        right: 5%;
        top: 25%;
    }

    .etoile3 {
        right: 50%;
        top: 37%;
    }

    .etoile4 {
        left: 25%;
        bottom: 18%;
    }

    .etoile5 {
        bottom: 30%;
        right: 9%;
    }

    @media only screen and (min-width: 375px){
        h1 {
            font-size: 1.3em;
        }

        p {
            font-size: 0.9em;
        }
    }

    @media only screen and (min-width: 768px){
        h1 {
            font-size: 2em;
        }

        .emoji-vert {
            width: 175px;
            top: 22%;
        }

        .emoji-bleu {
            width: 100px;
        }

        .emoji-rose {
            width: 200px;
        }

        .etoile2 {
            top: 23%;
        }

        .etoile3 {
            right: 60%;
            top: 35%;
        }

        .etoile4 {
            left: 30%;
        }

        .etoile_vide2 {
            left: 20%;
        }

        .etoile_vide3 {
            left: 33%;
        }
    }

    @media only screen and (min-width: 1024px){
        .emoji-vert {
            width: 250px;
            top: 47%;
            left: 1%;
        }

        .emoji-bleu {
            width: 150px;
        }

        .emoji-rose {
            width: 275px;
            bottom: 1%;
            right: 22%;
        }

        .etoile1 {
            top: 20%
        }

        .etoile2 {
            top: 32%;
            right: 7%
        }

        .etoile3 {
            right: 78%;
            top: 68%;
        }

        .etoile4 {
            left: 40%;
            bottom: 10%;
        }

        .etoile5 {
            bottom: 22%;
            right: 14%;
        }

        .etoile_vide1 {
            left: 23%;
            top: 17%;
        }

        .etoile_vide2 {
            left: 34%;
            bottom: 15%;
        }

        .etoile_vide3 {
            left: 43%;
            bottom: 17%;
        }

        .etoile_vide4 {
            bottom: 18%;
            right: 17%;
        }
    }
</style>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  <title>Site en maintenance</title>
</head>
<body>
    <img src="{{ asset('assets/img/etoileBlocBleu-1.png') }}" alt="Étoile vide" class='etoile_vide etoile_vide1'>
    <img src="{{ asset('assets/img/etoileBlocBleu-1.png') }}" alt="Étoile vide" class='etoile_vide etoile_vide2'>
    <img src="{{ asset('assets/img/etoileBlocBleu-1.png') }}" alt="Étoile vide" class='etoile_vide etoile_vide3'>
    <img src="{{ asset('assets/img/etoileBlocBleu-1.png') }}" alt="Étoile vide" class='etoile_vide etoile_vide4'>
    <img src="{{ asset('assets/img/etoileBlocBleu-2.png') }}" alt="Étoile pleine" class='etoile etoile1'>
    <img src="{{ asset('assets/img/etoileBlocBleu-2.png') }}" alt="Étoile pleine" class='etoile etoile2'>
    <img src="{{ asset('assets/img/etoileBlocBleu-2.png') }}" alt="Étoile pleine" class='etoile etoile3'>
    <img src="{{ asset('assets/img/etoileBlocBleu-2.png') }}" alt="Étoile pleine" class='etoile etoile4'>
    <img src="{{ asset('assets/img/etoileBlocBleu-2.png') }}" alt="Étoile pleine" class='etoile etoile5'>
    <img src="{{ asset('assets/img/emoji-6-bloc-3-whoAreWe.png') }}" alt="Emoji vert" class="emoji-vert">
    <img src="{{ asset('assets/img/emoji-9-bloc-3-whoAreWe.png') }}" alt="Emoji bleu" class="emoji-bleu">
    <img src="{{ asset('assets/img/Persos-maquette-(1).png') }}" alt="Emoji rose" class="emoji-rose">
    <div class='container'>
        <h1><strong>🚧 Flexinuse en maintenance 🚧</strong></h1>
        <p>Nous donnons un petit coup de frais à notre site pour vous offrir une expérience encore plus fluide et flexible<br>Notre équipe travaille activement sur la mise à jour.<br>Revenez bientôt, ça va valoir le coup !</p>
    </div>
</body>
</html>
