<?php

/* admin/addcardcategory.tpl */
class __TwigTemplate_6c8a40244cd4770b7e0d44594c087b335fc305d54e79894e31852caf366081d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-header\"><h1>Category<small>add</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'>Add category</div>
<form action='category.php?act=add' method='POST' target='result'><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th width='500px'>Value</th></tr>
<tr><td class='tdCol' width='150px'>Category Name</td><td class='tdCol' width='500px'><input class='form-control' name='categoryname' value='' /></td></tr>
<tr><td class='tdCol' width='150px'>Category Description</td><td class='tdCol' width='500px'><input class='form-control' name='categoryinfo' value='' /></td></tr>
<tr><th colspan='2'><center><input type='button' class='btn btn-bricky' name='save' onclick=\"showpage('category.php');\" value='Cancel' /> <input type='submit' class='btn btn-green' name='save' value='Save' /></center></th></tr>
<tr><th colspan='2'><iframe name='result' id='result' src='' style='border:none;height:30px;' ></iframe></th></tr>
</table></form></div></center>";
    }

    public function getTemplateName()
    {
        return "admin/addcardcategory.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
