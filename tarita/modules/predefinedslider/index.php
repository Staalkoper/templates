<?php

$id = $title = get_option('name', $params['id']);
$id = str_replace(' ', '_', $id);
$id = urlencode($id);

$cmod= get_option('cmod',$params['id']);
if($cmod==0) $cmod=1;
?>
<script>

</script>



<?php   $module_template = get_option('data-template', $params['id']);
if ($module_template == false and isset($params['template'])) {
    $module_template = $params['template'];
}
if ($module_template != false) {
    $template_file = module_templates($config['module'], $module_template);
} else {
    $template_file = module_templates($config['module'], 'default');
}
if (is_file($template_file)) {
    include($template_file);
}
?>