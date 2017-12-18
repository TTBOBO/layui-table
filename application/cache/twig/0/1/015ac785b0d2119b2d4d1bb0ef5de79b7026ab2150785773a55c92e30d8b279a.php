<?php

/* admin/iheader.html */
class __TwigTemplate_2a257715278f2f396c9122b0e983e2f9d69286f6a80a0acdc3ca5b78f7118835 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" href=\"/resource/admin/layui/css/layui.css\">
\t\t<link rel=\"stylesheet\" href=\"/resource/admin/font-awesome-v4.6.3/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/resource/admin/css/iframe_base.css\">
\t\t<link rel=\"stylesheet\" href=\"/resource/admin/css/public.css\">
\t\t<!--<script src=\"/resource/admin/layui/layui.js\"></script>-->
\t\t<script src=\"/resource/admin/js/jslib/jquery2.2.4.min.js\"></script>
\t\t<link href=\"/resource/admin/js/jslib/kindeditor/themes/default/default.css\" />
\t\t<script src=\"/resource/admin/js/jslib/kindeditor/kindeditor-min.js\" />
\t\t<script src=\"/resource/admin/js/jslib/kindeditor/lang/zh_CN.js\" />
\t\t<!--<script src=\"/resource/admin/js/jslib/ykp.js\"></script>-->
\t\t<script>
\t\t\tvar cfg = {
\t\t\t\t'BASE_URL': \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\"
\t\t\t}; //,'UPLOAD_PATH':\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["admin_upload_path"]) ? $context["admin_upload_path"] : null), "html", null, true);
        echo "\"
\t\t</script>
\t</head>

\t<body>";
    }

    public function getTemplateName()
    {
        return "admin/iheader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  40 => 20,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/* 		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/* 		<title></title>*/
/* 		<link rel="stylesheet" href="/resource/admin/layui/css/layui.css">*/
/* 		<link rel="stylesheet" href="/resource/admin/font-awesome-v4.6.3/css/font-awesome.min.css">*/
/* 		<link rel="stylesheet" href="/resource/admin/css/iframe_base.css">*/
/* 		<link rel="stylesheet" href="/resource/admin/css/public.css">*/
/* 		<!--<script src="/resource/admin/layui/layui.js"></script>-->*/
/* 		<script src="/resource/admin/js/jslib/jquery2.2.4.min.js"></script>*/
/* 		<link href="/resource/admin/js/jslib/kindeditor/themes/default/default.css" />*/
/* 		<script src="/resource/admin/js/jslib/kindeditor/kindeditor-min.js" />*/
/* 		<script src="/resource/admin/js/jslib/kindeditor/lang/zh_CN.js" />*/
/* 		<!--<script src="/resource/admin/js/jslib/ykp.js"></script>-->*/
/* 		<script>*/
/* 			var cfg = {*/
/* 				'BASE_URL': "{{base_url}}"*/
/* 			}; //,'UPLOAD_PATH':"{{admin_upload_path}}"*/
/* 		</script>*/
/* 	</head>*/
/* */
/* 	<body>*/
