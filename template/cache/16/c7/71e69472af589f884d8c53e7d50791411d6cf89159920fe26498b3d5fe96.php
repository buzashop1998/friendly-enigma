<?php

/* elements/dump-cart-total.tpl */
class __TwigTemplate_16c771e69472af589f884d8c53e7d50791411d6cf89159920fe26498b3d5fe96 extends Twig_Template
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
        echo "<ul class=\"list-unstyled amounts\"><li><h3>Total Dumps: ";
        echo twig_escape_filter($this->env, (isset($context["dumps"]) ? $context["dumps"] : null), "html", null, true);
        echo "</h3></li><li><h3>Total Price: \$";
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
        echo "</h3></li></ul>";
    }

    public function getTemplateName()
    {
        return "elements/dump-cart-total.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
