<?php

/* admin/user/userInfo.html */
class __TwigTemplate_02f7ae33224727a9477e7f04e6f7e63d06ebc93c93979399b47464b5c1b90342 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/userInfo.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs1.html", "admin/user/userInfo.html", 2)->display($context);
        // line 3
        echo "<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<style>
    body {
        margin: 10px;
    }
    .demo-carousel {
        height: 200px;
        line-height: 200px;
        text-align: center;
    }
    .layui-table-view .layui-table {
        width: 100%;
    }
    .model {
        padding: 20px;
    }
    .layui-upload-img {
        width: 100px;
        height: 100px;
        border: 1px solid transparent;
    }
</style>
个人信息  <button class=\"layui-btn editBtn\" data-type=\"editInfo\" style=\"float: right; margin-right: 50px; margin-bottom: 2px;\">编辑</button>
<hr>

<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
    <!-- <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">头像：</label>
            <div class=\"layui-input-block\">
                    <div class=\"layui-upload\">
                      <div class=\"layui-upload-list\">
                        <img class=\"layui-upload-img\" id=\"demo1\">
                        <p id=\"demoText\"></p>
                      </div>
                       <button type=\"button\" class=\"layui-btn edit\" id=\"test1\" style=\"display: none;\">上传</button>
                    </div>
            </div>
    </div>

    <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">用户名：</label>
            <div class=\"layui-input-block\">
                    <label class=\"layui-form-label info\" style=\"text-align: left !important;\">测试人</label>
            </div>
            <div class=\"layui-input-block edit\" style=\"display: none;\">
                    <input type=\"text\" name=\"username\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
            </div>
    </div>

    <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">邮箱：</label>
                    <div class=\"layui-input-block info\">
                            <label class=\"layui-form-label\" style=\"text-align: left !important;\">2274580253@qq.com</label>
                    </div>
                    <div class=\"layui-input-inline edit\" style=\"display: none;\">
                            <input type=\"text\" name=\"email\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
            </div>
    </div>
    <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">手机号码：</label>
                    <div class=\"layui-input-block info\">
                            <label class=\"layui-form-label\" style=\"text-align: left !important;\">13698006449</label>
                    </div>
                    <div class=\"layui-input-inline edit\" style=\"display: none;\">
                            <input type=\"tel\" name=\"phone\"  autocomplete=\"off\" class=\"layui-input\">
                    </div>
            </div>
    </div>

    <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">生日：</label>
                    <div class=\"layui-input-block info\">
                            <label class=\"layui-form-label\" style=\"text-align: left !important;\">1997/05/05</label>
                    </div>
                    <div class=\"layui-input-inline edit\" style=\"display: none;\">
                            <input type=\"text\" name=\"date\" id=\"date\" placeholder=\"yyyy-MM-dd\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
            </div>
    </div>

    <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">性别：</label>
            <div class=\"layui-input-block info\">
                    <label class=\"layui-form-label edit\" style=\"text-align: left !important;\">男</label>
            </div>
            <div class=\"layui-input-block edit\"  style=\"display: none;\">
                    <input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\" checked=\"\">
                    <input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\">
            </div>
    </div>

    <div class=\"layui-form-item edit\" style=\"display: none;\">
            <div class=\"layui-input-block\">
                    <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">保存</button>
                    <button lay-filter=\"cancle\"class=\"layui-btn layui-btn-primary cancleBtn\">取消</button>
            </div>
    </div> -->
</form>

