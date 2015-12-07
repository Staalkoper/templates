<?php $color = get_option("color", "tarita"); ?>
<?php $theme = get_option("theme", "tarita"); ?>

<script>
    function tarita_save_color() {
        var color = $('#tarita_select_color').val();
        if ($('#tarita_color').length == 0) {

            var fileref = document.createElement("link")
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css")
            fileref.setAttribute("id", "tarita_color")
            //  fileref.setAttribute("href", filename)
            parent.document.getElementsByTagName("head")[0].appendChild(fileref)
        }
        parent.$('#tarita_color').attr('href', '<?php print TEMPLATE_URL; ?>assets/css/theme-colors/' + color + '.css');

    }
</script>
<div class="mw-ui-box">
    <div class="mw-ui-box-header">
        <span>Template settings</span>
    </div>
    <div class="panel-body">


        <!-- Theme Colors -->
        <div class="style-switcher-heading">Theme Colors</div>

        <select name="color" class="mw-ui-field mw-ui-field-medium  mw_option_field" id="tarita_select_color" option-group="tarita"
                onchange="tarita_save_color()">
            <option value="">Choose name</option>
            <option value="default" <?php if (('default' == trim($color))): ?>  selected="selected"  <?php endif; ?>>
                Green(default)
            </option>
            <option value="blue" <?php if (('blue' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Blue
            </option>
            <option value="red" <?php if (('red' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Red
            </option>
            <option value="orange" <?php if (('orange' == trim($color))): ?>  selected="selected"  <?php endif; ?>>
                Orange
            </option>
            <option value="purple" <?php if (('purple' == trim($color))): ?>  selected="selected"  <?php endif; ?>>
                Purple
            </option>
            <option
                value="dark-blue" <?php if (('dark-blue' == trim($color))): ?>  selected="selected"  <?php endif; ?>>
                Dark blue
            </option>
            <option value="dark-red" <?php if (('dark-red' == trim($color))): ?>  selected="selected"  <?php endif; ?>>
                Dark red
            </option>
        </select>

        <!-- Theme Skins -->
        <div class="style-switcher-heading">Theme Skins</div>
        <select name="theme" class="mw-ui-field mw-ui-field-medium mw_option_field" id="tarita_select_theme" option-group="tarita">
            <option value="dark" <?php if ('dark' == ($theme)): ?>  selected="selected"  <?php endif; ?>>
                Dark
            </option>
            <option value="light" <?php if ('light' == ($theme)): ?>  selected="selected"  <?php endif; ?>>
                Light
            </option>
        </select>

        <p>

        <p>

        <div class="mw-ui-box mw-ui-box-content mw-ui-box-important">In order for you to see all the changes, you have
            to refresh the page!
        </div>
    </div>
</div>