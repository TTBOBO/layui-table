<?php

/* front/hmtong/hmtHome.html */
class __TwigTemplate_09c08545f974038283af12981110e3e587c1f4c9003cc13b788746eb8ab6451d extends Twig_Template
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
        $this->loadTemplate("front/header.html", "front/hmtong/hmtHome.html", 1)->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"/resource/front/css/hmtHome.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"/resource/front/css/css.css\" />

<div id=\"container\">
\t";
        // line 6
        $this->loadTemplate("front/common/hmtbanner.html", "front/hmtong/hmtHome.html", 6)->display($context);
        // line 7
        echo "\t<div class=\"contbox\" >
\t\t<div class=\"mnav\">
\t\t\t<ul class=\"placeItem\">
\t\t\t\t<li class=\"act\">
\t\t\t\t\t<div><span>01</span></div>
\t\t\t\t\t<p>虚拟办公会员服务产品</p>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div><span>02</span></div>
\t\t\t\t\t<p>实体储值会员服务产品</p>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<div><span>03</span></div>
\t\t\t\t\t<p>场地实体长租服务产品</p>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t";
        // line 24
        $this->loadTemplate("front/hmtong/hmtvirtual-vip.html", "front/hmtong/hmtHome.html", 24)->display($context);
        // line 25
        echo "\t\t";
        $this->loadTemplate("front/hmtong/hmtentity-vip.html", "front/hmtong/hmtHome.html", 25)->display($context);
        // line 26
        echo "\t\t";
        $this->loadTemplate("front/hmtong/place-longrent.html", "front/hmtong/hmtHome.html", 26)->display($context);
        // line 27
        echo "\t</div>
</div>
";
        // line 29
        $this->loadTemplate("front/footer.html", "front/hmtong/hmtHome.html", 29)->display($context);
        // line 30
        echo "<script>
\t\$(function() {

\t    \$('.placeItem li').click(function () {
\t        \$(this).addClass('act').siblings().removeClass('act');
\t\t\tvar index = \$(this).index();

\t\t\tif(index == 0){
               \$('.virtual-vip').show();
               \$('.entity-vip').hide();
               \$('.place-longrent').hide();
            }

            if(index == 1){
                \$('.virtual-vip').hide();
                \$('.entity-vip').show();
                \$('.place-longrent').hide();
            }

            if(index == 2){
                \$('.virtual-vip').hide();
                \$('.entity-vip').hide();
                \$('.place-longrent').show();
            }
        })
    })
</script>";
    }

    public function getTemplateName()
    {
        return "front/hmtong/hmtHome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  60 => 29,  56 => 27,  53 => 26,  50 => 25,  48 => 24,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% include 'front/header.html' %}*/
/* <link rel="stylesheet" href="/resource/front/css/hmtHome.css" />*/
/* <link rel="stylesheet" type="text/css" href="/resource/front/css/css.css" />*/
/* */
/* <div id="container">*/
/* 	{% include 'front/common/hmtbanner.html' %}*/
/* 	<div class="contbox" >*/
/* 		<div class="mnav">*/
/* 			<ul class="placeItem">*/
/* 				<li class="act">*/
/* 					<div><span>01</span></div>*/
/* 					<p>虚拟办公会员服务产品</p>*/
/* 				</li>*/
/* 				<li>*/
/* 					<div><span>02</span></div>*/
/* 					<p>实体储值会员服务产品</p>*/
/* 				</li>*/
/* 				<li >*/
/* 					<div><span>03</span></div>*/
/* 					<p>场地实体长租服务产品</p>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		{% include 'front/hmtong/hmtvirtual-vip.html' %}*/
/* 		{% include 'front/hmtong/hmtentity-vip.html' %}*/
/* 		{% include 'front/hmtong/place-longrent.html' %}*/
/* 	</div>*/
/* </div>*/
/* {% include 'front/footer.html' %}*/
/* <script>*/
/* 	$(function() {*/
/* */
/* 	    $('.placeItem li').click(function () {*/
/* 	        $(this).addClass('act').siblings().removeClass('act');*/
/* 			var index = $(this).index();*/
/* */
/* 			if(index == 0){*/
/*                $('.virtual-vip').show();*/
/*                $('.entity-vip').hide();*/
/*                $('.place-longrent').hide();*/
/*             }*/
/* */
/*             if(index == 1){*/
/*                 $('.virtual-vip').hide();*/
/*                 $('.entity-vip').show();*/
/*                 $('.place-longrent').hide();*/
/*             }*/
/* */
/*             if(index == 2){*/
/*                 $('.virtual-vip').hide();*/
/*                 $('.entity-vip').hide();*/
/*                 $('.place-longrent').show();*/
/*             }*/
/*         })*/
/*     })*/
/* </script>*/
