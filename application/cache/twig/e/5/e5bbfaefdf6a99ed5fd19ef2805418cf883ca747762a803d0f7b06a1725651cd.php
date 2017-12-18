<?php

/* admin/currency/advisory.html */
class __TwigTemplate_e5a1171c09b53c74f3737789ef7e5f639396cd7ff2cbfc6a700116be2b6d1b9a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/advisory.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/advisory.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/advisory.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
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
                       btnArr: [{title: \"添加\", type: \"add\"},
                       {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
//                          {title: \"导入\", type: \"improt\"},
//                          {title: \"导出\", type: \"export\" }
\t\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"type\", width: 80, title: \"类型\", type: \"select\", sear: \"type\", enum: {0: \"海脉资讯\", 1: \"行业资讯\"}},
                        {field: \"title\", width: 80, title: \"标题\", type: \"\", sear: \"title\"},
                        {field: \"ctitle\", width: 80, title: \"副标题\", type: \"\", sear: \"ctitle\"},
                        {field: \"titlepic\", width: 80, title: \"标题图片\", type: \"image\", sear: \"titlepic\"},
                        {field: \"content\", width: 80, title: \"内容\", type: \"\", sear: \"content\"},
                        {field: \"create_at\", width: 120, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_advisory/grid\",
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
                           {type: \"edit\", url: '/admin/currency/editAdvisory?id='},
                         {type: \"detail\", url: '/admin/currency/infoAdvisory?id='},
                            {type: \"del\", url: '/admin/pm/api_advisory/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addAdvisory'},
                        {type: \"plDel\",url: '/admin/pm/api_advisory/delete'}
//                          {type: \"improt\", url: \"/upload\"},
//                          {type: \"export\", url: \"/upload\"}
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
        return "admin/currency/advisory.html";
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
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" role="5" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
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
/*                        btnArr: [{title: "添加", type: "add"},*/
/*                        {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/* //                          {title: "导入", type: "improt"},*/
/* //                          {title: "导出", type: "export" }*/
/* 							]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "type", width: 80, title: "类型", type: "select", sear: "type", enum: {0: "海脉资讯", 1: "行业资讯"}},*/
/*                         {field: "title", width: 80, title: "标题", type: "", sear: "title"},*/
/*                         {field: "ctitle", width: 80, title: "副标题", type: "", sear: "ctitle"},*/
/*                         {field: "titlepic", width: 80, title: "标题图片", type: "image", sear: "titlepic"},*/
/*                         {field: "content", width: 80, title: "内容", type: "", sear: "content"},*/
/*                         {field: "create_at", width: 120, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_advisory/grid",*/
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
/*                          Event: [*/
/*                            {type: "edit", url: '/admin/currency/editAdvisory?id='},*/
/*                          {type: "detail", url: '/admin/currency/infoAdvisory?id='},*/
/*                             {type: "del", url: '/admin/pm/api_advisory/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addAdvisory'},*/
/*                         {type: "plDel",url: '/admin/pm/api_advisory/delete'}*/
/* //                          {type: "improt", url: "/upload"},*/
/* //                          {type: "export", url: "/upload"}*/
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
