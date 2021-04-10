<?php

/* support.tpl */
class __TwigTemplate_e8758618ed032b309798c76c3e291d644fec4511aa6b872a3c2c6d0272265115 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\$(document).ready(function () {
    \$(\"#msg_form\").submit(Send);
    \$(\"#msg\").focus();
    setInterval(\"Load();\", 2000);
\$('<audio id=\"chatAudio\"><source src=\"assets/audio/notify.ogg\" type=\"audio/ogg\"><source src=\"assets/audio/notify.mp3\" type=\"audio/mpeg\"><source src=\"assets/audio/notify.wav\" type=\"audio/wav\"></audio>').appendTo('body');
});

function Send() {
\$.post(\"ajax-support.php\",
{
act: \"send\",
text: \$(\"#msg\").val()
},
Load );
\$(\"#msg\").val(\"\");
\$(\"#msg\").focus();
return false;
}

var last_message_id = 0;
var load_in_process = false;

function Load() {
if(!load_in_process)
{
load_in_process = true;
\$.post(\"ajax-support.php\",
{
act: \"load\",
last: last_message_id,
rand: (new Date()).getTime()
},
function (result) {
\$(\".panel-body\").scrollTop(\$(\".panel-body\").get(0).scrollHeight);
load_in_process = false;
});
}
}
</script>
<div class=\"page-header\"><h1>Support<small> Only text</small></h1></div></div></div>
<div class=\"row\">
<div class=\"col-sm-12\">
<div class=\"panel panel-default\"><div class=\"panel-heading\"><i class=\"clip-bubble-4\"></i>Support Chat</div>
<div class=\"panel-body\" style=\"height:460px; overflow: auto;\">
<ol class=\"discussion\">
<div id=\"message_list\" >

</div>
</ol>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                                <div class=\"col-sm-12\">
                                <form id=\"msg_form\" action=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"chat-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"msg\" type=\"text\" class=\"form-control input-mask-date\" placeholder=\"Type a message here...\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-teal\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button> </span>
            </form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "support.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
