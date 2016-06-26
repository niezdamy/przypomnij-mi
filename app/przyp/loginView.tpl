{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=header}
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Przypomnij.mi!</h1>
                <hr>
                  
                  <h3>
                  {foreach $msg->getInfos() as $inf}
                   
                      {$inf}
                   
                    {/foreach}

                  </h3>

                <br>
                <h3>Zaloguj się za pomocą swojego maila</h3>
                <br>
                <h3>Przy pierwszym logowaniu ustawiasz hasło</h3>
                <br>

                <a href="#about" class="btn btn-primary btn-xl page-scroll">Więcej!</a>

                  <a href="#" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myLoginModal" >Zaloguj!</a>

            </div>
            </div>


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

                     
                    <!-- Modal 1 -->
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
                            <button type="submit"  class="btn btn-primary">Zaloguj</button>
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



