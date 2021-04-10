<?php

/* elements/buy.tpl */
class __TwigTemplate_48e4631778a4747efa4c8c2dbab3f618b8d3127d5f70f2254d12cc1654eca45b extends Twig_Template
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
        if (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "type", array(), "array") == "info")) {
            // line 2
            echo "<span class='label label-info'>";
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "text", array(), "array");
            echo "</span>
";
        } elseif (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "type", array(), "array") == "danger")) {
            // line 4
            echo "<span class='label label-danger'>";
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "text", array(), "array");
            echo "</span>
";
        } elseif (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "type", array(), "array") == "result")) {
            // line 6
            echo "<textarea style='width:360px;height:100px;'>";
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "text", array(), "array");
            echo "</textarea>
";
        } elseif (($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "type", array(), "array") == "warning")) {
            // line 8
            echo "<span class='label label-warning'>";
            echo $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "text", array(), "array");
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "elements/buy.tpl";
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
