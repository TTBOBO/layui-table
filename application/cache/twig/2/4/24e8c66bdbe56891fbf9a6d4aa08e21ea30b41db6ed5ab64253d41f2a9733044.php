<?php

/* admin/im/channel_people.html */
class __TwigTemplate_a6b895b789b476a86eed31d8cb0dd59a1486b98114373bc444dff8486efccdc4 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/channel_people.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/channel_people.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/channel_people.html", 4)->display($context);
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
                        {field: \"im_channel_people-id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"im_channel_people-id\"},
                        {field: \"im_channel_people-username\", width: 120, title: \"用户名\", type: \"\", sear: \"im_channel_people-username\"},
                        {field: \"im_channel_people-avatar\", width: 120, title: \"头像\", type: \"image\", sear: \"\",},
                        {field: \"im_channel_people-sex\", width: 100, title: \"性别\", type: \"select\", sear: \"im_channel_people-sex\",enum: {0:\"未知\",1:\"男\",2:\"女\"}},
                        {field: \"im_channel_people-company_name\", width: 120, title: \"公司名称\", type: \"\", sear: \"im_channel_people-company_name\"},
                        {field: \"im_channel_people-position\", width: 80, title: \"岗位\", type: \"select\", sear: \"im_channel_people-position\",enum: {0:\"不显示\",1:\"显示\"}},
                        {field: \"pm_regions-name\", width: 100, title: \"城市ID\", type: \"\", sear: \"im_channel_people-city_id\"},
                        {field: \"pm_regions-name\", width: 100,  title: \"城市名称\", type: \"\", sear: \"im_channel_people-express_price\"},
                        {field: \"im_channel_people-label\", width: 100,  title: \"标签\", type: \"\", sear: \"im_channel_people-label\"},
                        {field: \"im_channel_people-is_show\", width: 100,  title: \"是否显示\", type: \"\", sear: \"im_channel_people-is_show\"},
                        {field: \"im_channel_people-education_info\", width: 100,  title: \"教育背景\", type: \"\", sear: \"im_channel_people-education_info\"},
                        {field: \"im_channel_people-work_info\", width: 100,  title: \"工作经验\", type: \"\", sear: \"im_channel_people-work_info\"},
                        {field: \"im_channel_people-project_info\", width: 100,  title: \"项目经验\", type: \"\", sear: \"im_channel_people-project_info\"},
                        {field: \"im_channel_people-haswin_info\", width: 100,  title: \"获奖情况\", type: \"\", sear: \"im_channel_people-haswin_info\"},
                        {field: \"im_channel_people-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"im_channel_people-create_at\"},
                        {field: \"right\", width: 80, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right' }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/api_channel_people/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"im_channel_people-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/auser/info_channel_people/?id='}
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

</html>




";
    }

    public function getTemplateName()
    {
        return "admin/im/channel_people.html";
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
/*                         {field: "im_channel_people-id", width: 80, sort: true, title: "id", type: "", sear: "im_channel_people-id"},*/
/*                         {field: "im_channel_people-username", width: 120, title: "用户名", type: "", sear: "im_channel_people-username"},*/
/*                         {field: "im_channel_people-avatar", width: 120, title: "头像", type: "image", sear: "",},*/
/*                         {field: "im_channel_people-sex", width: 100, title: "性别", type: "select", sear: "im_channel_people-sex",enum: {0:"未知",1:"男",2:"女"}},*/
/*                         {field: "im_channel_people-company_name", width: 120, title: "公司名称", type: "", sear: "im_channel_people-company_name"},*/
/*                         {field: "im_channel_people-position", width: 80, title: "岗位", type: "select", sear: "im_channel_people-position",enum: {0:"不显示",1:"显示"}},*/
/*                         {field: "pm_regions-name", width: 100, title: "城市ID", type: "", sear: "im_channel_people-city_id"},*/
/*                         {field: "pm_regions-name", width: 100,  title: "城市名称", type: "", sear: "im_channel_people-express_price"},*/
/*                         {field: "im_channel_people-label", width: 100,  title: "标签", type: "", sear: "im_channel_people-label"},*/
/*                         {field: "im_channel_people-is_show", width: 100,  title: "是否显示", type: "", sear: "im_channel_people-is_show"},*/
/*                         {field: "im_channel_people-education_info", width: 100,  title: "教育背景", type: "", sear: "im_channel_people-education_info"},*/
/*                         {field: "im_channel_people-work_info", width: 100,  title: "工作经验", type: "", sear: "im_channel_people-work_info"},*/
/*                         {field: "im_channel_people-project_info", width: 100,  title: "项目经验", type: "", sear: "im_channel_people-project_info"},*/
/*                         {field: "im_channel_people-haswin_info", width: 100,  title: "获奖情况", type: "", sear: "im_channel_people-haswin_info"},*/
/*                         {field: "im_channel_people-create_at", width: 150,  title: "创建时间", type: "time", sear: "im_channel_people-create_at"},*/
/*                         {field: "right", width: 80, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right' }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/api_channel_people/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "im_channel_people-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/auser/info_channel_people/?id='}*/
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
/* */
/* */
/* */
/* */
/* */
