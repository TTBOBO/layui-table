<?php

/* admin/im/channel.html */
class __TwigTemplate_0b68227467fa60295892af80bed36af33501743ea542eed44af9d76b5784fca8 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/channel.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/channel.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/channel.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"examine\">审批</a>
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
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"添加\", type: \"add\"},
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"im_channel-id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"im_channel-id\"},
                        {field: \"im_channel-name\", width: 80, title: \"渠道名称\", type: \"\", sear: \"im_channel-name\"},
                        {field: \"im_channel_cate-name\", width: 80, title: \"渠道类型\", type: \"select\", sear: \"im_channel-channel_cateid\",url:'/admin/im/Api_channel_cate/grid',colKey:\"id\",colName:\"name\"},
                        {field: \"pm_industry-id\", width: 80, title: \"行业名称\", type: \"\", sear: \"im_channel-industry_id\"},
                        {field: \"im_channel-status\", width: 80, title: \"审批状态\", type: \"select\", sear: \"im_channel-status\",enum: {0:\"待审批\",1:\"审批成功\",2:\"审批失败\"},examine:true},
                        {field: \"pm_regions-name\", width: 80,title: \"城市名称\", type: \"\", sear: \"im_channel-city_id\"},
                        {field: \"im_channel-logo\", width: 80, title: \"logo图片\", type: \"image\", sear: \"im_channel-logo\"},
                        {field: \"im_channel-description\", width: 80, title: \"描述\", type: \"\", sear: \"im_channel-description\",},
                        {field: \"im_channel-special_info\", width: 150, title: \"特色信息\", type: \"\", sear: \"im_channel-special_info\"},
                        {field: \"im_channel-recommend_reason\", width: 80,title: \"推荐理由\", type: \"\", sear: \"im_channel-recommend_reason\"},
                        {field: \"im_channel-content\", width: 80, title: \"主体内容\", type: \"\", sear: \"im_channel-content\"},
                        {field: \"right\", width: 200, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/Api_channel/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"im_channel-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/auser/info_channel?id='},
                            {type: \"edit\", url: '/admin/auser/edit_channel?id='},
                            {type: \"examine\", url: '/admin/im/Api_channel/change_status'},
                            {type: \"del\", url: '/admin/im/Api_channel/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t{type: \"add\", url: '/admin/auser/add_channel'},
                        \t{type: \"plDel\",url: '/admin/im/Api_channel/delete'},
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
        return "admin/im/channel.html";
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
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="examine">审批</a>*/
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
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "添加", type: "add"},*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "im_channel-id", width: 80, sort: true, title: "id", type: "", sear: "im_channel-id"},*/
/*                         {field: "im_channel-name", width: 80, title: "渠道名称", type: "", sear: "im_channel-name"},*/
/*                         {field: "im_channel_cate-name", width: 80, title: "渠道类型", type: "select", sear: "im_channel-channel_cateid",url:'/admin/im/Api_channel_cate/grid',colKey:"id",colName:"name"},*/
/*                         {field: "pm_industry-id", width: 80, title: "行业名称", type: "", sear: "im_channel-industry_id"},*/
/*                         {field: "im_channel-status", width: 80, title: "审批状态", type: "select", sear: "im_channel-status",enum: {0:"待审批",1:"审批成功",2:"审批失败"},examine:true},*/
/*                         {field: "pm_regions-name", width: 80,title: "城市名称", type: "", sear: "im_channel-city_id"},*/
/*                         {field: "im_channel-logo", width: 80, title: "logo图片", type: "image", sear: "im_channel-logo"},*/
/*                         {field: "im_channel-description", width: 80, title: "描述", type: "", sear: "im_channel-description",},*/
/*                         {field: "im_channel-special_info", width: 150, title: "特色信息", type: "", sear: "im_channel-special_info"},*/
/*                         {field: "im_channel-recommend_reason", width: 80,title: "推荐理由", type: "", sear: "im_channel-recommend_reason"},*/
/*                         {field: "im_channel-content", width: 80, title: "主体内容", type: "", sear: "im_channel-content"},*/
/*                         {field: "right", width: 200, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/Api_channel/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "im_channel-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/auser/info_channel?id='},*/
/*                             {type: "edit", url: '/admin/auser/edit_channel?id='},*/
/*                             {type: "examine", url: '/admin/im/Api_channel/change_status'},*/
/*                             {type: "del", url: '/admin/im/Api_channel/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	{type: "add", url: '/admin/auser/add_channel'},*/
/*                         	{type: "plDel",url: '/admin/im/Api_channel/delete'},*/
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
