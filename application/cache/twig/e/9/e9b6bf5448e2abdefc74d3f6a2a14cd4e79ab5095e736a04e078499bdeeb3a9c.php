<?php

/* admin/currency/pm_news.html */
class __TwigTemplate_10fa724abd27bcfe10b9f7f11f9aac8cc87c2c06235fd26595993fa92432763c extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_news.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_news.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_news.html", 4)->display($context);
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
                        btnArr: [
                        \t{title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                        \t {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\", },
                          {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"pm_news-id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"pm_news-id\"},
                        {field: \"pm_news-title\", width: 80, title: \"标题\", type: \"\", sear: \"pm_news-title\"},
                        {field: \"pm_news-ctitle\", width: 80, title: \"副标题\", type: \"\", sear: \"pm_news-ctitle\",},
                        {field: \"pm_news-titlepic\", width: 150, title: \"标题图片\", type: \"image\", sear: \"pm_news-titlepic\"},
                        {field: \"pm_news-cate_id\", width: 200,  title: \"新闻类型\", type: \"select\", sear: \"pm_news-cate_id\",enum: {1:\"公司新闻\",2:\"行业新闻\",3:\"商机动态\",4:\"投资百科\",5:\"融资百科\",6:\"资金百科\",7:\"担保百科\"}},
                        {field: \"pm_news-keywords\", width: 80, title: \"关键字\", type: \"\", sear: \"pm_news-keywords\"},
                        {field: \"pm_news-read_num\", width: 150, title: \"阅读量\", type: \"\", sear: \"pm_news-read_num\"},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_cz_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"pm_news-laud_num\", width: 150, title: \"点赞量\", sear: \"pm_news-laud_num\"},
                        {field: \"pm_news-share_num\", width: 200,  title: \"分享量\", type: \"\", sear: \"pm_news-share_num\"},
                        {field: \"pm_news-description\", width: 150, title: \"描述\", type: \"\", sear: \"pm_news-description\"},
                        {field: \"pm_news-content\", width: 200, title: \"内容\", type: \"\", sear: \"pm_news-content\"},

                        {field: \"pm_news-is_show\", width: 150,  title: \"是否显示\", type: \"select\", sear: \"is_show\",enum: {0:\"不显示\",1:\"显示\"}},
                        {field: \"pm_news-is_recommend\", width: 150,  title: \"是否推荐\", type: \"select\", sear: \"pm_news-is_recommend\",enum: {0:\"不推荐\",1:\"推荐\"}},
                        {field: \"pm_news-sort\", width: 150, title: \"排序\", type: \"\", sear: \"pm_news-sort\"},
                        {field: \"pm_news-remark\", width: 150, title: \"备注\", type: \"\", sear: \"pm_news-remark\"},
                        {field: \"um_user-username\", width: 150, title: \"创建人ID\", type: \"\", sear: \"pm_news-creator\",url:\"/admin/api_presend_item/grid\",key:'name'},
                        {field: \"pm_news-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"pm_news-create_at\"},
                        {field: \"pm_news-update_at\", width: 150, title: \"更新时间\", type: \"time\", sear: \"pm_news-update_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/Api_news/grid \",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"pm_news-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                       \t\t{type: \"edit\", url: '/admin/currency/editNews?id='},
                            {type: \"detail\", url: '/admin/currency//info_news/?id='},
                            {type: \"del\", url: '/admin/pm/Api_news/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                           {type: \"add\", url: '/admin/currency/addNews'},
                           {type: \"plDel\",url: '/admin/pm/Api_news/delete'},
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
        return "admin/currency/pm_news.html";
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
/*                         	{title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                         	 {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                           {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "pm_news-id", width: 80, sort: true, title: "id", type: "", sear: "pm_news-id"},*/
/*                         {field: "pm_news-title", width: 80, title: "标题", type: "", sear: "pm_news-title"},*/
/*                         {field: "pm_news-ctitle", width: 80, title: "副标题", type: "", sear: "pm_news-ctitle",},*/
/*                         {field: "pm_news-titlepic", width: 150, title: "标题图片", type: "image", sear: "pm_news-titlepic"},*/
/*                         {field: "pm_news-cate_id", width: 200,  title: "新闻类型", type: "select", sear: "pm_news-cate_id",enum: {1:"公司新闻",2:"行业新闻",3:"商机动态",4:"投资百科",5:"融资百科",6:"资金百科",7:"担保百科"}},*/
/*                         {field: "pm_news-keywords", width: 80, title: "关键字", type: "", sear: "pm_news-keywords"},*/
/*                         {field: "pm_news-read_num", width: 150, title: "阅读量", type: "", sear: "pm_news-read_num"},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_cz_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "pm_news-laud_num", width: 150, title: "点赞量", sear: "pm_news-laud_num"},*/
/*                         {field: "pm_news-share_num", width: 200,  title: "分享量", type: "", sear: "pm_news-share_num"},*/
/*                         {field: "pm_news-description", width: 150, title: "描述", type: "", sear: "pm_news-description"},*/
/*                         {field: "pm_news-content", width: 200, title: "内容", type: "", sear: "pm_news-content"},*/
/* */
/*                         {field: "pm_news-is_show", width: 150,  title: "是否显示", type: "select", sear: "is_show",enum: {0:"不显示",1:"显示"}},*/
/*                         {field: "pm_news-is_recommend", width: 150,  title: "是否推荐", type: "select", sear: "pm_news-is_recommend",enum: {0:"不推荐",1:"推荐"}},*/
/*                         {field: "pm_news-sort", width: 150, title: "排序", type: "", sear: "pm_news-sort"},*/
/*                         {field: "pm_news-remark", width: 150, title: "备注", type: "", sear: "pm_news-remark"},*/
/*                         {field: "um_user-username", width: 150, title: "创建人ID", type: "", sear: "pm_news-creator",url:"/admin/api_presend_item/grid",key:'name'},*/
/*                         {field: "pm_news-create_at", width: 150,  title: "创建时间", type: "time", sear: "pm_news-create_at"},*/
/*                         {field: "pm_news-update_at", width: 150, title: "更新时间", type: "time", sear: "pm_news-update_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/Api_news/grid ",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "pm_news-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                        		{type: "edit", url: '/admin/currency/editNews?id='},*/
/*                             {type: "detail", url: '/admin/currency//info_news/?id='},*/
/*                             {type: "del", url: '/admin/pm/Api_news/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                            {type: "add", url: '/admin/currency/addNews'},*/
/*                            {type: "plDel",url: '/admin/pm/Api_news/delete'},*/
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
