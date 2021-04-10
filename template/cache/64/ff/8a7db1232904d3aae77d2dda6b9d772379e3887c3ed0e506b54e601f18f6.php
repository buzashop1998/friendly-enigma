<?php

/* admin/editcardcategory.tpl */
class __TwigTemplate_64ff8a7db1232904d3aae77d2dda6b9d772379e3887c3ed0e506b54e601f18f6 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Category<small>edit</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'>Category Edit</div>
<form action='category.php?act=edit' method='POST' target='result'><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th width='500px'>Value</th></tr>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["category"]) ? $context["category"] : null))) > 0)) {
            // line 6
            echo "<tr><td class='tdCol' width='150px'>Category Id</td><td class='tdCol' width='500px'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
            echo "<input type='hidden' class='form-control' name='categoryid' value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
            echo "' /></td></tr>
<tr><td class='tdCol' width='150px'>Category Name</td><td class='tdCol' width='500px'><input class='form-control' name='categoryname' value='";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryName", array()), "html", null, true);
            echo "' /></td></tr>
<tr><td class='tdCol' width='150px'>Category Description</td><td class='tdCol' width='500px'><input class='form-control' name='categoryinfo' value='";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryInfo", array()), "html", null, true);
            echo "' /></td></tr>
<tr><th colspan='2'><center><input type='button' class='btn btn-bricky' name='save' onclick=\"showpage('category.php');\" value='Cancel' /> <input type='submit' class='btn btn-green' name='save' value='Save' /></center></th></tr>
<tr><th colspan='2'><iframe name='result' id='result' src='' style='border:none;height:30px;' ></iframe></th></tr>
";
        } else {
            // line 12
            echo "<tr><th colspan='2'><div class='errorMsg'>This category is not available</div></th></tr>
";
        }
        // line 14
        echo "</table></form></center></div>";
    }

    public function getTemplateName()
    {
        return "admin/editcardcategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 12,  38 => 8,  34 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
