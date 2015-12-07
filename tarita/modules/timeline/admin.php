<?php
only_admin_access();
$is_shop = false;
// dd($content);
$color = get_option('color', $params['id']);
$theme = get_option('theme', $params['id']);
$view_comments="yes";
$comments_name="Comments";
?>
<script>mw.lib.require('bootstrap3');</script>
<nav>
  <div class="tab-v1">
    <ul class="nav nav-tabs">
      <li class=""><a href="#home" data-toggle="tab">Overview</a></li>
      <li class="active"><a href="#settings" data-toggle="tab">Settings/Styles</a></li>
      <li><a href="#template" data-toggle="tab">Template</a></li>
    </ul>                
    <div class="tab-content">
      <div class="tab-pane fade  in" id="home">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-body">
<p> New improvements, bugs list or something like that....</p>
              </div>
            </div>     
          </div>
        </div>
      </div>
      <div class="tab-pane fade active in" id="settings">
        <div class="row">
          <div class="col-md-8">
            <div class="sky-form">
              <div class="panel-body">

                <div class="panel panel-default">
                  <div class="panel-heading">Choose colour:</div>
                  <div class="panel-body">
                    <p> Choose the default color for this module:</p>
                    <select  name="color" class="mw_option_field">
                      <option value="">Choose name</option>
                      <option value="default" <?php if(('default' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Green(default)</option>
                      <option value="blue" <?php if(('blue' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Blue</option>
                      <option value="red" <?php if(('red' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Red</option>
                      <option value="orange" <?php if(('orange' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Orange</option>
                      <option value="purple" <?php if(('purple' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Purple</option>
                      <option value="dark-blue" <?php if(('dark-blue' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Dark blue</option>
                      <option value="dark-red" <?php if(('dark-red' == trim($color))): ?>  selected="selected"  <?php endif; ?>>Dark red</option>
                    </select>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">Choose theme:</div>
                  <div class="panel-body">
                   <p> Choose between dark and light theme for Timeline module:</p>

                   <select  name="theme" class="mw_option_field">
                    <option value="dark" <?php if(('dark' == trim($theme))): ?>  selected="selected"  <?php endif; ?>>Dark</option>
                    <option value="light" <?php if(('light' == trim($theme))): ?>  selected="selected"  <?php endif; ?>>Light</option>
                  </select>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Some additional settings:</div>
                <div class="panel-body">
                 <p>"Read more" text:
                 <input name="read_more" class="mw_option_field" type="text" value="<?php print get_option('read_more', $params['id']); ?>"></p>
                 <p>Set a limit on the description:
                 <input name="character_limit" class="mw_option_field" type="text" value="<?php print get_option('character_limit', $params['id']); ?>"></p>
                 <p>Comments view and displaying:</p>
                  <select  name="view_comments" class="mw_option_field">
                    <option value="yes" <?php if(('yes' == trim($view_comments))): ?>  selected="selected"  <?php endif; ?>>Yes</option>
                    <option value="no" <?php if(('no' == trim($view_comments))): ?>  selected="selected"  <?php endif; ?>>No</option>
                  </select>
                 <input name="comments_name" class="mw_option_field" type="text" value="<?php print get_option('comments_name', $params['id']); ?>">
               </div>
             </div>
           </div>
         </div>     
       </div>
     </div>
   </div>
   <div class="tab-pane fade  in" id="template">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <module type="admin/modules/templates" id="posts_list_templ"/>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div>
</div>
</div>