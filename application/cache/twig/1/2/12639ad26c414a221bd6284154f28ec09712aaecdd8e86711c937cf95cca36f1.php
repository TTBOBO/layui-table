<?php

/* front/common/login.html */
class __TwigTemplate_f00b96d4f0d2d4bfeff52105f82d6eb4587c94a0809ce1831467e2fb5d32cf1f extends Twig_Template
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
        $this->loadTemplate("front/header.html", "front/common/login.html", 1)->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/resource/front/css/login.css\">
<style>

.container{
    width: 1200px;margin: 0px auto;padding: 0px;border:1px red silod;
   \theight:743px ;
      }
 #body{
 \twidth: 100%;margin: 0px auto;padding: 0px;
 }
</style>
<div id=\"body\">
\t<div class=\"container\">

\t\t<div class=\"clearfix wrap\">
\t        <div class=\"pull-left left-content\">
\t\t\t\t<img src=\"/resource/admin/image/1658.jpg\" />
\t        </div>
\t\t\t
\t        <div class=\"pull-left right-content\">
\t\t\t\t<ul class=\"login_type\">
\t\t\t\t\t<li class=\"active\"><a href=\"javascript:void(0)\">密码登录</a></li>
\t\t\t\t\t<li><a href=\"javascript:void(0)\">验证码登录</a></li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"login_table\" id=\"reg_cont\">
\t\t            <form class=\"validateForm pwd_login\" style=\"display: \">

\t\t                <div class=\"form-group form-wrap \">
\t\t                    <div class=\"input-group\">
\t\t                        \t<img src=\"/resource/admin/image/873.png\" />
\t\t                        <input id=\"mobile\" validate=\"phone\" msg=\"请正确输入手机号码\" type=\"text\" placeholder=\"手机号码\" class=\"required phone\"/>
\t\t                    </div>
\t\t                </div>
\t\t\t\t\t\t
\t\t                <div class=\"form-group form-wrap\" style=\"margin-bottom:10px ;display:none \">
\t\t                    <div class=\"input-group\">
\t\t                        <input id=\"password\" validate=\"password\" msg=\"密码不符合规格\" type=\"password\" validate=\"password\" placeholder=\"请输入密码\">
\t\t                \t</div>
\t\t                </div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class='form-group' style=\"margin-bottom:10px; display: \">
\t\t                    <div  class=\"input-group form-wrap vcode\">
\t\t                        \t<img src=\"/resource/admin/image/872.png\" />
\t\t                        <input type=\"text\" id=\"vcode\" validate=\"/[\\d]{4}/\" style=\"width:101px\" msg=\"验证码格式错误\" type=\"text\" placeholder=\"请输入验证码\"/>
\t\t                    </div>
\t\t                    <div class=\"register\">获取验证码</div>
\t                \t</div>

\t\t\t\t\t\t<div class=\"other\">
\t\t\t\t\t\t\t<sapn class=\"rember\"><input type=\"checkbox\" name=\"\">&nbsp;记住我</sapn><span class=\"forgot\"><a href=\"\">忘记密码？</a></span>
\t\t\t\t\t\t</div>
\t\t                
\t\t                <div class=\"registerNow btn\" id=\"login_btn\">
\t\t                    登录
\t\t                </div>

\t\t            </form>
\t\t\t\t
\t\t\t\t</div>
\t        </div>

\t    </div>
\t\t
\t</div>

</div>


<!-- <div id=\"reg_cont\" style=\"display: none\">
    静态页面需要做成选选项卡：
    手机号码：<input id=\"mobile\" validate=\"phone\" msg=\"请正确输入手机号码\" type=\"text\">
    验证码：<input id=\"vcode\" validate=\"/[\\d]{4}/\" msg=\"验证码格式错误\" type=\"text\">
    密码：<input id=\"password\" type=\"text\">
    <button id=\"login_btn\">登陆</button>

