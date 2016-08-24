<?php

define('EMAIL_FOR_REPORTS', 'toninhof5@rlin80.hpwoc.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Mensagem Enviada com Sucesso');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-flat-green" style="font-size:14px;font-family:'Lato',sans-serif;color:#666666;max-width:320px;min-width:150px" method="post"><div class="title"><h2></h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" /><label class="subtitle">Nome</label></span><span class="nameLast"><input  type="text" size="14" name="name[last]" /><label class="subtitle">Sobrenome</label></span></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">assunto<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Text Area<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>