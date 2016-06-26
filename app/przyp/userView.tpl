{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Przypomnij.mi!</h1>
                <hr>
                <h1>Witaj w trybie użytkownika</h1>
                <hr>
                <p>Możesz przeglądać przypomnienia i nimi zarządzać </p>
             
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Więcej!</a>
            </div>
        </div>
{/block}

{block name=content1}

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Oto twoje przypomnienia:</h2>
                    <hr class="light">


                    {foreach $res as $row}
                    

                        <h3>Numer :  {$row['id_przyp']}     </h3>

                        <h3>Nazwa :  {$row['Nazwa']}        </h3>

                        <h3>Data :  {$row['Data']}          </h3>

                        <h3>Czas :  {$row['Czas']}          </h3>

                        <h3>Miejsce :  {$row['Miejsce']}    </h3>

                        <h3>Opis :  {$row['Opis']}       </h3>

                       

                        <a href="#services" data-toggle="modal" name="guzik" type="submit" class="btn btn-default btn-xl page-scroll" data-guzik="{$row['id_przyp']}" data-target="#updateModal" >Edytuj!</a>


                        <br> <hr class="light"> <hr><br>

                    {/foreach}


                </div>

{/block}




{block name=content3}

 <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">

                

  <h2>Dodaj przypomnienie</h2>




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
                             <input type="mail" class="form-control" placeholder="{$usr_name|default:"Mail"}" name="mail" aria-describedby="sizing-addon1" value="{$usr_name|default:"Mail"}">
                            </div> <br>
    </div>
  
  </div>
                <a href="#" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myModal" >Ustaw przypomnienie!</a>

                <div class="col-lg-12 text-center">

                    <br><button type="submit" class =" btn btn-primary btn-xl page-scroll" > Dodaj! </button>

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


                       <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">

                      <form action="{$conf->action_root}sql_update" method="post" data-toggle="modal">

                           <div class="modal-dialog bgColorBlack">
                          <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="updateModal" ></h4>
                            </div>


                            <div class="modal-body">
                            
                             <h2 class="section-heading" .text-muted>Wprowadź dane</h2>


                             <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Numer  : </span>
                             <input type="text" class="form-control"  name="id" aria-describedby="sizing-addon1" value = "{$form->id}">
                            </div> 

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Nazwa : </span>
                             <input type="text" class="form-control" placeholder="mail" name="nazwa" aria-describedby="sizing-addon1" value = "{$form->nazwa}">
                            </div> 
                            
                              <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Data__: </span>
                             <input type="date" class="form-control" placeholder="Data wydarzenia" name="data" aria-describedby="sizing-addon1" value = "{$form->data}">
                            </div> 

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Czas__: </span>
                             <input type="time" class="form-control" placeholder="Czas wydarzenia" name="czas" aria-describedby="sizing-addon1" value = "{$form->czas}">
                            </div> 
                            

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Miejsce: </span>
                             <input type="text" class="form-control" placeholder="Miejsce wydarzenia" name="miejsce" aria-describedby="sizing-addon1" value = "{$form->miejsce}">
                            </div> 

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Opis__: </span>
                             <input type="text" class="form-control" placeholder="Opis wydarzenia" name="opis" aria-describedby="sizing-addon1" value = "{$form->opis}">
                            </div> 
                            

                          </div>
                          <div class="modal-footer">

                            
                            <button type="submit"  class="btn btn-primary">Edytuj</button>
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




