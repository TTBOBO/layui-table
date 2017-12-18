<?php

/* admin/user/messege.html */
class __TwigTemplate_e22e00a3a5cb3f36dad82917d7fa01cdb2010de7147189ef7b4ab6a016d7461e extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/messege.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/messege.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_messege-id\", width: 80, sort: true, title: \"消息编号\", type: \"\", sear: \"um_messege-id\"},
                        {field: \"um_messege-content\", width: 100, title: \"用户名\", type: \"\", sear: \"um_messege-content\", },
                        {field: \"um_user-username\", width: 100, title: \"用户名\", sear: \"um_user-uid\", },
                         {field: \"um_messege-type\", width: 100,type:\"select\", title: \"消息类型\", sear: \"um_messege-type\",enum: {0: \"普通消息\", 1: \"警告消息\"} },
                        {field: \"um_messege-status\", width: 150,type:\"select\", title: \"消息状态\",  sear: \"um_company-company_id\",enum: {0: \"待发送\", 1: \"已发送\"}},
                         {field: \"um_messege-create_at\", width: 150,type:\"time\", title: \"消息创建时间\",  sear: \"um_loan-create_at\"},
                        {field: \"right\", width: 80, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_um_message/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\",
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_messege-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/user/info_messege?id='}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });
            function getData(res, callback) {
                console.log(res);
                if (typeof callback == 'function') {
                    callback(res.data);
                }
                console.log(res.data);
            }
        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/messege.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* <script type="text/html" id="barDemo">*/
/*     <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_messege-id", width: 80, sort: true, title: "消息编号", type: "", sear: "um_messege-id"},*/
/*                         {field: "um_messege-content", width: 100, title: "用户名", type: "", sear: "um_messege-content", },*/
/*                         {field: "um_user-username", width: 100, title: "用户名", sear: "um_user-uid", },*/
/*                          {field: "um_messege-type", width: 100,type:"select", title: "消息类型", sear: "um_messege-type",enum: {0: "普通消息", 1: "警告消息"} },*/
/*                         {field: "um_messege-status", width: 150,type:"select", title: "消息状态",  sear: "um_company-company_id",enum: {0: "待发送", 1: "已发送"}},*/
/*                          {field: "um_messege-create_at", width: 150,type:"time", title: "消息创建时间",  sear: "um_loan-create_at"},*/
/*                         {field: "right", width: 80, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_um_message/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: "",*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_messege-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/user/info_messege?id='}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/*             function getData(res, callback) {*/
/*                 console.log(res);*/
/*                 if (typeof callback == 'function') {*/
/*                     callback(res.data);*/
/*                 }*/
/*                 console.log(res.data);*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
