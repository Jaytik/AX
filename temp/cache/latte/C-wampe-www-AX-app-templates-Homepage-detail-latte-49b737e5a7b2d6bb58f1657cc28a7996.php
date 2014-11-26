<?php
// source: C:\wampe\www\AX\app/templates/Homepage/detail.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1908741286', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb872f1e99b5_content')) { function _lb872f1e99b5_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="avatar">
    <img src="/AX/www/css/avatar.png">
</div>
<div class="labos">
    <h2>DETAIL OSOBY</h2>
    <h1><?php echo Latte\Runtime\Filters::escapeHtml($uzivatel->jmeno, ENT_NOQUOTES) ?><h1>
    <h2><?php echo Latte\Runtime\Filters::escapeHtml($uzivatel->mesto, ENT_NOQUOTES) ?><h2>
    <h2><?php echo Latte\Runtime\Filters::escapeHtml($uzivatel->kraj, ENT_NOQUOTES) ?> kraj<h2>
    <h3><?php echo Latte\Runtime\Filters::escapeHtml($uzivatel->stat, ENT_NOQUOTES) ?><h3>
    <h2 class="redo">Plat: <?php echo Latte\Runtime\Filters::escapeHtml($uzivatel->plat, ENT_NOQUOTES) ?>,--<h2>
</div>
<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">BACK</a>
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 