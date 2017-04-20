@extends('template')

@section('contenu')

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio Hugi Romane</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{asset('css/portfolio.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('js/main.js')}}" rel="stylesheet" type="text/js">
    </head>

    <body>
                <header>

                  <div id="header-wrap">
                  <div id="header">

                    <h1>Romane Hugi</h1>

                  </div>
                  </div>

          </header>

          <section class="informations">

          <div class="container">

            <p id="infosuite">Développeuse Web sur Besançon</p>
              <hr>
              <p id="description">Fortement intéressée par l'informatique, les nouvelles technologies, la création et le graphisme, j'ai débuté une formation de développeuse Web le 2 Novembre 2016 à l'Access Code School de Besançon.</p>
                <p id="lienspersos">Vous pouvez visualiser mon CV ainsi que mon Github ci dessous !</p>


                    <div class="liens">

                      <a href="http://romaneh.marmier.codeur.online/portfolio/CVHugiRomane.pdf" target="_blank" id="cvgit">CV<br><img id="filecv" src="{{asset('images/file.png')}}"><br></a>



                      <a href="https://github.com/Lindorya" target="_blank" id="cvgit">Github<img id="github" src="{{asset('images/github.png')}}"></a>

                    </div>


          </div>
          </section>

          <section class="competences">

            <div class="container">

            <h2 id="competences">Compétences</h2>

            <div class="row">
              <div class="col-xs-2">
                <img id="comp" src="{{asset('images/html.png')}}">
              </div>

              <div class="col-xs-2">
                <img id="comp" src="{{asset('images/css.png')}}">
              </div>

              <div class="col-xs-2">
                <img id="compt" src="{{asset('images/triangle.png')}}">
              </div>

              <div class="col-xs-2">
                <img id="comp" src="{{asset('images/js.png')}}">
              </div>

              <div class="col-xs-2">
                <img id="comp" src="{{asset('images/php.png')}}">
              </div>
            </div>

          </div>
          </section>

          <section class="portfolio">
            <div class="container">

            <h2 id="portfolio">Portfolio</h2>

            <div class="row">
              <div class="col-xs-6">
                <a href="http://romaneh.marmier.codeur.online/Jeu-final/Jeu%20zombie/" target="_blank"><img id="portf" src="{{asset('images/3.png')}}"></a>
                <div id="descportf"><p id="titreportf">Rainbow Zombie</p>
                <p id="descriptionportf">Jeu, HTML CSS et JS</p>
                <p id="dateportf">04/12/2016</p></div>
                <a href="http://romaneh.marmier.codeur.online/wordpress/" target="_blank"><img id="portf" src="{{asset('images/6.png')}}"></a>
                <div id="descportf"><p id="titreportf">Site Wordpress&nbsp;</p>
                <p id="descriptionportf">Maquette Photoshop en Wordpress</p>
                <p id="dateportf">08/01/2017</p></div>
                <a href="http://romaneh.marmier.codeur.online/Mini-blog/" target="_blank"><img id="portf" src="{{asset('images/8.png')}}"></a>
                <div id="descportf"><p id="titreportf">Blog</p>
                <p id="descriptionportf">Blog HTML CSS BOOTSTRAP AJAX PHP</p>
                <p id="dateportf">22/01/2016</p></div>
                <a href="http://romaneh.marmier.codeur.online/generateur-avatar/editeur.php" target="_blank"><img id="portf" src="{{asset('images/10.png')}}"></a>
                <div id="descportf"><p id="titreportf">Avatars</p>
                <p id="descriptionportf">Générateur d'avatar,HTML CSS BOOTSTRAP PHP</p>
                <p id="dateportfb">05/02/2016</p></div>

              </div>

              <div class="col-xs-6">
                <img id="portf" src="{{asset('images/5.png')}}">
                <div id="descportf"><p id="titreportf">Mock Up Maquette</p>
                <p id="descriptionportf">Maquette sur Photoshop</p>
                <p id="dateportf">01/01/2017</p></div>
                <a href="http://romaneh.marmier.codeur.online/Espace-membre/espace_membre/ " target="_blank"><img id="portf" src="{{asset('images/7.png')}}"></a>
                <div id="descportf"><p id="titreportf">Espace membre</p>
                <p id="descriptionportf">Espace membres, HTML CSS PHP</p>
                <p id="dateportf">15/01/2017</p></div>
                <a href="http://romaneh.marmier.codeur.online/Files-explorer/" target="_blank"><img id="portf" src="{{asset('images/9.png')}}"></a>
                <div id="descportf"><p id="titreportf">Explorateur</p>
                <p id="descriptionportf">Explorateur fichiers HTML CSS PHP</p>
                <p id="dateportf">29/01/2017</p></div>
                <a href="http://romaneh.marmier.codeur.online/dataproject-termin%C3%A9/index.php?param_url=home.php" target="_blank"><img id="portf" src="{{asset('images/12.png')}}"></a>
                <div id="descportf"><p id="titreportf">Besac Tattoo</p>
                <p id="descriptionportf">Site depuis un jeu de donnée HTML CSS PHP</p>
                <p id="dateportfb">12/03/2017</p></div>
              </div>

          </div>
          </section>

          <section class="contact">
            <div class="container">

            <h2 id="contact">Pour me contacter</h2>

                            <div>
                              <img id="fusee" src="{{asset('images/fusee.png')}}">
                            </div>

                            <br>
                          <div class="col-sm-offset-3 col-sm-6">
                            <div class="panel panel-info">
                              <div class="panel-body">
                                {!! Form::open(['url' => 'contact']) !!}
                                  <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                    {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                                    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                                  </div>
                                  <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                  </div>
                                  <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                                    {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                                    {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                                  </div>
                                  {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                                {!! Form::close() !!}
                              </div>
                            </div>
                          </div>

                  </div>


          </section>

          <section class="reseaux">
            <div class="container">

            <h2 id="reseaux">Vous pouvez aussi me retrouver sur</h2><br>
            <a href=""><img id="linkedin" src="{{asset('images/linkedin.png')}}"></a>


            </div>
          </section>

    </body>
</html>
@endsection
