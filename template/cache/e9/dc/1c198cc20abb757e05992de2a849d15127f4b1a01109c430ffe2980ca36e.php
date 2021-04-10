<?php

/* faq.tpl */
class __TwigTemplate_e9dc1c198cc20abb757e05992de2a849d15127f4b1a01109c430ffe2980ca36e extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Faq <small> frequently asked questions</small></h1></div></div></div>
<div class=\"row\"><div class=\"col-md-12\"><div class=\"tabbable tabs-left\">
<ul id=\"myTab3\" class=\"nav nav-tabs tab-teal\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 5
            if (($context["key"] == "0")) {
                // line 6
                echo "<li class=\"active\"><a href=\"#faq_";
                echo $this->getAttribute($context["category"], "categoryId", array());
                echo "\" data-toggle=\"tab\"><i class=\"";
                echo $this->getAttribute($context["category"], "categoryIcon", array());
                echo "\"></i> ";
                echo $this->getAttribute($context["category"], "categoryName", array());
                echo "</a></li>
";
            } else {
                // line 8
                echo "<li class=\"\"><a href=\"#faq_";
                echo $this->getAttribute($context["category"], "categoryId", array());
                echo "\" data-toggle=\"tab\"><i class=\"";
                echo $this->getAttribute($context["category"], "categoryIcon", array());
                echo "\"></i> ";
                echo $this->getAttribute($context["category"], "categoryName", array());
                echo "</a></li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul><div class=\"tab-content\">
";
        // line 12
        echo (isset($context["msghtml"]) ? $context["msghtml"] : null);
        echo "
</div></div></div>";
    }

    public function getTemplateName()
    {
        return "faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  40 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
