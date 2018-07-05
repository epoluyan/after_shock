<?php /* Smarty version 3.1.27, created on 2018-03-11 09:12:45
         compiled from "/home/u173805/amnesiyaru/www/event/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19264288035aa4c8dd69fbf8_56387049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2965cbd96656e4a1919fd4c0e1fe6700581ee145' => 
    array (
      0 => '/home/u173805/amnesiyaru/www/event/manager/templates/default/welcome.tpl',
      1 => 1513251612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19264288035aa4c8dd69fbf8_56387049',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa4c8dd6df7d1_15346103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa4c8dd6df7d1_15346103')) {
function content_5aa4c8dd6df7d1_15346103 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19264288035aa4c8dd69fbf8_56387049';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>