<?php

/* front/hmzhongbao/index.html */
class __TwigTemplate_58e8a99068346ff1201a20cce7d63b519a159e071142932176cff830abb4b378 extends Twig_Template
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
        $this->loadTemplate("front/header.html", "front/hmzhongbao/index.html", 1)->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"/resource/front/css/home.css\" />
<div id=\"\">
\t<img src=\"/resource/front/images/zhongbao.png\" style=\"width: 100%;\"/>
</div>
";
        // line 6
        $this->loadTemplate("front/footer.html", "front/hmzhongbao/index.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "front/hmzhongbao/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include 'front/header.html' %}*/
/* <link rel="stylesheet" href="/resource/front/css/home.css" />*/
/* <div id="">*/
/* 	<img src="/resource/front/images/zhongbao.png" style="width: 100%;"/>*/
/* </div>*/
/* {% include 'front/footer.html' %}*/
