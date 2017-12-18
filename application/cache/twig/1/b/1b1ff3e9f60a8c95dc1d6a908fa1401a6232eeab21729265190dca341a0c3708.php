<?php

/* front/hmrong/index.html */
class __TwigTemplate_1e541382c298e4f6d3ff15846e7dccb2cdf8dd3c1d77e99bcd794809acf43647 extends Twig_Template
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
        $this->loadTemplate("front/q_header.html", "front/hmrong/index.html", 1)->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"/resource/front/css/home.css\" />
<div id=\"\">
\t<img src=\"/resource/front/images/r01.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r02.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r03.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r05.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r06.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r07.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r08.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r09.jpg\" style=\"width: 100%;\"/>
\t<img src=\"/resource/front/images/r010.jpg\" style=\"width: 100%;\"/>
</div>
";
        // line 14
        $this->loadTemplate("front/footer.html", "front/hmrong/index.html", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "front/hmrong/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  21 => 2,  19 => 1,);
    }
}
/* {% include 'front/q_header.html' %}*/
/* <link rel="stylesheet" href="/resource/front/css/home.css" />*/
/* <div id="">*/
/* 	<img src="/resource/front/images/r01.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r02.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r03.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r05.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r06.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r07.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r08.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r09.jpg" style="width: 100%;"/>*/
/* 	<img src="/resource/front/images/r010.jpg" style="width: 100%;"/>*/
/* </div>*/
/* {% include 'front/footer.html' %}*/
