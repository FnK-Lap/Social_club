<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 18:05:23
         compiled from "views/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4121130495384b7c3699335-16719465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376d59a4ac5cf0382ea246a38beb973175c56ef2' => 
    array (
      0 => 'views/templates/login.tpl',
      1 => 1401173694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4121130495384b7c3699335-16719465',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384b7c3833da0_33074590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384b7c3833da0_33074590')) {function content_5384b7c3833da0_33074590($_smarty_tpl) {?><header>
	<div id='title-logo-center'>
		Social<span class='title-color'>Club</span>
	</div>
	<div id='bloc_login'>
	    <div class='bloc_logincontent'>
	        <div class='bloc_headercontent'>
	            <h1 class="text-login">Login</h1>
	        </div>
	        <form class='form_login' action="index.php?action=login" method="post"><br>
	            <table>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="email" name='email' placeholder="Email"  value='<?php echo (($tmp = @$_POST['email'])===null||$tmp==='' ? '' : $tmp);?>
'>
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                <tr/>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="password" name='pass' placeholder="Password" style="margin-bottom: 35px;" >
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                </tr>
	            </table>
                <div class='bloc_bodycontent'>
                    <div class='bloc_bodycentercontent'>
                        <div class='bloc_bodygroup'>
                            <input type='submit' class="btn_body_bouton"></input>
                        </div>
                    </div>
                </div>
	        </form>
	    </div>
	</div>
</header><?php }} ?>
