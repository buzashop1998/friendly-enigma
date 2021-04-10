<?php

/* admin/adduser.tpl */
class __TwigTemplate_9baaea259317a56adf456b8d2a1b04b2d81b43eeb4a958127c944d5eef7dd3df extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Users<small> Add user</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:650px'><div class='panel-heading'>Add User</div>
<form action='user.php?act=add' method='POST' target='result'><table class='table table-bordered table-striped'>
<tr><th width='150px'>Name</th><th width='500px'>Value</th></tr>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listType"]) ? $context["listType"] : null))) > 0)) {
            // line 6
            echo "<tr><td class='tdCol' width='150px'>Username</td><td class='tdCol' width='500px'><input class='form-control' name='username' value='' /></td></tr>
<tr><td class='tdCol' width='150px'>Jabber</td><td class='tdCol' width='500px'><input class='form-control' name='email' value='' /></td></tr>
<tr><td class='tdCol' width='150px'>Password</td><td class='tdCol' width='500px'><input class='form-control' name='password' value='' /></td></tr>
<tr><td class='tdCol' width='150px'>User Type</td><td class='tdCol' width='500px'><select class='form-control' name='typeid' >
";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listType"]) ? $context["listType"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 11
                echo "<option value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "typeId", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "typeName", array()), "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</select></td></tr>
<tr><td class='tdCol' width='150px'>Credit</td><td class='tdCol' width='500px'><input class='form-control' name='credit' value='' /></td></tr>
<tr><th colspan='2'><center><input type='button' class='btn btn-bricky' name='save' onclick=\"showpage('user.php');\" value='Cancel' /> <input type='submit' class='btn btn-green' name='save' value='Save' /></center></th></tr>
<tr><th colspan='2'><iframe name='result' id='result' src='' style='border:none;height:30px;' ></iframe></th></tr>
";
        } else {
            // line 18
            echo "<tr><th colspan='2'><div class='errorMsg'>No user type found.</div></th></tr>
";
        }
        // line 20
        echo "</table></form></center></div>";
    }

    public function getTemplateName()
    {
        return "admin/adduser.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  55 => 18,  48 => 13,  37 => 11,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }
}
