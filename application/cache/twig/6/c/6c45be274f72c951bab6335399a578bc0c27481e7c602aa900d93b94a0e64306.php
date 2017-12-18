<?php

/* admin/login.html */
class __TwigTemplate_01ebd30b301a4605f09ae25d3d016119dd01ac3415481530edd367dc14ff9a97 extends Twig_Template
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
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, (isset($context["webname"]) ? $context["webname"] : null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/resource/front/css/animate.min.css\">
        <link rel=\"stylesheet\" href=\"/resource/front/css/bootstrap.min14ed.css\">
        <script type=\"text/javascript\" src=\"/resource/front/js/jquery.min.js\"></script>
        <script src=\"/resource/admin/js/jslib/ykp.js\"></script>
        <style>
            body{
                background: url(/resource/front/images/111.jpg) no-repeat;
                /*background-size: cover;*/
            }
            .login {
                margin: 150px auto 0 auto;
                min-height: 420px;
                max-width: 420px;
                padding: 40px;
                background-color: #ffffff;
                margin-left: auto;
                margin-right: auto;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .title {
                margin: 10px 0 30px -58px;
                padding: 18px 10px 18px 60px;
                background: lightskyblue;
                color: #fff;
                font-size: 16px;
                position: relative;
            }

            .title:before {
                position: absolute;
                content: \"\";
                width: 0px;
                height: 0px;
                border: 10px solid;
                border-top-width: 9px;
                border-right-width: 9px;
                border-bottom-width: 9px;
                border-left-width: 9px;
                transform: rotateZ(360deg);
                border-color: black black transparent transparent;
                left: 0px;
                top: 100%;
            }

            .image {
                background: url(/resource/front/images/aiwrap.png);
                width: 18px;
                height: 10px;
                margin: 0 0 20px -58px;
                position: relative;
            }

            .btn {
                width: 100%;
            }

        </style>
    </head>

    <body >
        <div class=\"login  animated fadeInRight\">
            <div class=\"title\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["webname"]) ? $context["webname"] : null), "html", null, true);
        echo "</div>
            <!--<div class=\"image\"></div>-->

            <form class=\"m-t\" role=\"form\" action=\"\">
                <div class=\"form-group\" style=\"margin-bottom: 20px; height: 50px;\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"用户名\" required=\"\" value=\"admin\" id=\"username\" style=\" height: 50px;\">
                </div>
                <div class=\"form-group\" style=\"margin-bottom: 50px; \">
                    <input type=\"password\" class=\"form-control\" placeholder=\"密码\" required=\"\" value=\"admin888\" id=\"password\" style=\" height: 50px;\">
                </div>
                <button type=\"button\" id=\"submit\" class=\"btn btn-primary block full-width m-b\">登 录</button>

            </form>
        </div>
    </body>
</html>
<script>
\$(function () {
    \$('#submit').click(function () {
        var data = {
            username:\$('#username').val(),
            userpass:\$('#password').val()
        };
        ykp.doAjax({
            url: '/admin/login/index',
            data:data,
            dataType: 'json',
            method: \"post\",
            success: function (res) {
            \tykp.setCookie('admin',JSON.stringify(res.data))
                if(res.code != 0){
                    ykp.prompt(res.msg);
                    return;
                }
                location.reload();
            },
        });
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 69,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{{title}}- {{webname}}</title>*/
/*         <link rel="stylesheet" href="/resource/front/css/animate.min.css">*/
/*         <link rel="stylesheet" href="/resource/front/css/bootstrap.min14ed.css">*/
/*         <script type="text/javascript" src="/resource/front/js/jquery.min.js"></script>*/
/*         <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/*         <style>*/
/*             body{*/
/*                 background: url(/resource/front/images/111.jpg) no-repeat;*/
/*                 /*background-size: cover;*//* */
/*             }*/
/*             .login {*/
/*                 margin: 150px auto 0 auto;*/
/*                 min-height: 420px;*/
/*                 max-width: 420px;*/
/*                 padding: 40px;*/
/*                 background-color: #ffffff;*/
/*                 margin-left: auto;*/
/*                 margin-right: auto;*/
/*                 border-radius: 4px;*/
/*                 box-sizing: border-box;*/
/*             }*/
/* */
/*             .title {*/
/*                 margin: 10px 0 30px -58px;*/
/*                 padding: 18px 10px 18px 60px;*/
/*                 background: lightskyblue;*/
/*                 color: #fff;*/
/*                 font-size: 16px;*/
/*                 position: relative;*/
/*             }*/
/* */
/*             .title:before {*/
/*                 position: absolute;*/
/*                 content: "";*/
/*                 width: 0px;*/
/*                 height: 0px;*/
/*                 border: 10px solid;*/
/*                 border-top-width: 9px;*/
/*                 border-right-width: 9px;*/
/*                 border-bottom-width: 9px;*/
/*                 border-left-width: 9px;*/
/*                 transform: rotateZ(360deg);*/
/*                 border-color: black black transparent transparent;*/
/*                 left: 0px;*/
/*                 top: 100%;*/
/*             }*/
/* */
/*             .image {*/
/*                 background: url(/resource/front/images/aiwrap.png);*/
/*                 width: 18px;*/
/*                 height: 10px;*/
/*                 margin: 0 0 20px -58px;*/
/*                 position: relative;*/
/*             }*/
/* */
/*             .btn {*/
/*                 width: 100%;*/
/*             }*/
/* */
/*         </style>*/
/*     </head>*/
/* */
/*     <body >*/
/*         <div class="login  animated fadeInRight">*/
/*             <div class="title">{{webname}}</div>*/
/*             <!--<div class="image"></div>-->*/
/* */
/*             <form class="m-t" role="form" action="">*/
/*                 <div class="form-group" style="margin-bottom: 20px; height: 50px;">*/
/*                     <input type="text" class="form-control" placeholder="用户名" required="" value="admin" id="username" style=" height: 50px;">*/
/*                 </div>*/
/*                 <div class="form-group" style="margin-bottom: 50px; ">*/
/*                     <input type="password" class="form-control" placeholder="密码" required="" value="admin888" id="password" style=" height: 50px;">*/
/*                 </div>*/
/*                 <button type="button" id="submit" class="btn btn-primary block full-width m-b">登 录</button>*/
/* */
/*             </form>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* <script>*/
/* $(function () {*/
/*     $('#submit').click(function () {*/
/*         var data = {*/
/*             username:$('#username').val(),*/
/*             userpass:$('#password').val()*/
/*         };*/
/*         ykp.doAjax({*/
/*             url: '/admin/login/index',*/
/*             data:data,*/
/*             dataType: 'json',*/
/*             method: "post",*/
/*             success: function (res) {*/
/*             	ykp.setCookie('admin',JSON.stringify(res.data))*/
/*                 if(res.code != 0){*/
/*                     ykp.prompt(res.msg);*/
/*                     return;*/
/*                 }*/
/*                 location.reload();*/
/*             },*/
/*         });*/
/*     });*/
/* });*/
/* </script>*/
