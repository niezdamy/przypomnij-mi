<?php /* Smarty version Smarty-3.1.17, created on 2016-06-26 20:04:43
         compiled from "C:\xampp\htdocs\przypomnij.mi-oskar\app\przyp\MainView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252335570a41ad53458-69959280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c292912a6e36d8576cf61775514e4f1d25c8648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\przypomnij.mi-oskar\\app\\przyp\\MainView.tpl',
      1 => 1433792843,
      2 => 'file',
    ),
    '8c1497968b5e19c3024816ff442e8741364cbfed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\przypomnij.mi-oskar\\templates\\main.tpl',
      1 => 1466963260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252335570a41ad53458-69959280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5570a41ae0ec70_71275982',
  'variables' => 
  array (
    'conf' => 0,
    'page_title' => 0,
    'usr_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570a41ae0ec70_71275982')) {function content_5570a41ae0ec70_71275982($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Przypomnienia online">
    <meta name="author" content="Oskar Poprawski">

  

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a class="page-scroll" href="#portfolio" data-toggle="modal" data-target="#myLoginModal" >
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['usr_name']->value)===null||$tmp==='' ? "Zaloguj" : $tmp);?>
</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#form">Ustaw Przypomnienie</a>
                    </li>


                    <li>
                        <a class="page-scroll" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>

            
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Przypomnij.mi!</h1>
                <hr>
                <p>Ustaw swoje przypomnienie</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Więcej!</a>
            </div>
        </div>

            
        
    </header>


    
    <div class="l-content">

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                
                

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Witamy w naszym serwisie</h2>
                    <hr class="light">
                    <p class="text-faded">Pomożemy Ci przypomnieć o wydarzeniach, które są dla Ciebie ważne</p><br>

                    <p class="text-faded">Tylko parę kroków dzieli Cię od korzystania z naszego serwisu który jest kompletnie darmowy</p><br>

                    <h2 class="section-heading">Nie zwlekaj, ustaw przypomnienie już dziś!</h2><br>


                    <br>
                    <a href="#services" class="btn btn-default btn-xl page-scroll">Więcej!</a>
                </div>



            </div>
        </div>
    </section>


    </div>


    <section id="services">
        

                 

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

 
    </section>

   <section id="form">

                

 <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">

                

  <h2>Wypełnij formularz</h2>




    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sql_insert" method="post" data-toggle="modal">

<div class="row">
  <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Tytuł</span>
                             <input type="text" class="form-control" placeholder="Nazwa wydarzenia" name="nazwa" aria-describedby="sizing-addon1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
">
                            </div> <br>

  </div>

    <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Data </span>
                             <input type="date" class="form-control" placeholder="Data wydarzenia" name="data" aria-describedby="sizing-addon1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data;?>
">
                            </div> <br>
   </div>


   <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Czas </span>
                             <input type="time" class="form-control" placeholder="Data wydarzenia" name="czas" aria-describedby="sizing-addon1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
">
                            </div> <br>
   </div>



    <div class="col-md-6 col-md-offset-3">

                             <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Mail </span>
                             <input type="mail" class="form-control" placeholder="Adres Mailowy" name="mail" aria-describedby="sizing-addon1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
">
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

                      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sql_login" method="post" data-toggle="modal">

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
                             <input type="mail" class="form-control" placeholder="Adres Mailowy" name="mailL" aria-describedby="sizing-addon1" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->mailL;?>
">
                            </div> 
                            

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Pass </span>
                             <input type="password" class="form-control" placeholder="Hasło" name="hasloL" aria-describedby="sizing-addon1" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->hasloL;?>
">
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



                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sql_rejestracja" method="post">

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Imie </span>
                             <input type="text" class="form-control" placeholder="Imie" name="imieR" aria-describedby="sizing-addon1" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->imieR;?>
">
                            </div> 


                           <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1">  Mail </span>
                             <input type="text" class="form-control" placeholder="Adres Mailowy" name="mailR" aria-describedby="sizing-addon1" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->mailR;?>
">
                            </div> 

                            

                            <div class="input-group input-group-lg">
                             <span class="input-group-addon" id="sizing-addon1"> Pass </span>
                             <input type="password" class="form-control" placeholder="Hasło" name="hasloR" aria-describedby="sizing-addon1" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->hasloR;?>
">
                            </div> 


                          </div>
                          <div class="modal-footer">
                            <button type="submit"  class="btn btn-primary">Zarejestruj</button>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>


    </section>


    <section id="contact">
       
                



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
 
                 

    </section>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
<?php }} ?>
