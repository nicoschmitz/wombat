<select name="format">
    {foreach item=item from=$format}
        {if $item.name == $movie.format}
            <option selected="selected">{$item.name}</option>
        {else}
            <option>{$item.name}</option>
        {/if}
    {/foreach}
</select>