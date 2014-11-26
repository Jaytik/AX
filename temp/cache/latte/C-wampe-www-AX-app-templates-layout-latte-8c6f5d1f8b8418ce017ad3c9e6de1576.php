<?php
// source: C:\wampe\www\AX\app/templates/@layout.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0037553106', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb91af0e49f0_head')) { function _lb91af0e49f0_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb8fe13720e2_scripts')) { function _lb8fe13720e2_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.js"></script>
	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/netteForms.js"></script>
	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title><?php if (isset($_b->blocks["title"])) { ob_start(); Latte\Macros\BlockMacros::callBlock($_b, 'title', $template->getParameters()); echo $template->striptags(ob_get_clean()) ?>
 | <?php } ?>Nette Sandbox</title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/screen.css">
	<link rel="stylesheet" media="print" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/print.css">
	<link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        
	<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

</head>

<body>
    <div class="top">
    <div class="tableX">
        <div class="logo">
        <img src="/AX/www/css/skoda.png" width=100%>
        </div>
        <div class="nav">
            
            <ul class="menu">
                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">Home |</a></li>
                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:FiltrPlatControl"), ENT_COMPAT) ?>
">Save |</a></li>
                <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">Login |</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    </div>
    <div class="table">
	<script> document.documentElement.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash) { ?>	<div class="flash <?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; } ?>

<?php Latte\Macros\BlockMacros::callBlock($_b, 'content', $template->getParameters()) ?>
    </div>
<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
</body>
</html>
