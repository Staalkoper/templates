<input type="hidden" name="bgpic" class="mw_option_field" id="bgpic">
<script type="text/javascript">

    $(document).ready(function () {

        var uploader = mw.uploader({
            filetypes: "images,videos",
            multiple: false,
            element: "#mw_uploader"
        });

        $(uploader).bind("FileUploaded", function (obj, data) {
            mw.$("#mw_uploader_loading").hide();
            mw.$("#mw_uploader").show();
            mw.$("#upload_backup_info").html("");
            $('#bgpic').val(data.src);
            $('#bgpic').trigger('change')
        });

        $(uploader).bind('progress', function (up, file) {
            mw.$("#mw_uploader").hide();
            mw.$("#mw_uploader_loading").show();
            mw.$("#upload_backup_info").html(file.percent + "%");
        });

        $(uploader).bind('error', function (up, file) {
            mw.notification.error("The file is not uploaded.");
        });

    });

</script>
<div class="mw-row">
<div class="mw-col" style="width:50%">
    <p>How many slides do you want?</p>
    <input name="slidescount" class="mw_option_field mw-ui-field" type="text"
           value="<?php echo get_option('slidescount', $params['id']) ?>">
</div>
<div class="mw-col" style="width:50%">
    <p>Choose background for the slider:</p>
    <div class="mw-row">
        <div class="mw-col">
            <p>Use the upload form below to change this page block's background</p>
            <span id="mw_uploader" class="mw-ui-btn"><span class="ico iupload"></span><span>Upload new background<span
                        id="upload_backup_info"></span></span></span>

            <button onclick="$('#bgpic').val('').change();">Remove page block's background</button>

        </div>

    </div>
</div>
</div>