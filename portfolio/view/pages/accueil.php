<main>

    <header>

    <div id="header-wrap">
      <div id="header">

        <h1>Hugi Romane</h1>

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
                  <a href="http://romaneh.marmier.codeur.online/portfolio/CVHugiRomane.pdf" target="_blank" id="cvgit">CV</a>


                  <a href="https://github.com/Lindorya" target="_blank" id="cvgit">Github</a>
                </div>


      </div>
      </section>

      <section class="competences">

        <div class="container">

        <h2 id="competences">Compétences</h2>

        <div class="row">
          <div class="col-xs-2">
            <img id="comp" src="view/img/html.png">
          </div>

          <div class="col-xs-2">
            <img id="comp" src="view/img/css.png">
          </div>

          <div class="col-xs-2">
            <img id="compt" src="view/img/triangle.png">
          </div>

          <div class="col-xs-2">
            <img id="comp" src="view/img/js.png">
          </div>

          <div class="col-xs-2">
            <img id="comp" src="view/img/php.png">
          </div>
        </div>

      </div>
      </section>

      <section class="portfolio">
        <div class="container">

        <h2 id="portfolio">Portfolio</h2>

        <div class="row">
          <div class="col-xs-6">

          <div id="app">
            <img id="portf" @click="showModal = true" src="view/img/1.png">
              <modal v-if="showModal" @close="showModal = false">
                <img slot="header" src="view/img/1.png">
              </modal>
            </div>

            <img id="portf" @click="showModal = true" src="view/img/3.png">


          </div>

          <div class="col-xs-6">
            <a href="#"><img id="portf" src="view/img/2.png"></a>
            <a href="#"><img id="portf" src="view/img/4.png"></a>

          </div>
        </div>

      </div>
      </section>

      <section class="contact">
        <div class="container">

        <h2 id="contact">Pour me contacter</h2>

        <form method="post" action="" name="formulaire" id="formulaire" enctype="multipart/form-data" >

                        <div>
                          <img id="fusee" src="view/img/fusee.png">
                        </div>

                        <div>
  												<input id="nom" name="nom" placeholder="&nbsp;&nbsp;Votre nom"><br>
  												<span id="nomerr" class="error"></span>
  											</div>

  											<div>
  												<input id="mail" name="mail" placeholder="&nbsp;&nbsp;Votre mail" value=""><br>
  												<span id="mailerr" class="error"></span>
  											</div>

                        <div>
  												<textarea id="mess" name="mess" rows="15" cols="100" placeholder="&nbsp;&nbsp;Écrivez votre message ici"></textarea><br>
  												<span id="messerr" class="error"></span><br>
  											</div>

                          <input id="button" name="submit" type="submit" value="Envoyer"/>

  										</div>
  							</div>
  						</div>

  									</form>


  						<span id="message"></span>
  						<span id="msg_all"></span>


        </div>


      </section>

      <section class="reseaux">
        <div class="container">

        <h2 id="reseaux">Vous pouvez aussi me retrouver sur les réseaux sociaux !</h2>

          <div class="row">
            <div class="col-xs-4">
              <a href="#"><img id="logors" src="view/img/fb.png"></a>
            </div>
            <div class="col-xs-4">
              <a href="#"><img id="logors" src="view/img/twitter.png"></a>
            </div>
            <div class="col-xs-4">
              <a href="#"><img id="logors" src="view/img/linkedin.png"></a>
            </div>
          </div>

        </div>
      </section>



      <script type="text/x-template" id="modal-template">
        <transition name="modal">
          <div class="modal-mask">
            <div class="modal-wrapper">
              <div class="modal-container">

                <div class="modal-header">
                  <slot name="header">
                    default header
                  </slot>
                </div>

                <div class="modal-body">
                  <slot name="body">
                  <p id="modbod">Titre</p>
                  </slot>
                </div>

                <div class="modal-footer">
                  <slot name="footer">
                    <p id="modfoot">Description, Description, Description, Description, Description, Description, Description, Description, Description, Description, Description</p>
                    <button class="modal-default-button" @click="$emit('close')">
                      OK
                    </button>
                  </slot>
                </div>
              </div>
            </div>
          </div>
        </transition>
      </script>








    <script src="https://unpkg.com/vue/dist/vue.js"></script>
























      <script>
        Vue.component('modal', {
          template: '#modal-template'
        })

        // start app
        new Vue({
          el: '#app',
          data: {
            showModal: false
          }
        })
      </script>
























































      <style>
            .modal-mask {
              position: fixed;
              z-index: 9998;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, .5);
              display: table;
              transition: opacity .3s ease;
            }

            .modal-wrapper {
              display: table-cell;
              vertical-align: middle;
            }

            .modal-container {
              width: 20em;
              margin: 0px auto;
              background-color: #fff;
              border-radius: 1em;
              box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
              transition: all .3s ease;
              font-family: Helvetica, Arial, sans-serif;
            }

            .modal-header img {
              width: 15em;
              display:block;
              margin:0 auto;
            }

            .modal-body {
              margin: 20px 0;
            }


            .modal-default-button {
              display:block;
              margin:0 auto;
              border:none;
              background-color:#d5afc8;
              -webkit-box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.75);
              -moz-box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.75);
              box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.75);
              border-radius: 0.5em;
              padding:0.5em 2em 0.5em 2em;
              color:white;
              font-family: 'Open Sans Condensed', sans-serif;
            }

            /*
             * The following styles are auto-applied to elements with
             * transition="modal" when their visibility is toggled
             * by Vue.js.
             *
             * You can easily play with the modal transition by editing
             * these styles.
             */

            .modal-enter {
              opacity: 0;
            }

            .modal-leave-active {
              opacity: 0;
            }

            .modal-enter .modal-container,
            .modal-leave-active .modal-container {
              -webkit-transform: scale(1.1);
              transform: scale(1.1);
            }

            #modbod {
              font-family: 'Open Sans Condensed', sans-serif;
              font-size:2em;
              font-weight: bold;
            }

            #modfoot {
              font-family: 'Open Sans Condensed', sans-serif;
              font-size:1em;
              margin-bottom:2em;
            }

      </style>