<script>
    ykp.defineClass(['element', \"jquery\"], {
        init: function () {
            var it = this;
            //初始化个人信息
            it.initInfo();
            //编辑
            it.editInfo();
        },
        initInfo: function () {
            hm.load(function (option) {
                var public = option.public;
                var element = option.element;
                public.showInfo({
                    col: [
                        {name: '用户名', val: 'username'},
                        {name: '昵称', val: 'nickname'},
                        {name: '性别', val: 'sex'},
                        {name: '手机', val: 'mobile'},
                        {name: '手机认证码', val: 'mobilecode'},
                        {name: '身份证', val: 'id_card'},
                        {name: '积分', val: 'score'},
                        {name: '余额', val: 'banlance'},
                        {name: '类型', val: 'type'},
                        {name: '是否认证企业', val: 'is_company'},
                        {name: '是否是服务商', val: 'is_provider'},
                        {name: '创建时间', val: 'create_at'},
                        {name: '头像', val: 'create_at'},
                    ]
                })
                var admin = JSON.parse(ykp.getCookie('admin'));
                console.log(admin.aid);
                var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
                ykp.doAjax({
                    url: '/admin/Api_user/info',
                    method: \"post\",
                    data: {
                        filter: \"um_user.uid=\" + 1
                    },
                    success: function (res) {
                        var data = res.data;
                        hm.showDetails({
                            el: \".layui-form\",
                            data: data,
                            statuArr: [
                                {
                                    name: \"type\",
                                    val: ['个人', '企业']
                                },
                                {
                                    name: \"sex\",
                                    val: ['未知', '男', '女']
                                },
                                {
                                    name: \"mobilecode\",
                                    val: ['未认证', '已认证']
                                },
                                {
                                    name: \"is_provider\",
                                    val: ['未认证', '已认证']
                                },
                                {
                                    name: \"is_company\",
                                    val: ['非', '是']
                                }
                            ]
                        });
                    } //展示详情   具体实现方法请查看public.js
                })
                element.on('collapse(test)', function (data) {
                    console.log('展开状态：' + data.show);
                });
            });
        },
        editInfo: function () {
            \$('.editBtn').click(function () {
                \$('.info').hide();
                \$('.edit').show();
            })
        },
        cancleBtn: function () {
            \$('cancleBtn').click(function () {
                \$('.info').show();
                \$('.edit').hide();
            })
        }


    })

