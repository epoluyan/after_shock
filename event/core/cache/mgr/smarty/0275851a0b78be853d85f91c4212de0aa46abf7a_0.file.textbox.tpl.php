<?php /* Smarty version 3.1.27, created on 2018-03-10 16:48:41
         compiled from "/home/u173805/amnesiyaru/www/event/manager/templates/default/element/tv/renders/input/textbox.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14228001975aa3e239a9e821_86872793%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0275851a0b78be853d85f91c4212de0aa46abf7a' => 
    array (
      0 => '/home/u173805/amnesiyaru/www/event/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1513251612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14228001975aa3e239a9e821_86872793',
  'variables' => 
  array (
    'tv' => 0,
    'style' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa3e239b4d326_21702864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa3e239b4d326_21702864')) {
function content_5aa3e239b4d326_21702864 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14228001975aa3e239a9e821_86872793';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
	<?php echo $_smarty_tpl->tpl_vars['style']->value;?>

	tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['minLength']) {?>,minLength: <?php echo $_smarty_tpl->tpl_vars['params']->value['minLength'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxLength']) {?>,maxLength: <?php echo $_smarty_tpl->tpl_vars['params']->value['maxLength'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['regex']) {?>,regex: new RegExp('<?php echo $_smarty_tpl->tpl_vars['params']->value['regex'];?>
')<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['regexText']) {?>,regexText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['regexText'];?>
'<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>