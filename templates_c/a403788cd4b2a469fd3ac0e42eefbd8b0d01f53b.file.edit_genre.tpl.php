<?php /* Smarty version Smarty-3.0.6, created on 2011-07-25 20:41:12
         compiled from "./templates//movie/edit_genre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17186350294e2db8c8bb90a1-33858652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a403788cd4b2a469fd3ac0e42eefbd8b0d01f53b' => 
    array (
      0 => './templates//movie/edit_genre.tpl',
      1 => 1311470558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17186350294e2db8c8bb90a1-33858652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<label>Genre</label>
<input type="text" name="autoCompleteGenre" id="autoCompleteGenre"/>
<div id="associatedGenres">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('movie')->value->getGenre(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
        <span class="genre">
            <input type="hidden" name="genre[]" value="<?php echo $_smarty_tpl->getVariable('item')->value->getId();?>
" />
            <span class="text"><?php echo $_smarty_tpl->getVariable('item')->value->getName();?>
</span>
            <span class="delete">L&ouml;schen</span>
        </span>
    <?php }} ?>
</div>