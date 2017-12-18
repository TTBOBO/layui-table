<?php

/* admin/nm/message.html */
class __TwigTemplate_0692af56500e3bf7f75aa7038fbe47ca7354d4ee8cfd0d5133a5d4f21c16bad1 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/nm/message.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/nm/message.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/nm/message.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            hm.load(function (option) {
                var table = option.table;
                var public = option.public;
                public.showTable({
                    topTool: {
                        btnArr: [
                            {title: \"高级搜索\", type: \"hSearch\", },
//                          {title: \"导入\", type: \"improt\", },
//                          {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"to_user\", width: 80, title: \"消息接收者手机号码\", type: \"\", sear: \"to_user\"},
                        {field: \"title\", width: 80, title: \"邮箱类消息的标题\", type: \"\", sear: \"title\",},
                        {field: \"message\", width: 150, title: \"消息体\", type: \"\", sear: \"message\"},
                        {field: \"vcode\", width: 150, title: \"验证码\", type: \"\", sear: \"vcode\"},
                        {field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"type\",enum: {1:\"短信sms\",2:\"邮件emali\",3:\"模版消息tmplmsg\"}},
                        {field: \"send_status\", width: 150, title: \"发送状态\", type: \"select\", sear: \"send_status\",enum: {1:\"发送成功\",2:\"发送失败\"}},
                        {field: \"fail_times\", width: 150, title: \"发送失败的次数\", type: \"\", sear: \"fail_times\"},
                        {field: \"create_at\", width: 150, sort: true title: \"创建时间\", type: \"\", sear: \"create_at\"},
                        {field: \"update_at\", width: 150, sort: true title: \"修改时间\", type: \"\", sear: \"update_at\"},
                        {field: \"right\", width: 80, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/nm/api_message/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/auser/infoMessage?id='},
                        ]
                    },
                    topBtnActive: {
                        Event: [
                            {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/nm/message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             hm.load(function (option) {*/
/*                 var table = option.table;*/
/*                 var public = option.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/* //                          {title: "导入", type: "improt", },*/
/* //                          {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "to_user", width: 80, title: "消息接收者手机号码", type: "", sear: "to_user"},*/
/*                         {field: "title", width: 80, title: "邮箱类消息的标题", type: "", sear: "title",},*/
/*                         {field: "message", width: 150, title: "消息体", type: "", sear: "message"},*/
/*                         {field: "vcode", width: 150, title: "验证码", type: "", sear: "vcode"},*/
/*                         {field: "type", width: 150, title: "类型", type: "select", sear: "type",enum: {1:"短信sms",2:"邮件emali",3:"模版消息tmplmsg"}},*/
/*                         {field: "send_status", width: 150, title: "发送状态", type: "select", sear: "send_status",enum: {1:"发送成功",2:"发送失败"}},*/
/*                         {field: "fail_times", width: 150, title: "发送失败的次数", type: "", sear: "fail_times"},*/
/*                         {field: "create_at", width: 150, sort: true title: "创建时间", type: "", sear: "create_at"},*/
/*                         {field: "update_at", width: 150, sort: true title: "修改时间", type: "", sear: "update_at"},*/
/*                         {field: "right", width: 80, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/nm/api_message/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/auser/infoMessage?id='},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
