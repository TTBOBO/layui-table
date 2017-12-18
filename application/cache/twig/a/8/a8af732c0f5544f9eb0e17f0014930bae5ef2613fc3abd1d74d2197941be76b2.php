<?php

/* admin/im/station.html */
class __TwigTemplate_6cfb59ee7d4ee395b45db48cbb27683d8184e95752f3f8963a3fcdfedfbc1318 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/station.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/station.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/station.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                        btnArr: [{title: \"添加\",type: \"add\"},
                        \t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                           \t\t{title: \"导入\", type: \"improt\"},
                            \t{title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"im_station-id\", width: 80, sort: true, title: \"主键\", type: \"\", sear: \"im_station-id\"},
                        {field: \"im_station-tab\", width: 80, title: \"标签\", type: \"\", sear: \"im_station-tab\"},
                        {field: \"im_station-name\", width: 80, title: \"名字\", type: \"\", sear: \"im_station-name\",},
                        {field: \"im_station-type\", width: 80, title: \"计费类型\", type: \"select\", sear: \"im_station-type\", enum: {1: \"小时\", 2: \"4小时\",3:\"天\"}},
                        {field: \"im_station-icon\", width: 100, title: \"工位图标\", type: \"\", sear: \"im_station-icon\"},
                        {field: \"im_station-create_at\", width: 100, title: \"创建时间\", type: \"time\", sear: \"im_station-create_at\"},
                        {field: \"im_station-update_at\", width: 100, title: \"更新时间\", type: \"time\", sear: \"im_station-update_at\"},
                        {field: \"um_user-username\", width: 80, title: \"创建人\", sear: \"im_station-creator_id\"},
                        {field: \"um_user-username\", width: 80,  title: \"更新人\", type: \"\", sear: \"im_station-updator_id\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/Api_station/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"im_station-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/editStation?id='},
                            {type: \"detail\", url: '/admin/auser/infoStation/?id='},
                            {type: \"del\", url: '/admin/im/Api_station/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/addStation'},
                        \t{type: \"plDel\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/im/Api_station/delete'},
                           \t{type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>




";
    }

    public function getTemplateName()
    {
        return "admin/im/station.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 62,  89 => 61,  80 => 55,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	 <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [{title: "添加",type: "add"},*/
/*                         		{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                            		{title: "导入", type: "improt"},*/
/*                             	{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "im_station-id", width: 80, sort: true, title: "主键", type: "", sear: "im_station-id"},*/
/*                         {field: "im_station-tab", width: 80, title: "标签", type: "", sear: "im_station-tab"},*/
/*                         {field: "im_station-name", width: 80, title: "名字", type: "", sear: "im_station-name",},*/
/*                         {field: "im_station-type", width: 80, title: "计费类型", type: "select", sear: "im_station-type", enum: {1: "小时", 2: "4小时",3:"天"}},*/
/*                         {field: "im_station-icon", width: 100, title: "工位图标", type: "", sear: "im_station-icon"},*/
/*                         {field: "im_station-create_at", width: 100, title: "创建时间", type: "time", sear: "im_station-create_at"},*/
/*                         {field: "im_station-update_at", width: 100, title: "更新时间", type: "time", sear: "im_station-update_at"},*/
/*                         {field: "um_user-username", width: 80, title: "创建人", sear: "im_station-creator_id"},*/
/*                         {field: "um_user-username", width: 80,  title: "更新人", type: "", sear: "im_station-updator_id"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/Api_station/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "im_station-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/auser/editStation?id='},*/
/*                             {type: "detail", url: '/admin/auser/infoStation/?id='},*/
/*                             {type: "del", url: '/admin/im/Api_station/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/auser/addStation'},*/
/*                         	{type: "plDel",url: '{{base_url}}admin/im/Api_station/delete'},*/
/*                            	{type: "improt", url: "/upload"},*/
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
/* */
/* */
/* */
/* */
/* */
