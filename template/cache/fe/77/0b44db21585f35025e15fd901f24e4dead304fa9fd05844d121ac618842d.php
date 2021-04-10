<?php

/* admin/footer.tpl */
class __TwigTemplate_fe770b44db21585f35025e15fd901f24e4dead304fa9fd05844d121ac618842d extends Twig_Template
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
        echo "<!-- start: FOOTER -->
\t\t<div class=\"footer clearfix\">
\t\t\t<div class=\"footer-inner\">
\t\t\t\t2014 &copy; ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo ".
\t\t\t</div>
\t\t\t<div class=\"footer-items\">
\t\t\t\t<span class=\"go-top\"><i class=\"clip-chevron-up\"></i></span>
\t\t\t</div>
\t\t</div>
<!-- end: FOOTER -->";
    }

    public function getTemplateName()
    {
        return "admin/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
