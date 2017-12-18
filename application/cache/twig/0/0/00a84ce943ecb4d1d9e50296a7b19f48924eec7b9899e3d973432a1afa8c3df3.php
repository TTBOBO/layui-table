<?php

/* admin/im/roadshow.html */
class __TwigTemplate_2c9d8e26ee147b3d60315c68da5d0525abcfa2fa52b879549385ffe4f9099661 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/roadshow.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/roadshow.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/roadshow.html", 4)->display($context);
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
\t\t\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                          \t\t{title: \"导出\", type: \"export\" }
\t\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"活动id\", type: \"\", sear: \"id\"},
                        {field: \"title\", width: 80, title: \"活动标题\", type: \"\", sear: \"title\"},
                        {field: \"thumb\", width: 80, title: \"活动主题\", type: \"\", sear: \"thumb\"},
                        {field: \"ishot\", width: 80, title: \"是否热门\", type: \"select\", sear: \"ishot\",enum: {0: \"是\",1:\"否\"}},
                        {field: \"description\", width: 80, title: \"描述\", type: \"\", sear: \"description\"},
                        {field: \"create_at\", width: 80, title: \"活动创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"addr\", width: 80, title: \"活动地址\", type: \"\", sear: \"addr\"},
                        {field: \"owner\", width: 80, title: \"主办方\", type: \"\", sear: \"owner\"},
                        {field: \"start_time\", width: 80, title: \"活动开始时间\", type: \"time\", sear: \"start_time\"},
                        {field: \"end_time\", width: 80, title: \"活动结束时间\", type: \"time\", sear: \"end_time\"},
                        {field: \"special_info\", width: 80, title: \"特色信息\", type: \"\", sear: \"special_info\"},
                        {field: \"recommend_reason\", width: 80, title: \"推荐理由\", type: \"\", sear: \"recommend_reason\"},
                        {field: \"content\", width: 150, title: \"主体内容\", type: \"\", sear: \"content\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/api_roadshow/grid\",
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
                         Event: [{type: \"edit\", url: '/admin/ioffice/editRoadshow?id='},
                            {type: \"detail\", url: '/admin/ioffice/info_roadshow?id='},
                            {type: \"del\", url: '/admin/im/api_roadshow/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/ioffice/addRoadshow'},
                        \t\t{type: \"plDel\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/im/api_roadshow/delete'},
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
";
    }

    public function getTemplateName()
    {
        return "admin/im/roadshow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 65,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 								{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                           		{title: "导出", type: "export" }*/
/* 							]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "活动id", type: "", sear: "id"},*/
/*                         {field: "title", width: 80, title: "活动标题", type: "", sear: "title"},*/
/*                         {field: "thumb", width: 80, title: "活动主题", type: "", sear: "thumb"},*/
/*                         {field: "ishot", width: 80, title: "是否热门", type: "select", sear: "ishot",enum: {0: "是",1:"否"}},*/
/*                         {field: "description", width: 80, title: "描述", type: "", sear: "description"},*/
/*                         {field: "create_at", width: 80, title: "活动创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "addr", width: 80, title: "活动地址", type: "", sear: "addr"},*/
/*                         {field: "owner", width: 80, title: "主办方", type: "", sear: "owner"},*/
/*                         {field: "start_time", width: 80, title: "活动开始时间", type: "time", sear: "start_time"},*/
/*                         {field: "end_time", width: 80, title: "活动结束时间", type: "time", sear: "end_time"},*/
/*                         {field: "special_info", width: 80, title: "特色信息", type: "", sear: "special_info"},*/
/*                         {field: "recommend_reason", width: 80, title: "推荐理由", type: "", sear: "recommend_reason"},*/
/*                         {field: "content", width: 150, title: "主体内容", type: "", sear: "content"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/api_roadshow/grid",*/
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
/*                          Event: [{type: "edit", url: '/admin/ioffice/editRoadshow?id='},*/
/*                             {type: "detail", url: '/admin/ioffice/info_roadshow?id='},*/
/*                             {type: "del", url: '/admin/im/api_roadshow/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/ioffice/addRoadshow'},*/
/*                         		{type: "plDel",url: '{{base_url}}/admin/im/api_roadshow/delete'},*/
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
