<?php
$theme =  get_option('theme', $params['id']) ;
$color =  get_option('color', $params['id']) ;
$character_limit= get_option('character_limit', $params['id']) ;
$read_more= get_option('read_more', $params['id']) ;
$comments_name= get_option('comments_name', $params['id']) ;
$view_comments= get_option('view_comments', $params['id']) ;

?>
<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/css/pages/feature_timeline1.css" >
<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/css/pages/feature_timeline2.css" >
<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/css/style.css" >
<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/font-awesome/css/font-awesome.css">

<?php if($theme=="dark"){?> <link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/css/theme-skins/dark.css" > <?php }?>

<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>templates/assets/css/theme-colors/<?php print $color;?>.css" >

<?php 
$module_template = get_option('data-template', $params['id']);
if ($module_template == false and isset($params['template'])) {
    $module_template = $params['template'];
}


if ($module_template != false) {
    $template_file = module_templates($config['module'], $module_template);
} else {
    $template_file = module_templates($config['module'], 'default');
}


if (isset($template_file) and is_file($template_file) != false) {
    include($template_file);
} else {
    $template_file = module_templates($config['module'], 'default');
    include($template_file);
}