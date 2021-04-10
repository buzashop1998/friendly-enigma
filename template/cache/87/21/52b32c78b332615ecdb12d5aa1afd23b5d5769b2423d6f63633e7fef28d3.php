<?php

/* admin/faq.tpl */
class __TwigTemplate_872152b32c78b332615ecdb12d5aa1afd23b5d5769b2423d6f63633e7fef28d3 extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "head")) {
            // line 2
            echo "<div class=\"page-header\"><h1>FAQ<small>  add / edit / remove</small></h1></div></div></div>
<div class=\"row\"><div class=\"col-md-12\">
";
        }
        // line 5
        echo "
";
        // line 6
        if (((isset($context["type"]) ? $context["type"] : null) == "menu")) {
            // line 7
            echo "<div class=\"tabbable tabs-left\">
<ul id=\"myTab3\" class=\"nav nav-tabs tab-teal\" style=\"width:250px\">
";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCategory"]) ? $context["listCategory"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 10
                if (($context["key"] == "0")) {
                    // line 11
                    echo "<li class=\"active\"><a href=\"#faq_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "\" data-toggle=\"tab\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryIcon", array()), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
                    echo " &nbsp&nbsp<span onclick=\"if (confirm('Are you sure?')) {showpage('faq.php?act=delete&categoryid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></span> <span onclick=\"showpage('faq.php?act=edit&categoryid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "');\" class=\"btn btn-xs btn-teal tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></span>
</a></li>
";
                } else {
                    // line 14
                    echo "<li class=\"\"><a href=\"#faq_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "\" data-toggle=\"tab\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryIcon", array()), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryName", array()), "html", null, true);
                    echo " &nbsp&nbsp<span onclick=\"if (confirm('Are you sure?')) {showpage('faq.php?act=delete&categoryid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></span> <span onclick=\"showpage('faq.php?act=edit&categoryid=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categoryId", array()), "html", null, true);
                    echo "');\" class=\"btn btn-xs btn-teal tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></span>
</a></li>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "<li><p><center><span class='btn btn-green' onclick=\"showpage('faq.php?act=add');\"> <i class='fa fa-plus'></i> Add new Category</span></center></p></li>
</ul><div class=\"tab-content\">
";
        }
        // line 21
        echo "
";
        // line 22
        if (((isset($context["type"]) ? $context["type"] : null) == "content")) {
            // line 23
            if (((isset($context["active"]) ? $context["active"] : null) == "1")) {
                // line 24
                echo "<div class=\"tab-pane active\" id=\"faq_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                echo "\">
";
            } else {
                // line 26
                echo "<div class=\"tab-pane\" id=\"faq_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                echo "\">
";
            }
            // line 28
            echo "<div id=\"accordion\" class=\"panel-group accordion accordion-custom accordion-teal\">
";
            // line 29
            if (((isset($context["found"]) ? $context["found"] : null) == "1")) {
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["answer"]) {
                    // line 31
                    if (($context["key"] == "0")) {
                        // line 32
                        echo "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h4 class=\"panel-title\"><a href=\"#faq_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "categoryId", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\"><i class=\"icon-arrow\"></i>
";
                        // line 33
                        echo $this->getAttribute($context["answer"], "question", array());
                        echo "
<span onclick=\"if (confirm('Are you sure?')) {showpage('faq.php?act=deleteanswer&answerid=";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></span> <span onclick=\"showpage('faq.php?act=editanswer&answerid=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "');\" class=\"btn btn-xs btn-teal tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></span>
</a></h4></div><div class=\"panel-collapse in\" id=\"faq_";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "categoryId", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "\"><div class=\"panel-body\">
";
                        // line 36
                        echo $this->getAttribute($context["answer"], "answer", array());
                        echo "
</div></div></div>
";
                    } else {
                        // line 39
                        echo "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h4 class=\"panel-title\"><a href=\"#faq_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "categoryId", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle collapsed\"><i class=\"icon-arrow\"></i>
";
                        // line 40
                        echo $this->getAttribute($context["answer"], "question", array());
                        echo "
<span onclick=\"if (confirm('Are you sure?')) {showpage('faq.php?act=deleteanswer&answerid=";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "');}\" class=\"btn btn-xs btn-bricky tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></span> <span onclick=\"showpage('faq.php?act=editanswer&answerid=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "');\" class=\"btn btn-xs btn-teal tooltips\" style = 'float: right; margin-right: 5px; margin-top: -4px;' data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></span>
</a></h4></div><div class=\"panel-collapse collapse\" id=\"faq_";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "categoryId", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "Id", array()), "html", null, true);
                        echo "\"><div class=\"panel-body\">
";
                        // line 43
                        echo $this->getAttribute($context["answer"], "answer", array());
                        echo "
</div></div></div>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 48
                echo "<div class=\"panel panel-default\"><div class=\"panel-heading\"><h4 class=\"panel-title\"><a href=\"#faq_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                echo "\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\"><i class=\"icon-arrow\"></i>
No Answer found.
</a></h4></div><div class=\"panel-collapse collapse in\" id=\"faq_";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "categoryId", array()), "html", null, true);
                echo "\"><div class=\"panel-body\">
No Answer found.
</div></div></div>
";
            }
            // line 54
            echo "<p><center><a href='#' class='btn btn-info btn-lg btn-block' onclick=\"showpage('faq.php?act=addanswer');\">Add New Answer</a></center></p>
</div></div>
";
        }
        // line 57
        echo "
";
        // line 58
        if (((isset($context["type"]) ? $context["type"] : null) == "footer")) {
            // line 59
            echo "</div></div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 59,  194 => 58,  191 => 57,  186 => 54,  179 => 50,  173 => 48,  162 => 43,  156 => 42,  150 => 41,  146 => 40,  139 => 39,  133 => 36,  127 => 35,  121 => 34,  117 => 33,  110 => 32,  108 => 31,  104 => 30,  102 => 29,  99 => 28,  93 => 26,  87 => 24,  85 => 23,  83 => 22,  80 => 21,  75 => 18,  56 => 14,  41 => 11,  39 => 10,  35 => 9,  31 => 7,  29 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
