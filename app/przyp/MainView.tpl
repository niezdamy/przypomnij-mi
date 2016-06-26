{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Przypomnij.mi!</h1>
                <hr>
                <p>Ustaw swoje przypomnienie</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Więcej!</a>
            </div>
        </div>
{/block}

{block name=content1}

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Witamy w naszym serwisie</h2>
                    <hr class="light">
                    <p class="text-faded">Pomożemy Ci przypomnieć o wydarzeniach, które są dla Ciebie ważne</p><br>

                    <p class="text-faded">Tylko parę kroków dzieli Cię od korzystania z naszego serwisu który jest kompletnie darmowy</p><br>

                    <h2 class="section-heading">Nie zwlekaj, ustaw przypomnienie już dziś!</h2><br>


                    <br>
                    <a href="#services" class="btn btn-default btn-xl page-scroll">Więcej!</a>
                </div>

{/block}



{block name=content2}

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Dlaczego przypomnij.mi ?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Prosta idea</h3>
                        <p class="text-muted">Po prostu ustawiasz nazwę i datę, nasz serwis zajmie się resztą</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Zero spamu</h3>
                        <p class="text-muted">Otrzymujesz powiadomienia, które ustawisz, nie wysyłamy reklam!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Treściwe maile</h3>
                        <p class="text-muted">Przejrzysta i konkretna forma maili pozwala znaleźć potrzebne informacje </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Pokochasz nasz serwis</h3>
                        <p class="text-muted">Po zalogowaniu możesz zarządzać swoimi przypomniami.</p>
                    </div>
                </div>
            </div>

        </div>

            <div class="header-content-inner">
                
                
            </div>

            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <br><a href="#form" class="btn btn-primary btn-xl page-scroll">PRZYPOMNIJ!</a>

                  

                </div>
            </div>
        </div>
{/block} 




{block name=content3}

 <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">

                

  <h2>Wypełnij formularz</h2>




    <form action="{$conf->action_root}sql_insert" method="post" data-toggle="modal">

<div class="row">
  <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Tytuł</span>
                             <input type="text" class="form-control" placeholder="Nazwa wydarzenia" name="nazwa" aria-describedby="sizing-addon1" value="{$form->nazwa}">
                            </div> <br>

  </div>

    <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Data </span>
                             <input type="date" class="form-control" placeholder="Data wydarzenia" name="data" aria-describedby="sizing-addon1" value="{$form->data}">
                            </div> <br>
   </div>


   <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Czas </span>
                             <input type="time" class="form-control" placeholder="Data wydarzenia" name="czas" aria-describedby="sizing-addon1" value="{$form->czas}">
                            </div> <br>
   </div>



    <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Mail </span>
                             <input type="mail" class="form-control" placeholder="Adres Mailowy" name="mail" aria-describedby="sizing-addon1" value="{$form->mail}">
                            </div> <br>
    </div>
  
  </div>
                <a href="#" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myModal" >Ustaw przypomnienie!</a>

                <div class="col-lg-12 text-center">

                    <br><button type="submit" class =" btn btn-primary btn-xl page-scroll" > KNEFEL! </button>

                </div>

            </div>

        </form>

        </div>
    </aside>

                      <style>
                        .modal-header, h4, .close {
                            background-color: #f05f40;
                            color:white !important;
                            text-align: center;
                            font-size: 30px;
                            font-color: #000  ;
                        }
                        .modal-content {
                          background-color: #fff;
                          color:black;
                          }
                        .modal-footer {
                            background-color: #f9f9f9;
                        }
                      </style>




                       <div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                      <form action="{$conf->action_root}sql_login" method="post" data-toggle="modal">

                           <div class="modal-dialog bgColorBlack">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" >Zaloguj się!</h4>
                            </div>
                            <div class="modal-body">
                            
                             <h2 class="section-heading" .text-muted>Wprowadź dane</h2>

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Mail </span>
                             <input type="mail" class="form-control" placeholder="Adres Mailowy" name="mailL" aria-describedby="sizing-addon1" value = "{$form->mailL}">
                            </div> 
                            

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Pass </span>
                             <input type="password" class="form-control" placeholder="Hasło" name="hasloL" aria-describedby="sizing-addon1" value = "{$form->hasloL}">
                            </div> 


                          </div>
                          <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#rejestracjaModal" >Zarejestruj</button>

                            <button type="submit"  class="btn btn-primary">Zaloguj</button>
                    </form>
                          </div>
                        </div>
                      </div>
                    </div>








                     <!-- Modal 2 -->


                    <div class="modal fade" id="rejestracjaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">


                      <h2> Podaj dane do rejestracji </h2>
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Zarejestruj się!</h4>
                          </div>
                          <div class="modal-body">



                            <form action="{$conf->action_root}sql_rejestracja" method="post">

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Imie </span>
                             <input type="text" class="form-control" placeholder="Imie" name="imieR" aria-describedby="sizing-addon1" value = "{$form->imieR}">
                            </div> 


                           <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Mail </span>
                             <input type="text" class="form-control" placeholder="Adres Mailowy" name="mailR" aria-describedby="sizing-addon1" value = "{$form->mailR}">
                            </div> 

                            

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Pass </span>
                             <input type="password" class="form-control" placeholder="Hasło" name="hasloR" aria-describedby="sizing-addon1" value = "{$form->hasloR}">
                            </div> 


                          </div>
                          <div class="modal-footer">
                            <button type="submit"  class="btn btn-primary">Zarejestruj</button>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>

{/block}



{block name=content4}



 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Skontaktuj się z nami!</h2>
                    <hr class="primary">
                    <p>Jestesmy legalnie działającą firmą, możesz skontaktować się z naszym działem obsługi pod poniższym numerem telefonu bądź mailem</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>111-222-333</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">lorem@andrzej.com</a></p>
                </div>
            </div>
        </div>
{/block}




