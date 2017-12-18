<?php

/* admin/auser/business_dynamics.html */
class __TwigTemplate_9feccf9d7d570ec8ee6e03274c2ddd4ba60fe4d6d839f1ba6c283fe783f40ada extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/business_dynamics.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/business_dynamics.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/business_dynamics.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                        btnArr: [
                        \t{title: \"添加\", type: \"add\"},
                        \t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"编号\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 120, title: \"商机名称\", type: \"\", sear: \"name\"},
                        {field: \"title\", width: 120, title: \"商机标题\", type: \"\", sear: \"title\"},
                        {field: \"pic\", width: 180, title: \"商机图片\", type: \"image\"},
                        {field: \"addr\", width: 180, title: \"商机所在地址\", type: \"\", sear: \"addr\"},
                        {field: \"date\", width: 150, title: \"商机日期\", type: \"time\", sear: \"date\"},
                        {field: \"start_time\", width: 150, title: \"开始时间\",type: \"time\",sear: \"start_time\"},
                        {field: \"end_time\", width: 200,  title: \"结束时间\", type: \"time\", sear: \"end_time\"},
                        {field: \"desc\", width: 150, title: \"详细描述\", type: \"\", sear: \"desc\"},
                        {field: \"create_at\", width: 240, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                   \t\t{field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/am/Api_business_dynamics/grid\",
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
                        \t{type: \"edit\", url: '/admin/auser/editbusiness_dynamics?id='},
                            {type: \"detail\", url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/info_business_dynamics?id='},
                            {type: \"del\", url: '/admin/am/Api_business_dynamics/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t{type: \"add\", url: \"/admin/auser/addbusiness_dynamics\"},
                        \t{type: \"plDel\",url: '/admin/am/Api_business_dynamics/delete'},
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

</html>



";
    }

    public function getTemplateName()
    {
        return "admin/auser/business_dynamics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 58,  70 => 45,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/*     <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [*/
/*                         	{title: "添加", type: "add"},*/
/*                         	{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "编号", type: "", sear: "id"},*/
/*                         {field: "name", width: 120, title: "商机名称", type: "", sear: "name"},*/
/*                         {field: "title", width: 120, title: "商机标题", type: "", sear: "title"},*/
/*                         {field: "pic", width: 180, title: "商机图片", type: "image"},*/
/*                         {field: "addr", width: 180, title: "商机所在地址", type: "", sear: "addr"},*/
/*                         {field: "date", width: 150, title: "商机日期", type: "time", sear: "date"},*/
/*                         {field: "start_time", width: 150, title: "开始时间",type: "time",sear: "start_time"},*/
/*                         {field: "end_time", width: 200,  title: "结束时间", type: "time", sear: "end_time"},*/
/*                         {field: "desc", width: 150, title: "详细描述", type: "", sear: "desc"},*/
/*                         {field: "create_at", width: 240, title: "创建时间", type: "time", sear: "create_at"},*/
/*                    		{field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/am/Api_business_dynamics/grid",*/
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
/*                         	{type: "edit", url: '/admin/auser/editbusiness_dynamics?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/info_business_dynamics?id='},*/
/*                             {type: "del", url: '/admin/am/Api_business_dynamics/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	{type: "add", url: "/admin/auser/addbusiness_dynamics"},*/
/*                         	{type: "plDel",url: '/admin/am/Api_business_dynamics/delete'},*/
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
/* */
/* */
/* */
/* */
