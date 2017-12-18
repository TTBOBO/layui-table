<?php

/* admin/index.html */
class __TwigTemplate_b425bc3145bd02fe8056796181ebd3831e3ae93308045c574fbe4a22fd67dcc9 extends Twig_Template
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
        $this->loadTemplate("admin/header.html", "admin/index.html", 1)->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"/resource/admin/css/index.css\">
<script src=\"/resource/admin/js/jsapp/index.js\"></script>

<div class=\"content-iframe\" style=\"overflow: hidden; background: #fff;\">
    <div class=\"mainContent\" id=\"content-main\" style=\"margin: 10px; margin-bottom: 0px; padding: 0;\">
        <iframe class=\"LRADMS_iframe\" width=\"100%\" height=\"100%\" src=\"/admin/home/default_index\" frameborder=\"0\" data-id=\"/admin/home/default_index\"></iframe>
    </div>
</div>

";
        // line 11
        $this->loadTemplate("admin/footer.html", "admin/index.html", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/header.html' %}*/
/* <link rel="stylesheet" href="/resource/admin/css/index.css">*/
/* <script src="/resource/admin/js/jsapp/index.js"></script>*/
/* */
/* <div class="content-iframe" style="overflow: hidden; background: #fff;">*/
/*     <div class="mainContent" id="content-main" style="margin: 10px; margin-bottom: 0px; padding: 0;">*/
/*         <iframe class="LRADMS_iframe" width="100%" height="100%" src="/admin/home/default_index" frameborder="0" data-id="/admin/home/default_index"></iframe>*/
/*     </div>*/
/* </div>*/
/* */
/* {% include 'admin/footer.html' %}*/