</div> -->
<script src=\"/resource/front/js/jsapp/login.js\"></script>
";
        // line 80
        $this->loadTemplate("front/footer.html", "front/common/login.html", 80)->display($context);
    }

    public function getTemplateName()
    {
        return "front/common/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 80,  21 => 2,  19 => 1,);
    }
}
/* {% include 'front/header.html' %}*/
/* <link rel="stylesheet" type="text/css" href="/resource/front/css/login.css">*/
/* <style>*/
/* */
/* .container{*/
/*     width: 1200px;margin: 0px auto;padding: 0px;border:1px red silod;*/
/*    	height:743px ;*/
/*       }*/
/*  #body{*/
/*  	width: 100%;margin: 0px auto;padding: 0px;*/
/*  }*/
/* </style>*/
/* <div id="body">*/
/* 	<div class="container">*/
/* */
/* 		<div class="clearfix wrap">*/
/* 	        <div class="pull-left left-content">*/
/* 				<img src="/resource/admin/image/1658.jpg" />*/
/* 	        </div>*/
/* 			*/
/* 	        <div class="pull-left right-content">*/
/* 				<ul class="login_type">*/
/* 					<li class="active"><a href="javascript:void(0)">密码登录</a></li>*/
/* 					<li><a href="javascript:void(0)">验证码登录</a></li>*/
/* 				</ul>*/
/* */
/* 				<div class="login_table" id="reg_cont">*/
/* 		            <form class="validateForm pwd_login" style="display: ">*/
/* */
/* 		                <div class="form-group form-wrap ">*/
/* 		                    <div class="input-group">*/
/* 		                        	<img src="/resource/admin/image/873.png" />*/
/* 		                        <input id="mobile" validate="phone" msg="请正确输入手机号码" type="text" placeholder="手机号码" class="required phone"/>*/
/* 		                    </div>*/
/* 		                </div>*/
/* 						*/
/* 		                <div class="form-group form-wrap" style="margin-bottom:10px ;display:none ">*/
/* 		                    <div class="input-group">*/
/* 		                        <input id="password" validate="password" msg="密码不符合规格" type="password" validate="password" placeholder="请输入密码">*/
/* 		                	</div>*/
/* 		                </div>*/
/* 						*/
/* 						<div class='form-group' style="margin-bottom:10px; display: ">*/
/* 		                    <div  class="input-group form-wrap vcode">*/
/* 		                        	<img src="/resource/admin/image/872.png" />*/
/* 		                        <input type="text" id="vcode" validate="/[\d]{4}/" style="width:101px" msg="验证码格式错误" type="text" placeholder="请输入验证码"/>*/
/* 		                    </div>*/
/* 		                    <div class="register">获取验证码</div>*/
/* 	                	</div>*/
/* */
/* 						<div class="other">*/
/* 							<sapn class="rember"><input type="checkbox" name="">&nbsp;记住我</sapn><span class="forgot"><a href="">忘记密码？</a></span>*/
/* 						</div>*/
/* 		                */
/* 		                <div class="registerNow btn" id="login_btn">*/
/* 		                    登录*/
/* 		                </div>*/
/* */
/* 		            </form>*/
/* 				*/
/* 				</div>*/
/* 	        </div>*/
/* */
/* 	    </div>*/
/* 		*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* */
/* <!-- <div id="reg_cont" style="display: none">*/
/*     静态页面需要做成选选项卡：*/
/*     手机号码：<input id="mobile" validate="phone" msg="请正确输入手机号码" type="text">*/
/*     验证码：<input id="vcode" validate="/[\d]{4}/" msg="验证码格式错误" type="text">*/
/*     密码：<input id="password" type="text">*/
/*     <button id="login_btn">登陆</button>*/
/* */
/* </div> -->*/
/* <script src="/resource/front/js/jsapp/login.js"></script>*/
/* {% include 'front/footer.html' %}*/
/* */
