<?php

/* elements/alerts.tpl */
class __TwigTemplate_a554608372b4829bab76d7441d01419ba66a0b95b916fd98320427f4bea50476 extends Twig_Template
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
        if (($this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "type", array(), "array") == "success")) {
            // line 2
            echo "<div class=\"alert alert-success\"><button data-dismiss=\"alert\" class=\"close\">&times;</button>";
            echo $this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "text", array(), "array");
            echo "</div>
";
        } elseif (($this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "type", array(), "array") == "info")) {
            // line 4
            echo "<div class=\"alert alert-info\"><button data-dismiss=\"alert\" class=\"close\">&times;</button>";
            echo $this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "text", array(), "array");
            echo "</div>
";
        } elseif (($this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "type", array(), "array") == "warning")) {
            // line 6
            echo "<div class=\"alert alert-warning\"><button data-dismiss=\"alert\" class=\"close\">&times;</button>";
            echo $this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "text", array(), "array");
            echo "</div>
";
        } elseif (($this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "type", array(), "array") == "danger")) {
            // line 8
            echo "<div class=\"alert alert-danger\"><button data-dismiss=\"alert\" class=\"close\">&times;</button>";
            echo $this->getAttribute((isset($context["respond"]) ? $context["respond"] : null), "text", array(), "array");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "elements/alerts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
