<?php /* Smarty version Smarty-3.0.6, created on 2011-06-03 13:43:42
         compiled from ".\templates\/movie/edit_genre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200474de8c8ee266646-11319581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d429b1810c2812a6f5b33f11dc2a020ae9f539a' => 
    array (
      0 => '.\\templates\\/movie/edit_genre.tpl',
      1 => 1307100965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200474de8c8ee266646-11319581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<label>Genre</label>
<input type="text" name="autoCompleteGenre" id="autoCompleteGenre"/>
<div id="associatedGenres">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('movie')->value['genre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
        <span class="genre">
            <input type="hidden" name="genre[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['genre_id'];?>
" />
            <span class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
</span>
            <span class="delete">L&ouml;schen</span>
        </span>
    <?php }} ?>
</div>