<?php /* Smarty version 2.6.26, created on 2010-12-11 21:17:51
         compiled from movie/all.tpl */ ?>
<div id="movies">
    <table id="movies" class="tablesorter">
        <thead>
            <tr>
                <th class="name">Name</th>
                <th class="genre">Genre</th>
                <th class="rating">Bewertung</th>
                <th class="format">Format</th>
                <th class="date">angelegt am</th>
                <th class="edit"></th>
                <th class="delete"></th>
            </tr>
        </thead>
        <tbody>
            <?php $_from = $this->_tpl_vars['movie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <tr id="<?php echo $this->_tpl_vars['item']['id']; ?>
" onclick="fancyAjaxLoader('<?php echo $this->_tpl_vars['item']['id']; ?>
','movie','show','Detailansicht');">
                <td class="name"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
                <td class="genre"><?php echo $this->_tpl_vars['item']['genre']; ?>
</td>
                <td class="rating"><?php echo $this->_tpl_vars['item']['rating']; ?>
</td>
                <td class="format"><?php echo $this->_tpl_vars['item']['format']; ?>
</td>
                <td class="date"><?php echo $this->_tpl_vars['item']['date']; ?>
</td>
                <td class="edit" onclick="fancyAjaxLoader('<?php echo $this->_tpl_vars['item']['id']; ?>
','movie','editShow','Bearbeiten');"><img src="images/pencil.png" alt="edit" /></td>
                <td class="delete" onclick="fancyAjaxLoader('<?php echo $this->_tpl_vars['item']['id']; ?>
','movie','delete','Löschen');"><img src="images/delete.png" alt="delete" /></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
</div>