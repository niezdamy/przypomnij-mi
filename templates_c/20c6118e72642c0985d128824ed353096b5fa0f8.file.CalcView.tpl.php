<?php /* Smarty version Smarty-3.1.17, created on 2015-04-19 23:50:57
         compiled from "C:\xampp\htdocs\kalkulator\app\CalcView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66915533f5ed8896c1-35616825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c6118e72642c0985d128824ed353096b5fa0f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\app\\CalcView.tpl',
      1 => 1429480255,
      2 => 'file',
    ),
    'aa9aac82c47b364e30ff116ab30f2a2df5235420' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\templates\\main.tpl',
      1 => 1429475171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66915533f5ed8896c1-35616825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5533f5ed9587b4_05093848',
  'variables' => 
  array (
    'conf' => 0,
    'page_description' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5533f5ed9587b4_05093848')) {function content_5533f5ed9587b4_05093848($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

    
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/pricing.css">
    <!--<![endif]-->

    
</head>

<body>


<div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">Your Logo</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Kalkulator</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Kontakt</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head">
       <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>

    </h1>
</div>



	<div class="content-wrapper">

    <div id="app_content" class="content">

	



<div class="l-content">

<form class="pure-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">

    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <h2>Jaka</h2>

                    <span class="pricing-table-price">
                        Kwota <span>
                    </span>
                </div>
				
				<br><br><br>
                
					<input type="text" class="pure-input-rounded" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" >
				
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
                    <h2>Jaki</h2>

                    <span class="pricing-table-price">
                        Czas <span>
                    </span>
                </div>
				
				<br><br><br>
					<input type="text" class="pure-input-rounded" placeholder="Czas" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" >
				
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-enterprise">
                <div class="pricing-table-header">
                    <h2>Jaki</h2>

                    <span class="pricing-table-price">
                        % <span>
                    </span>
                </div>

				<br><br><br>
                
					<input type="text" class="pure-input-rounded" placeholder="Procent" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" >
				
            </div>
        </div>
    </div> <!-- end pricing-tables -->

		
	<div>
	<center>
		
			<form class="pure-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		 <button class="button-choose pure-button">Oblicz</button>
		 
	</center>
	<br><br><br>
	</div>
	</form>

		
    <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Uważaj na kredyty!</h3>
                <p>
								
                   Świadomość posiadania wielkiego kretydu źle wpływa na samopoczucie i może doprowadzić do tragedii. Pomyśl o swoich bliskich zanim weźmiesz kredyt!
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Piłeś? Nie bierz!</h3>
                <p>
                    Czy wiesz że aż pisiont % kredytów jest wziętych pod wpływem alkoholu. Stwierdzeniem często poprzedzającym nieroztropne decyzje jest "Szwagier... JA NIE KUPIE?" 
                </p>
            </div>
        </div>

		</div> <!-- end information -->
		

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php } ?>
	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php } ?>
	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>



<div class="footer l-box">
    <p>
       przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora
    </p>
	
	<p>
        Witam w Oskarowym kalkulatorze kredytowym
    </p>
	
</div>




</body>
</html>
<?php }} ?>
