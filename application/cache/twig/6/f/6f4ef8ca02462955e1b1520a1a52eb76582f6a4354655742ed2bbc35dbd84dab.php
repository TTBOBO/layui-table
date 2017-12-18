<?php

/* admin/nm/notice.html */
class __TwigTemplate_a7c1c01d69a96d632638198ffdbea2a7aa990c7affdb0f6f20a3eb9d22ead369 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/nm/notice.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/nm/notice.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/nm/notice.html", 4)->display($context);
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
                            {title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"nm_notice-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"nm_notice-id\"},
                        {field: \"nm_notice-name\", width: 80, title: \"消息名称\", type: \"\", sear: \"nm_notice-name\"},
                        {field: \"nm_notice_type-name\", width: 80, title: \"类型\", type: \"\", sear: \"nm_notice_type-name\",},
                        {field: \"nm_notice-description\", width: 150, title: \"描述\", type: \"\", sear: \"nm_notice-description\"},
                        {field: \"nm_notice-link\", width: 150, title: \"点击链接\", type: \"\", sear: \"nm_notice-link\"},
                        {field: \"um_user-username\", width: 150, title: \"用户id\", type: \"\", sear: \"um_user-uid\"},
                        {field: \"nm_notice-status\", width: 150, title: \"状态\", type: \"\", sear: \"nm_notice-status\"},
                        {field: \"nm_notice-thumb\", width: 150, title: \"自定义图表\", type: \"\", sear: \"nm_notice-thumb\"},
                        {field: \"nm_notice-param\", width: 150, title: \"参数\", type: \"\", sear: \"nm_notice-param\"},
                        {field: \"nm_notice-read_at\", width: 150, title: \"阅读时间\", type: \"time\", sear: \"nm_notice-read_at\"},
                        {field: \"nm_notice-create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"nm_notice-read_at\"},
                        {field: \"nm_notice-update_at\", width: 150, title: \"更新时间\", type: \"time\", sear: \"nm_notice-update_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/nm/api_notice/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"nm_notice-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/auser/infoNotice?id='},
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
        return "admin/nm/notice.html";
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
/*                             {title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "nm_notice-id", width: 80, sort: true, title: "ID", type: "", sear: "nm_notice-id"},*/
/*                         {field: "nm_notice-name", width: 80, title: "消息名称", type: "", sear: "nm_notice-name"},*/
/*                         {field: "nm_notice_type-name", width: 80, title: "类型", type: "", sear: "nm_notice_type-name",},*/
/*                         {field: "nm_notice-description", width: 150, title: "描述", type: "", sear: "nm_notice-description"},*/
/*                         {field: "nm_notice-link", width: 150, title: "点击链接", type: "", sear: "nm_notice-link"},*/
/*                         {field: "um_user-username", width: 150, title: "用户id", type: "", sear: "um_user-uid"},*/
/*                         {field: "nm_notice-status", width: 150, title: "状态", type: "", sear: "nm_notice-status"},*/
/*                         {field: "nm_notice-thumb", width: 150, title: "自定义图表", type: "", sear: "nm_notice-thumb"},*/
/*                         {field: "nm_notice-param", width: 150, title: "参数", type: "", sear: "nm_notice-param"},*/
/*                         {field: "nm_notice-read_at", width: 150, title: "阅读时间", type: "time", sear: "nm_notice-read_at"},*/
/*                         {field: "nm_notice-create_at", width: 150, title: "创建时间", type: "time", sear: "nm_notice-read_at"},*/
/*                         {field: "nm_notice-update_at", width: 150, title: "更新时间", type: "time", sear: "nm_notice-update_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/nm/api_notice/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "nm_notice-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/auser/infoNotice?id='},*/
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
