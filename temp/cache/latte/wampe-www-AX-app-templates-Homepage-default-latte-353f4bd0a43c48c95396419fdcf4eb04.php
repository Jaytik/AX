<?php
// source: C:\wampe\www\AX\app/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5976601485', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb4c47c907f3_content')) { function _lb4c47c907f3_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($selection as $row) { ?>
    <?php echo Latte\Runtime\Filters::escapeHtml($row->jmeno, ENT_NOQUOTES) ?>

    <?php echo Latte\Runtime\Filters::escapeHtml($row->plat, ENT_NOQUOTES) ?>

<?php $iterations++; } ?>

<?php $iterations = 0; foreach ($selection as $row) { ?><ul>
    <li> <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:detail"), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($row->jmeno, ENT_NOQUOTES) ?></a>
            
    <?php echo Latte\Runtime\Filters::escapeHtml($row->plat, ENT_NOQUOTES) ?>

    </li>
</ul>
<?php $iterations++; } ?>


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