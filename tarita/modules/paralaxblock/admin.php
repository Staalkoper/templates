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
<div class="mw-row tab mw-ui-box mw-ui-box-content">
    <div class="mw-col">
        <p>Choose background for this paralax block:</p>
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
<module type="admin/modules/templates"  />