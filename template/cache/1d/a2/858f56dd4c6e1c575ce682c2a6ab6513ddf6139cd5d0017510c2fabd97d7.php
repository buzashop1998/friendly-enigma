<?php

/* footer.tpl */
class __TwigTemplate_1da2858f56dd4c6e1c575ce682c2a6ab6513ddf6139cd5d0017510c2fabd97d7 extends Twig_Template
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
\t\t\t\t2021 &copy; ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sitename"]) ? $context["sitename"] : null), "html", null, true);
        echo ". <a style=\"display: none;\" href=\"http://onecvv.com\">One CVV</a>
\t\t\t</div>
\t\t\t<div class=\"footer-items\">
\t\t\t\t<span class=\"go-top\"><i class=\"clip-chevron-up\"></i></span>
\t\t\t</div>
\t\t</div>
<!-- end: FOOTER -->";
    }

    public function getTemplateName()
    {
        return "footer.tpl";
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
