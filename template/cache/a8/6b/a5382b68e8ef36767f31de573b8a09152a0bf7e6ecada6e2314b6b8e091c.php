<?php

/* admin/users.tpl */
class __TwigTemplate_a86ba5382b68e8ef36767f31de573b8a09152a0bf7e6ecada6e2314b6b8e091c extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>Users<small> View / Add / Edit</small></h1></div></div></div>
<center><div class='panel panel-default' style='width:950px'><div class='panel-heading'>Add User</div>
<div class='panel-body'><table class='table table-striped table-bordered table-hover table-full-width' id='seller_1'>
<thead><tr><th width='150px'>User Id</th><th width='150px'>Username</th><th width='150px'>User Type</th><th width='150px'>Credit</th><th width='150px'>Reg Date</th><th width='150px'>Action</th></tr></thead><tbody>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_array_keys_filter((isset($context["listUser"]) ? $context["listUser"] : null))) > 0)) {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listUser"]) ? $context["listUser"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 7
                echo "<tr>
<td class='tdCol' >";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userId", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
<td class='tdCol' ><font color='";
                // line 10
                echo $this->getAttribute($context["user"], "typeColor", array());
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "typeName", array()), "html", null, true);
                echo "</font></td>
<td class='tdCol' >";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "credit", array()), "html", null, true);
                echo "</td>
<td class='tdCol' >";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "regDate", array()), "html", null, true);
                echo "</td>
<td class='tdCol' ><a href='#' onclick=\"showpage('user.php?act=edit&userid=";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userId", array()), "html", null, true);
                echo "');\" class=\"btn btn-xs btn-teal tooltips\" data-placement=\"top\" data-original-title=\"Edit\"><i class=\"fa fa-edit\"></i></a> 
<a href='#' onclick=\"if (confirm('Are you sure?')) {showpage('user.php?act=delete&userid=";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userId", array()), "html", null, true);
                echo "');}\"class=\"btn btn-xs btn-bricky tooltips\" data-placement=\"top\" data-original-title=\"Remove\"><i class=\"fa fa-times fa fa-white\"></i></a></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 18
            echo "<tr><th colspan='4'><div class='errorMsg'>No user found.</div></th></tr>
";
        }
        // line 20
        echo "</tbody></table><center></div>
<center><a href='#' class=\"btn btn-green btn-lg btn-block\" style=\"margin:10px; width:600px\" onclick=\"showpage('user.php?act=add');\">Add user</a></center>
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/select2/select2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/DataTables/media/js/jquery.dataTables.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"../assets/plugins/DataTables/media/js/DT_bootstrap.js\"></script>
\t\t<script src=\"../assets/js/table-data.js\"></script>
        <script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modal.js\"></script>
\t\t<script src=\"../assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
\t\t<script src=\"../assets/js/ui-modals.js\"></script>
\t\t<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --><script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tTableData.init();
                UIModals.init();
\t\t\t});
\t\t</script>";
    }

    public function getTemplateName()
    {
        return "admin/users.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 18,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
