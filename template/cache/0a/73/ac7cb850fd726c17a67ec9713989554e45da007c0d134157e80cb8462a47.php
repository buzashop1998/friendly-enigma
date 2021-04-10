<?php

/* admin/cardcategory.tpl */
class __TwigTemplate_0a73ac7cb850fd726c17a67ec9713989554e45da007c0d134157e80cb8462a47 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Category<small>add / edit / remove</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:750px'><div class='panel-heading'>Category</div>
<table class='table table-bordered table-striped'>
<tr><td class='tdColTitle' width='100px'>Category Id</td><td class='tdColTitle' width='150px'>Category Name</td><td class='tdColTitle' width='200px'>Category Description</td><td class='tdColTitle' width='100px'>Action</td></tr>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listCategory"]) ? $context["listCategory"] : null))) > 0)) {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "<tr>
<td class='tdCol' >";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryInfo", array()), "html", null, true);
                echo "</td>
<td class='tdCol' ><a href=\"#\" onclick=\"showpage('category.php?act=edit&categoryid=";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                echo "');\" class=\"btn btn-xs btn-teal tooltips\" data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></a> <a href=\"#\" onclick=\"if (confirm('Are you sure?')) {showpage('category.php?act=delete&categoryid=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 15
            echo "<tr><th colspan='4'><div class='errorMsg'>No category found.</div></th></tr>
";
        }
        // line 17
        echo "</table></div>
<div id='admin_card_menu'><a href='#' style='width:750px' class='btn btn-green btn-lg btn-block' onclick=\"showpage('category.php?act=add');\">Add Category</a></div></center>";
    }

    public function getTemplateName()
    {
        return "admin/cardcategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 15,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
