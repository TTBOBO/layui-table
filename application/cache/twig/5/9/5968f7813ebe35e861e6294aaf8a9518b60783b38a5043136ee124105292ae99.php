<?php

/* admin/auser/banner.html */
class __TwigTemplate_8203c2f6be6958a8da7e5a3522b3e758d8b674d7dcd7c88ac6c03be592cada3a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/banner.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/banner.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/banner.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                        btnArr: [{title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                             {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"导入\", type: \"improt\"},
                           \t{title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"am_ads-id\", width: 80,title: \"广告ID\", type: \"\", sear: \"am_ads-id\"},
                        {field: \"am_ads-name\", width: 120, title: \"广告名称\", type: \"\", sear: \"am_ads-name\"},
                        {field: \"am_ads_type-name\", width: 120, title: \"广告类型\", type: \"select\", sear: \"am_ads.type\",url:\"/admin/am/Api_ads_type/grid\",colKey:'id',colName:'name'},
                        {field: \"am_ads-img\", width: 180, title: \"广告图片\", type: \"image\", sear: \"\"},
                        {field: \"am_ads-link\", width: 180, title: \"链接地址\", type: \"\", sear: \"am_ads-link\"},
                        {field: \"am_ads-description\", width: 150, title: \"广告描述\", type: \"\", sear: \"am_ads-description\"},
                        {field: \"am_ads-begin_at\", width: 150, title: \"开始时间\",type: \"time\",sear: \"am_ads-begin_at\"},
                        {field: \"am_ads-end_at\", width: 200,  title: \"结束时间\", type: \"time\", sear: \"am_ads-end_at\"},
                        {field: \"am_ads-create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"am_ads-create_at\"},
                        {field: \"am_ads-update_at\", width: 240, title: \"修改时间\", type: \"time\", sear: \"am_ads-update_at\"},
                   \t\t{field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/am/Api_ads/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"am_ads-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/info_banner?id='},
                            {type: \"edit\", url: '/admin/auser/editbanner?id='},
                            {type: \"del\", url: '/admin/am/Api_ads/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                            {type: \"add\", url: \"/admin/auser/addbanner\"},
                            {type: \"plDel\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/delete'},
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
        return "admin/auser/banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 65,  88 => 57,  73 => 45,  49 => 24,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [{title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                              {title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}admin/api_product/del"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "导入", type: "improt"},*/
/*                            	{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "am_ads-id", width: 80,title: "广告ID", type: "", sear: "am_ads-id"},*/
/*                         {field: "am_ads-name", width: 120, title: "广告名称", type: "", sear: "am_ads-name"},*/
/*                         {field: "am_ads_type-name", width: 120, title: "广告类型", type: "select", sear: "am_ads.type",url:"/admin/am/Api_ads_type/grid",colKey:'id',colName:'name'},*/
/*                         {field: "am_ads-img", width: 180, title: "广告图片", type: "image", sear: ""},*/
/*                         {field: "am_ads-link", width: 180, title: "链接地址", type: "", sear: "am_ads-link"},*/
/*                         {field: "am_ads-description", width: 150, title: "广告描述", type: "", sear: "am_ads-description"},*/
/*                         {field: "am_ads-begin_at", width: 150, title: "开始时间",type: "time",sear: "am_ads-begin_at"},*/
/*                         {field: "am_ads-end_at", width: 200,  title: "结束时间", type: "time", sear: "am_ads-end_at"},*/
/*                         {field: "am_ads-create_at", width: 150, title: "创建时间", type: "time", sear: "am_ads-create_at"},*/
/*                         {field: "am_ads-update_at", width: 240, title: "修改时间", type: "time", sear: "am_ads-update_at"},*/
/*                    		{field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/am/Api_ads/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "am_ads-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/info_banner?id='},*/
/*                             {type: "edit", url: '/admin/auser/editbanner?id='},*/
/*                             {type: "del", url: '/admin/am/Api_ads/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                             {type: "add", url: "/admin/auser/addbanner"},*/
/*                             {type: "plDel",url: '{{base_url}}admin/api_product/delete'},*/
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
