<?php

/* admin/edituser.tpl */
class __TwigTemplate_e9ae1c40d19d4102a77a96d1d497ff18399a285f526c4dcb95b23c8778fba9c6 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Users<small> edit user</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'>Edit User</div>
<form action='user.php?act=edit' method='POST' target='result'><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th width='500px'>Value</th></tr>
";
        // line 5
        if (((isset($context["found"]) ? $context["found"] : null) == "1")) {
            // line 6
            echo "<tr><td class='tdCol' width='150px'>User Id</td><td class='tdCol' width='500px'><input class='form-control' name='userid' type='hidden' value='";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "' />";
            echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
            echo "</td></tr>
<tr><td class='tdCol' width='150px'>Username</td><td class='tdCol' width='500px'>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
            echo "<input type='hidden' class='form-control' name='username' value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
            echo "' /></td></tr>
<tr><td class='tdCol' width='150px'>Password<br /><font color='#ff0000'>(Leave it blank if don't want change)</font></td><td class='tdCol' width='500px'><input class='form-control' name='password' value='' /></td></tr>
<tr><td class='tdCol' width='150px'>Jabber<br /></td><td class='tdCol' width='500px'><input class='form-control' name='email' value='";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "jabber", array()), "html", null, true);
            echo "' /></td></tr>
<tr><td class='tdCol' width='150px'>User Type</td><td class='tdCol' width='500px'>
<select name='typeid' class='form-control' >
";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listType"]) ? $context["listType"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 13
                echo "<option value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "typeId", array()), "html", null, true);
                echo "' ";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "typeId", array()) == $this->getAttribute($context["type"], "typeId", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "typeName", array()), "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</select>
</td></tr>
<tr><td class='tdCol' width='150px'>Credit</td><td class='tdCol' width='500px'><input class='form-control' name='credit' value='";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "credit", array()), "html", null, true);
            echo "' /></td></tr>
<tr><th colspan='2'><center><input type='button' class='btn btn-bricky' name='save' onclick=\"showpage('user.php');\" value='Cancel' /> <input type='submit' class='btn btn-green' name='save' value='Save' /></center></th></tr>
<tr><th colspan='2'><iframe name='result' id='result' src='' style='border:none;height:30px;' ></iframe></th></tr>
";
        } else {
            // line 21
            echo "<tr><th colspan='2'><div class='errorMsg'>This user is not available</div></th></tr>
";
        }
        // line 23
        echo "</table></form></center></div>";
    }

    public function getTemplateName()
    {
        return "admin/edituser.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  77 => 21,  70 => 17,  66 => 15,  51 => 13,  47 => 12,  41 => 9,  34 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