</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/userInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs1.html' %}*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <style>*/
/*     body {*/
/*         margin: 10px;*/
/*     }*/
/*     .demo-carousel {*/
/*         height: 200px;*/
/*         line-height: 200px;*/
/*         text-align: center;*/
/*     }*/
/*     .layui-table-view .layui-table {*/
/*         width: 100%;*/
/*     }*/
/*     .model {*/
/*         padding: 20px;*/
/*     }*/
/*     .layui-upload-img {*/
/*         width: 100px;*/
/*         height: 100px;*/
/*         border: 1px solid transparent;*/
/*     }*/
/* </style>*/
/* 个人信息  <button class="layui-btn editBtn" data-type="editInfo" style="float: right; margin-right: 50px; margin-bottom: 2px;">编辑</button>*/
/* <hr>*/
/* */
/* <form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/*     <!-- <div class="layui-form-item">*/
/*             <label class="layui-form-label">头像：</label>*/
/*             <div class="layui-input-block">*/
/*                     <div class="layui-upload">*/
/*                       <div class="layui-upload-list">*/
/*                         <img class="layui-upload-img" id="demo1">*/
/*                         <p id="demoText"></p>*/
/*                       </div>*/
/*                        <button type="button" class="layui-btn edit" id="test1" style="display: none;">上传</button>*/
/*                     </div>*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="layui-form-item">*/
/*             <label class="layui-form-label">用户名：</label>*/
/*             <div class="layui-input-block">*/
/*                     <label class="layui-form-label info" style="text-align: left !important;">测试人</label>*/
/*             </div>*/
/*             <div class="layui-input-block edit" style="display: none;">*/
/*                     <input type="text" name="username" placeholder="请输入" autocomplete="off" class="layui-input">*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="layui-form-item">*/
/*             <div class="layui-inline">*/
/*                     <label class="layui-form-label">邮箱：</label>*/
/*                     <div class="layui-input-block info">*/
/*                             <label class="layui-form-label" style="text-align: left !important;">2274580253@qq.com</label>*/
/*                     </div>*/
/*                     <div class="layui-input-inline edit" style="display: none;">*/
/*                             <input type="text" name="email" autocomplete="off" class="layui-input">*/
/*                     </div>*/
/*             </div>*/
/*     </div>*/
/*     <div class="layui-form-item">*/
/*             <div class="layui-inline">*/
/*                     <label class="layui-form-label">手机号码：</label>*/
/*                     <div class="layui-input-block info">*/
/*                             <label class="layui-form-label" style="text-align: left !important;">13698006449</label>*/
/*                     </div>*/
/*                     <div class="layui-input-inline edit" style="display: none;">*/
/*                             <input type="tel" name="phone"  autocomplete="off" class="layui-input">*/
/*                     </div>*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="layui-form-item">*/
/*             <div class="layui-inline">*/
/*                     <label class="layui-form-label">生日：</label>*/
/*                     <div class="layui-input-block info">*/
/*                             <label class="layui-form-label" style="text-align: left !important;">1997/05/05</label>*/
/*                     </div>*/
/*                     <div class="layui-input-inline edit" style="display: none;">*/
/*                             <input type="text" name="date" id="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">*/
/*                     </div>*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="layui-form-item">*/
/*             <label class="layui-form-label">性别：</label>*/
/*             <div class="layui-input-block info">*/
/*                     <label class="layui-form-label edit" style="text-align: left !important;">男</label>*/
/*             </div>*/
/*             <div class="layui-input-block edit"  style="display: none;">*/
/*                     <input type="radio" name="sex" value="男" title="男" checked="">*/
/*                     <input type="radio" name="sex" value="女" title="女">*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="layui-form-item edit" style="display: none;">*/
/*             <div class="layui-input-block">*/
/*                     <button class="layui-btn" lay-submit="" lay-filter="demo1">保存</button>*/
/*                     <button lay-filter="cancle"class="layui-btn layui-btn-primary cancleBtn">取消</button>*/
/*             </div>*/
/*     </div> -->*/
/* </form>*/
/* */
/* <script>*/
/*     ykp.defineClass(['element', "jquery"], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化个人信息*/
/*             it.initInfo();*/
/*             //编辑*/
/*             it.editInfo();*/
/*         },*/
/*         initInfo: function () {*/
/*             hm.load(function (option) {*/
/*                 var public = option.public;*/
/*                 var element = option.element;*/
/*                 public.showInfo({*/
/*                     col: [*/
/*                         {name: '用户名', val: 'username'},*/
/*                         {name: '昵称', val: 'nickname'},*/
/*                         {name: '性别', val: 'sex'},*/
/*                         {name: '手机', val: 'mobile'},*/
/*                         {name: '手机认证码', val: 'mobilecode'},*/
/*                         {name: '身份证', val: 'id_card'},*/
/*                         {name: '积分', val: 'score'},*/
/*                         {name: '余额', val: 'banlance'},*/
/*                         {name: '类型', val: 'type'},*/
/*                         {name: '是否认证企业', val: 'is_company'},*/
/*                         {name: '是否是服务商', val: 'is_provider'},*/
/*                         {name: '创建时间', val: 'create_at'},*/
/*                         {name: '头像', val: 'create_at'},*/
/*                     ]*/
/*                 })*/
/*                 var admin = JSON.parse(ykp.getCookie('admin'));*/
/*                 console.log(admin.aid);*/
/*                 var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/*                 ykp.doAjax({*/
/*                     url: '/admin/Api_user/info',*/
/*                     method: "post",*/
/*                     data: {*/
/*                         filter: "um_user.uid=" + 1*/
/*                     },*/
/*                     success: function (res) {*/
/*                         var data = res.data;*/
/*                         hm.showDetails({*/
/*                             el: ".layui-form",*/
/*                             data: data,*/
/*                             statuArr: [*/
/*                                 {*/
/*                                     name: "type",*/
/*                                     val: ['个人', '企业']*/
/*                                 },*/
/*                                 {*/
/*                                     name: "sex",*/
/*                                     val: ['未知', '男', '女']*/
/*                                 },*/
/*                                 {*/
/*                                     name: "mobilecode",*/
/*                                     val: ['未认证', '已认证']*/
/*                                 },*/
/*                                 {*/
/*                                     name: "is_provider",*/
/*                                     val: ['未认证', '已认证']*/
/*                                 },*/
/*                                 {*/
/*                                     name: "is_company",*/
/*                                     val: ['非', '是']*/
/*                                 }*/
/*                             ]*/
/*                         });*/
/*                     } //展示详情   具体实现方法请查看public.js*/
/*                 })*/
/*                 element.on('collapse(test)', function (data) {*/
/*                     console.log('展开状态：' + data.show);*/
/*                 });*/
/*             });*/
/*         },*/
/*         editInfo: function () {*/
/*             $('.editBtn').click(function () {*/
/*                 $('.info').hide();*/
/*                 $('.edit').show();*/
/*             })*/
/*         },*/
/*         cancleBtn: function () {*/
/*             $('cancleBtn').click(function () {*/
/*                 $('.info').show();*/
/*                 $('.edit').hide();*/
/*             })*/
/*         }*/
/* */
/* */
/*     })*/
/* */
/* </script>*/
/* </body>*/
/* */
/* </html>*/
