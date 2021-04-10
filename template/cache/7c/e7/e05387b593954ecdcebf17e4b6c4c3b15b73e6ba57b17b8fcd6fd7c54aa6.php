<?php

/* mycard.tpl */
class __TwigTemplate_7ce7e05387b593954ecdcebf17e4b6c4c3b15b73e6ba57b17b8fcd6fd7c54aa6 extends Twig_Template
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
        echo "<div class='page-header'><h1>My Credit Cards <small>checking</small></h1></div></div></div><table class='table table-striped table-bordered table-hover'>
<th><b>Id</b></th><th><b>Credit card full info</b></th><th>Date</th><th>Check</th></tr>
";
        // line 3
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listCard"]) ? $context["listCard"] : null))) > 0)) {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCard"]) ? $context["listCard"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 5
                echo "<tr><td class='tdCol' style='font-size:12px;'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                echo "</td>
<td class='tdCol' style='font-size:12px;'>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardContent", array()), "html", null, true);
                echo "</td>
<td class='tdCol' style='font-size:12px;'>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "sdate", array()), "html", null, true);
                echo "</td>
<td class='tdCol' id='cardResult";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                echo "' style='font-size:12px;'>
";
                // line 9
                if (($this->getAttribute($context["card"], "status", array()) == "0")) {
                    // line 10
                    echo "<a href='#' class='checkcc' item_id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                    echo "' onclick=\"checki('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardId", array()), "html", null, true);
                    echo "')\"><span class='label label-info'>CHECK</span></a>
";
                }
                // line 12
                if (($this->getAttribute($context["card"], "status", array()) == "1")) {
                    // line 13
                    echo "<span class='label label-success'>Live</span>
";
                }
                // line 15
                if (($this->getAttribute($context["card"], "status", array()) == "2")) {
                    // line 16
                    echo "<span class='label label-danger'>Dead</span>
";
                }
                // line 18
                if (($this->getAttribute($context["card"], "status", array()) == "3")) {
                    // line 19
                    echo "<span class='label label-warning'>Error</span>
";
                }
                // line 21
                if (($this->getAttribute($context["card"], "status", array()) == "4")) {
                    // line 22
                    echo "<span class='label label-info'>Unknown</span>
";
                }
                // line 24
                if (($this->getAttribute($context["card"], "status", array()) == "5")) {
                    // line 25
                    echo "<span class='label label-info'>Time Off</span>
";
                }
                // line 27
                echo "</td></tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 30
            echo "<tr><th colspan='4'>No card found.</th></tr>
";
        }
        // line 32
        echo "</table><th>
<input value=\"Check All Credit Cards\" onclick=\"masscheck();\" style=\"margin-top: 20px; margin-bottom: 20px;\" class=\"btn btn-green btn-lg btn-block\" type=\"submit\">";
    }

    public function getTemplateName()
    {
        return "mycard.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  94 => 30,  86 => 27,  82 => 25,  80 => 24,  76 => 22,  74 => 21,  70 => 19,  68 => 18,  64 => 16,  62 => 15,  58 => 13,  56 => 12,  48 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  29 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
