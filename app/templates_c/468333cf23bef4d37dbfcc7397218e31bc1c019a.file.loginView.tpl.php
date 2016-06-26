<?php /* Smarty version Smarty-3.1.17, created on 2015-06-13 17:23:48
         compiled from "C:\xampp\htdocs\przypomnij.mi-oskar\app\przyp\loginView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21466557472f278ea40-31128051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468333cf23bef4d37dbfcc7397218e31bc1c019a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\przypomnij.mi-oskar\\app\\przyp\\loginView.tpl',
      1 => 1433793300,
      2 => 'file',
    ),
    '8c1497968b5e19c3024816ff442e8741364cbfed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\przypomnij.mi-oskar\\templates\\main.tpl',
      1 => 1434206956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21466557472f278ea40-31128051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_557472f2803d58_92868882',
  'variables' => 
  array (
    'conf' => 0,
    'page_title' => 0,
    'usr_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557472f2803d58_92868882')) {function content_557472f2803d58_92868882($_smarty_tpl) {?><!DOCTYPE html>
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
                  
                  <h3>
                  <?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msg']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
                   
                      <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>

                   
                    <?php } ?>

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
                            <button type="submit"  class="btn btn-primary">Zaloguj</button>
                    </form>
                          </div>
                        </div>
                      </div>
                    </div>



            
        
    </header>


    
    <div class="l-content">

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                
                  

            </div>
        </div>
    </section>


    </div>




    <section id="services">
        

                   
 
    </section>

   <section id="form">

                 
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
