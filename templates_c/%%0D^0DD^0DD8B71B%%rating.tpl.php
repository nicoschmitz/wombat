<?php /* Smarty version 2.6.26, created on 2010-12-12 13:14:52
         compiled from rating.tpl */ ?>
<select name="rating">
    <?php $_from = $this->_tpl_vars['rating']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <?php if ($this->_tpl_vars['item']['name'] == $this->_tpl_vars['movie']['format']): ?>
            <option selected="selected"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
        <?php else: ?>
            <option><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</select>