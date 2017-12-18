<?php

/* admin/currency/pm_web_cfg.html */
class __TwigTemplate_5d8b364c6a5a6435b249e3da85b191fc9c2c7dcf4cf055d43f0a50fe38001064 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_web_cfg.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_web_cfg.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_web_cfg.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a
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
                      {title: \"添加\",type: \"add\"},
                     {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                      {title: \"高级搜索\", type: \"hSearch\"},
                          {title: \"导出\", type: \"export\"}
                         ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"web_logo\", width: 80, title: \"网站logo\", type: \"image\", sear: \"web_logo\"},
                        {field: \"description\", width: 80, title: \"网站描述\", type: \"\", sear: \"description\",},
                        {field: \"company_phone\", width: 150, title: \"公司电话\", type: \"\", sear: \"company_phone\"},
                        {field: \"name\", width: 150, title: \"网站名称\", type: \"\", sear: \"name\"},
                        {field: \"title\", width: 80, title: \"标题\", type: \"\", sear: \"title\"},
                        {field: \"keywords\", width: 150, title: \"关键字\", type: \"\", sear: \"keywords\"},
                        {field: \"author\", width: 150, title: \"版权\", sear: \"author\"},
                        {field: \"create_at\", width: 150, sort: true, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/Api_web_cfg/grid\",
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
                        \t{type: \"edit\", url: '/admin/currency/editWebCfg?id='},
                            {type: \"detail\", url: '/admin/currency/info_web_cfg?id='},
                            {type: \"del\", url: '/admin/pm/Api_web_cfg/delete'},
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addWebCfg'},
                        \t\t{type: \"plDel\",url: '/admin/pm/Api_web_cfg/delete'},
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
        return "admin/currency/pm_web_cfg.html";
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
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a*/
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
/*                       {title: "添加",type: "add"},*/
/*                      {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                       {title: "高级搜索", type: "hSearch"},*/
/*                           {title: "导出", type: "export"}*/
/*                          ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "web_logo", width: 80, title: "网站logo", type: "image", sear: "web_logo"},*/
/*                         {field: "description", width: 80, title: "网站描述", type: "", sear: "description",},*/
/*                         {field: "company_phone", width: 150, title: "公司电话", type: "", sear: "company_phone"},*/
/*                         {field: "name", width: 150, title: "网站名称", type: "", sear: "name"},*/
/*                         {field: "title", width: 80, title: "标题", type: "", sear: "title"},*/
/*                         {field: "keywords", width: 150, title: "关键字", type: "", sear: "keywords"},*/
/*                         {field: "author", width: 150, title: "版权", sear: "author"},*/
/*                         {field: "create_at", width: 150, sort: true, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/Api_web_cfg/grid",*/
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
/*                         	{type: "edit", url: '/admin/currency/editWebCfg?id='},*/
/*                             {type: "detail", url: '/admin/currency/info_web_cfg?id='},*/
/*                             {type: "del", url: '/admin/pm/Api_web_cfg/delete'},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addWebCfg'},*/
/*                         		{type: "plDel",url: '/admin/pm/Api_web_cfg/delete'},*/
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
