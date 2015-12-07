Effect type
<?php $effects_preset = get_option('effects_preset', $params['id']); ?>
<select name="effects_preset" class="mw_option_field">

    <option>Default</option>
    <option value="easeinout" <?php if($effects_preset == 'easeinout'): ?> selected <?php endif; ?>>EaseIn - EasOut</option>
    <option value="zoom" <?php if($effects_preset == 'zoom'): ?> selected <?php endif; ?>>zoom</option>

</select>