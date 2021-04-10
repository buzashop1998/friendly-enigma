<?php

/* elements/cc-cart-total.tpl */
class __TwigTemplate_e7c3633e21e2363b9251cf6f9650709f63acaef58b1850d20ce52f44eb8658e5 extends Twig_Template
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
        echo "<ul class=\"list-unstyled amounts\"><li><h3>Total Cards: ";
        echo twig_escape_filter($this->env, (isset($context["cards"]) ? $context["cards"] : null), "html", null, true);
        echo "</h3></li><li><h3>Total Price: \$";
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
        echo "</h3></li></ul>";
    }

    public function getTemplateName()
    {
        return "elements/cc-cart-total.tpl";
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
