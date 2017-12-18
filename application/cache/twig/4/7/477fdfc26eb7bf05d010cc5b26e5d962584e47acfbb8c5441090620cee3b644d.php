<?php

/* admin/im/addShop.html */
class __TwigTemplate_293f8a0d59ac5c5e6a4ac6e07d16b380aac1790345f7f911a2ee389a70dc6711 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/addShop.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {
\t\tmargin: 10px;
\t}
\t
\t.demo-carousel {
\t\theight: 200px;
\t\tline-height: 200px;
\t\ttext-align: center;
\t}
\t
\t.layui-table-view .layui-table {
\t\twidth: 100%
\t}
\t
\t.model {
\t\tpadding: 20px;
\t}
\t
\t.layui-upload-img {
\t\twidth: 100px;
\t\theight: 100px;
\t\tborder: 1px solid transparent;
\t}
\t
\t.layui-form-label {
\t\twidth: 86px;
\t\tpadding: 9px 8px !important;
\t}
\t
\t.layui-form-item .layui-input-inline {
\t\twidth: 135px;
\t}
\t
\t.layui-input-block {
\t\tmargin-left: 116px;
\t}
\t
\t.layui-table-cell {
\t\toverflow: visible;
\t}
\t
\ttable .layui-input,
\t.layui-select,
\t.layui-textarea {
\t\theight: 30px;
\t}
\t
\t.hidden {
\t\tdisplay: none !important;
\t}
</style>
";
        // line 54
        $this->loadTemplate("admin/crumbs1.html", "admin/im/addShop.html", 54)->display($context);
        // line 55
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 100%px; padding-bottom: 30px;\">
\t<blockquote class=\"layui-elem-quote\">
\t\t基本信息
\t</blockquote>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">店铺名称</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">店铺介绍</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"username\" lay-verify=\"\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">店铺图片</label>
\t\t\t<div class=\"layui-input-block\">
\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t<div class=\"layui-upload-list\" id=\"demo2\"></div>
\t\t\t\t\t<button type=\"button\" type=\"button\" class=\"layui-btn\" id=\"test2\">上传图片</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
\t<blockquote class=\"layui-elem-quote\">
\t\t运营人员
\t</blockquote>
\t<div class=\"layui-form-item peoplegroup\">
\t\t<div>
\t\t\t<div class=\"layui-inline\">
\t\t\t\t<label class=\"layui-form-label\">运营人员姓名</label>
\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t<input type=\"tel\" name=\"phone\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-inline\">
\t\t\t\t<label class=\"layui-form-label\">联系人电话</label>
\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-inline\">
\t\t\t\t<label class=\"layui-form-label\">联系人角色</label>
\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layui-inline\">
\t\t\t\t<label class=\"layui-form-label\">联系人邮箱</label>
\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"layui-btn addpeople layui-btn-sm\"><i class=\"layui-icon\"></i></button>
\t\t</div>
\t</div>
\t<blockquote class=\"layui-elem-quote\">
\t\t店铺地址
\t</blockquote>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">店铺地址</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">坐标</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" autocomplete=\"off\" placeholder=\"请输入经度\" class=\"layui-input\">
\t\t</div>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" autocomplete=\"off\" placeholder=\"请输入纬度\" class=\"layui-input\">
\t\t</div>
\t</div>
\t<blockquote class=\"layui-elem-quote\" style=\"padding: 8px;\">
\t\t空间服务<button type=\"button\" class=\"layui-btn layui-btn-sm addservice\" style=\"margin-left: 50px;\">添加服务</button>
\t</blockquote>

\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">平面图例</label>
\t\t<div id=\"lc\">
\t\t\t<div id=\"\" style=\"height: 200px;\">
\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" autocomplete=\"off\" placeholder=\"请输入楼层\" class=\"layui-input\">
\t\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t\t\t<img class=\"layui-upload-img\" id=\"suploadimg\">
\t\t\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" type=\"button\" class=\"layui-btn\" id=\"supload\">上传图片</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<button type=\"button\" class=\"layui-btn layui-btn-sm addlc\"><i class=\"layui-icon\"></i></button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"layui-collapse\" lay-filter=\"test\" style=\"margin-bottom: 50px;\">
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">场地办公服务</h2>
\t\t\t<div class=\"layui-colla-content\" id=\"serviceList\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"layui-collapse\" lay-filter=\"test\" style=\"margin-bottom: 50px;\">
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">虚拟办公服务</h2>
\t\t\t<div class=\"layui-colla-content\" id=\"fictitiousService\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"layui-collapse\" lay-filter=\"test\" style=\"margin-bottom: 50px;\">
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">其他服务</h2>
\t\t\t<div class=\"layui-colla-content\" id=\"otherService\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<blockquote class=\"layui-elem-quote\">
\t\t中心配套
\t</blockquote>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">配套名称</label>
\t\t<div class=\"layui-input-inline\" style=\"width: 700px;\">
\t\t\t<div id=\"pt\">
\t\t\t\t<button type=\"button\" class=\"layui-btn la\tyui-btn-sm\" style=\"float: left; margin-right: 10px;\">配套名称</button>
\t\t\t</div>
\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input ptlabel\" style=\"width: 80px; float: left; margin-right: 10px;\">
\t\t\t<button type=\"button\" id=\"addPt\" class=\"layui-btn layui-btn-sm\" style=\"float: left;\"><i class=\"layui-icon\"></i></button>
\t\t</div>
\t</div>
\t<blockquote class=\"layui-elem-quote\">
\t\t周边设施
\t</blockquote>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">设施名称</label>
\t\t<div class=\"layui-input-inline\" style=\"width: 700px;\">
\t\t\t<div id=\"labelGroup\">
\t\t\t\t<button type=\"button\" class=\"layui-btn layui-btn-sm labelBtn\" style=\"float: left; margin-right: 10px;\">设施名称</button>
\t\t\t</div>

\t\t\t<input type=\"text\" name=\"email\" id=\"labelName\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input \" style=\"width: 80px; float: left; margin-right: 10px;\">
\t\t\t<button type=\"button\" id=\"addlabelGroup\" class=\"layui-btn layui-btn-sm\" style=\"float: left;\"><i class=\"layui-icon\"></i></button>
\t\t</div>
\t</div>

\t<blockquote class=\"layui-elem-quote\" style=\"padding: 8px;\">
\t\t入驻企业 <button type=\"button\" class=\"layui-btn la\tyui-btn-sm\" id=\"get_cus\" style=\" margin-left: 10px;\">获取入驻企业</button>
\t</blockquote>
\t<div id=\"\">

\t</div>

\t<div class=\"layui-collapse\" lay-filter=\"test\">
\t\t<div class=\"layui-colla-item\">
\t\t\t<h2 class=\"layui-colla-title\">点击展开入驻企业</h2>
\t\t\t<div class=\"layui-colla-content\">
\t\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<!--<th data-field=\"logo\">
\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-logo\"><span>logo</span></div>
\t\t\t\t\t\t\t</th>-->
\t\t\t\t\t\t\t<th data-field=\"company_name\">
\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-company_name\"><span>公司名称</span></div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-field=\"sort\">
\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-sort\"><span>排序</span></div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th data-field=\"show\">
\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-show\"><span>是否展示</span></div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"data-list\">
\t\t\t\t\t\t<tr data-index=\"0\" class=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"service_group\" style=\"display: none;\">

\t</div>
\t<div class=\"layui-form-item\" style=\"margin-top: 50px;\">
\t\t<div class=\"layui-input-block\">
\t\t\t<button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
\t\t\t<button type=\"reset\" class=\"layui-btn layui-btn-primary\">取消</button>
\t\t</div>
\t</div>
</form>
<script type=\"text/html\" id=\"switchTpl\">
\t<!-- 这里的 checked 的状态只是演示 -->
\t<input type=\"checkbox\" name=\"show\" value=\"<% d.show %>\" lay-skin=\"switch\" lay-text=\"女|男\" lay-filter=\"sexDemo\" <% d.show==1 ? 'checked' : false %>>
</script>
<!--<script src=\"/resource/admin/js/jslib/citys.js \"></script>-->

<script>
\tykp.defineClass(['element', \"jquery \"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom(it);
\t\t},
\t\tinitFrom: function(it) {

\t\t\thm.load(function(optionObj) {
\t\t\t\tvar form = optionObj.form,
\t\t\t\t\tlayer = optionObj.layer,
\t\t\t\t\tlayedit = optionObj.layedit,
\t\t\t\t\tlaydate = optionObj.laydate,
\t\t\t\t\tpublic = optionObj.public,
\t\t\t\t\ttable = optionObj.table,
\t\t\t\t\tupload = optionObj.upload;
\t\t\t\tlaytpl = optionObj.laytpl;
\t\t\t\tvar num = 1,
\t\t\t\t\tserviceArr = [];
\t\t\t\tit.confirm = false;
\t\t\t\tit.serviceList = [];
\t\t\t\tform.render();

\t\t\t\t//多图片上传
\t\t\t\tupload.render({
\t\t\t\t\telem: '#test2',
\t\t\t\t\turl: '/api/api_common/upload_file',
\t\t\t\t\tmultiple: true,
\t\t\t\t\tdone: function(res) {
\t\t\t\t\t\t//上传完毕
\t\t\t\t\t\t\$('#demo2').append('<img src=\" ' + res.data + ' \" alt=\" ' + res.data + ' \" style=\"margin-right:10px;\" class=\"layui-upload-img \">')
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tit.uploadRender({
\t\t\t\t\tel: \"#supload\",
\t\t\t\t\timgEl: '#suploadimg'
\t\t\t\t}, upload)

\t\t\t\tupload.render();

\t\t\t\t//获取入驻公司
\t\t\t\t\$('#get_cus').click(function() {
\t\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId'));
\t\t\t\t\tit.get_cus(form, result);
\t\t\t\t})

\t\t\t\t//添加配套
\t\t\t\t\$('#addPt').click(function() {
\t\t\t\t\tvar content = '';
\t\t\t\t\tvar val = \$('.ptlabel').val();
\t\t\t\t\tif(!val) {
\t\t\t\t\t\tlayer.msg('请输入再添加');
\t\t\t\t\t} else {
\t\t\t\t\t\tcontent = '<button type=\"button\" class=\"layui-btn layui-btn-sm labelName\" style=\"float: left; margin-right: 10px;\">' + val + '</button>';
\t\t\t\t\t\t\$('#pt').append(content);
\t\t\t\t\t\t\$('.ptlabel').val('');
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t//添加设施
\t\t\t\t\$('#addlabelGroup').click(function() {
\t\t\t\t\tvar content = '';
\t\t\t\t\tvar val = \$('#labelName').val();
\t\t\t\t\tif(!val) {
\t\t\t\t\t\tlayer.msg('请输入再添加');
\t\t\t\t\t} else {
\t\t\t\t\t\tcontent = '<button type=\"button\" class=\"layui-btn layui-btn-sm labelBtn\" style=\"float: left; margin-right: 10px;\">' + val + '</button>';
\t\t\t\t\t\t\$('#labelGroup').append(content);
\t\t\t\t\t\t\$('#labelName').val('');
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t//添加人员
\t\t\t\t\$('.addpeople').click(function() {
\t\t\t\t\tvar content = `<div  >
\t\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t\t<label class=\"layui-form-label\">运营人员姓名</label>
\t\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t\t<label class=\"layui-form-label\">联系人电话</label>
\t\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t\t<label class=\"layui-form-label\">联系人角色</label>
\t\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t\t<label class=\"layui-form-label\">联系人邮箱</label>
\t\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"layui-btn layui-btn-sm close\"><i class=\"layui-icon\">&#x1006;</i></button>
\t\t\t\t\t</div>`;
\t\t\t\t\t\$('.peoplegroup').append(content);
\t\t\t\t\tform.render();
\t\t\t\t\t\$('.close').unbind('click').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
\t\t\t\t})

\t\t\t\t//添加楼层
\t\t\t\t\$('.addlc').click(function() {
\t\t\t\t\tvar content = `
\t\t\t\t\t\t<div id=\"\" style=\"height: 200px;margin-left: 100px;\">
\t\t\t\t\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" autocomplete=\"off\" placeholder=\"请输入楼层\" class=\"layui-input\">
\t\t\t\t\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t\t\t\t\t\t<img class=\"layui-upload-img\" id=\"suploadimg\${num}\">
\t\t\t\t\t\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"layui-btn-group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" type=\"button\" class=\"layui-btn\" id=\"supload\${num}\">上传图片</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"layui-btn layui-btn-sm closeP\"><i class=\"layui-icon\">&#x1006;</i></button>
\t\t\t\t\t\t</div>`;
\t\t\t\t\t\$('#lc').append(content);
\t\t\t\t\t\$('.closeP').unbind('click').click(function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t})
\t\t\t\t\tit.uploadRender({
\t\t\t\t\t\tel: \"#supload\" + num,
\t\t\t\t\t\timgEl: \"#suploadimg\" + num
\t\t\t\t\t}, upload)
\t\t\t\t\tnum++;
\t\t\t\t})

\t\t\t\t//添加服务
\t\t\t\t\$('.addservice').click(function() {
\t\t\t\t\t//保存过楼层
\t\t\t\t\tif(it.confirm) {
\t\t\t\t\t\tpublic.layerOpen({
\t\t\t\t\t\t\tel: \$('#service_group'),
\t\t\t\t\t\t\tarea: ['700px'],
\t\t\t\t\t\t\ttitle: \"添加服务\"
\t\t\t\t\t\t}, function() { //成功执行的回调
\t\t\t\t\t\t\tvar el = \$('#service_group').find(\"input:radio[name=im_station]:checked\");
\t\t\t\t\t\t\tvar index = el.attr('data-id');
\t\t\t\t\t\t\tvar name = el.attr('data-name');
\t\t\t\t\t\t\tel.prev().hide(); //选择过不能选择
\t\t\t\t\t\t\tappendService(index, name);
\t\t\t\t\t\t\tvar arr = [];
\t\t\t\t\t\t\tit.serviceList.forEach(function(item) {
\t\t\t\t\t\t\t\tif(item['im_station.id'] != index) {
\t\t\t\t\t\t\t\t\tdelete item;
\t\t\t\t\t\t\t\t\tarr.push(item)
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\tit.serviceList = arr;
\t\t\t\t\t\t\tit.initList(it.serviceList, form);
\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t}, function() { //取消执行的回调
\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t})
\t\t\t\t\t} else {
\t\t\t\t\t\tlayer.confirm('平面图确认添加完才可以添加服务，确认后楼层不可修改', function(index) {
\t\t\t\t\t\t\t\$('.addlc').remove();
\t\t\t\t\t\t\t\$('.closeP').remove();
\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\tpublic.layerOpen({
\t\t\t\t\t\t\t\tel: \$('#service_group'),
\t\t\t\t\t\t\t\tarea: ['700px'],
\t\t\t\t\t\t\t\ttitle: \"添加服务\"
\t\t\t\t\t\t\t}, function() { //成功执行的回调
\t\t\t\t\t\t\t\tit.confirm = true;
\t\t\t\t\t\t\t\tvar el = \$('#service_group').find(\"input:radio[name=im_station]:checked\");
\t\t\t\t\t\t\t\tvar index = el.attr('data-id');
\t\t\t\t\t\t\t\tvar name = el.attr('data-name');
\t\t\t\t\t\t\t\tel.next().remove();
\t\t\t\t\t\t\t\tappendService(index, name);
\t\t\t\t\t\t\t\tvar arr = [];
\t\t\t\t\t\t\t\tit.serviceList.forEach(function(item) {
\t\t\t\t\t\t\t\t\tif(item['im_station.id'] != index) {
\t\t\t\t\t\t\t\t\t\tdelete item;
\t\t\t\t\t\t\t\t\t\tarr.push(item)
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\tit.serviceList = arr;
\t\t\t\t\t\t\t\tit.initList(it.serviceList, form);
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}, function() { //取消执行的回调
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\tit.showGw(form, serviceArr, it, function(res) {
\t\t\t\t\tconsole.log(res)
\t\t\t\t});

\t\t\t\tfunction appendService(index, name) {
\t\t\t\t\tvar btn = `<button type=\"button\" class=\"layui-btn addpeople layui-btn-sm\"><i class=\"layui-icon\"></i></button>`;
\t\t\t\t\tvar btn1 = `<button type=\"button\" class=\"layui-btn layui-btn-sm closeS\"><i class=\"layui-icon\">&#x1006;</i></button>`;
\t\t\t\t\tvar content = `<div >
\t\t\t\t\t<fieldset class=\"layui-elem-field layui-field-title\">
\t\t\t\t\t  <legend>\${name}</legend>
\t\t\t\t\t</fieldset>`;
\t\t\t\t\tvar con = `<div><div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">楼层</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">房号</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">单价</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">时间</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">位置</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" lay-verify=\"\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"layui-inline\">
\t\t\t\t\t\t<label class=\"layui-form-label\" style=\"width: 40px;\">规格</label>
\t\t\t\t\t\t<div class=\"layui-input-inline\" style=\"width: 100px;\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option value=\"\">选择规格</option>
\t\t\t\t\t\t\t\t<option value=\"0\">小</option>
\t\t\t\t\t\t\t\t<option value=\"1\">中</option>
\t\t\t\t\t\t\t\t<option value=\"2\">大</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t`;

\t\t\t\t\t\$('#serviceList').append(content + con + btn + '</div></div>');

\t\t\t\t\t\$('.addpeople').unbind('click').click(function() {
\t\t\t\t\t\t\$(con + btn1 + '</div></div>').insertAfter(\$(this).parent());

\t\t\t\t\t\tform.render();
\t\t\t\t\t\t\$('.closeS').click(function() {
\t\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t\tform.render();
\t\t\t\t}
\t\t\t})

\t\t},

\t\t//添加服务
\t\taddservice: function(option) {

\t\t},

\t\t//获取工位
\t\tshowGw: function(form, serviceArr, it, callback) {
\t\t\tykp.doAjax({
\t\t\t\turl: \"/admin/im/Api_station/grid\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tlimit: 100
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tconsole.log(res);
\t\t\t\t\tvar data = res.data.rows;
\t\t\t\t\tit.serviceList = data;
\t\t\t\t\tit.initList(data, form, callback);
\t\t\t\t}
\t\t\t})
\t\t},

\t\t//遍历节点
\t\tinitList: function(data, form, callback) {
\t\t\tconsole.log(data);
\t\t\tvar content = '';
\t\t\tvar serviceArr = [];
\t\t\tcontent += '<div id=\"customList\" style=\"background: #eee; padding: 10px;\" class=\"model\">' +
\t\t\t\t'<form class=\"layui-form layui-form-pane\" id=\"autoColForm\" style=\" height: 100%; width: 100%;  display: flex;justify-content: start; flex-wrap: wrap\">' +
\t\t\t\t'<div class=\"layui-form-item\" pane=\"\">' +
\t\t\t\t'<div class=\"\" id=\"checkBoxGroup\">';
\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\tcontent += '<input type=\"radio\" data-id = \"' + data[i]['im_station.id'] + '\" data-name=\"' + data[i]['im_station.name'] + '\" name=\"im_station\" lay-skin=\"primary\" title=\"' + data[i]['im_station.name'] + '\">'
\t\t\t\tserviceArr.push(data[i]['im_station.id']);
\t\t\t}
\t\t\tcontent += '</div></div></form></div>';
\t\t\t\$('#service_group').html(content);

\t\t\tform.render();
\t\t},
\t\t//上传图片
\t\tuploadRender: function(option, upload) {
\t\t\tupload.render({
\t\t\t\telem: option.el,
\t\t\t\turl: '/api/api_common/upload_file',
\t\t\t\tdone: function(res) {
\t\t\t\t\t//上传完毕
\t\t\t\t\t\$(option.imgEl).attr('src', res.data);
\t\t\t\t}
\t\t\t});
\t\t},

\t\t//获取入驻企业
\t\tget_cus: function(form, result) {

\t\t\tykp.doAjax({
\t\t\t\turl: \"/admin/im/api_shop/ru_custom\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tid: result.id,
\t\t\t\t\tlimit: '1000'
\t\t\t\t},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data.rows;
\t\t\t\t\tvar content = '';
\t\t\t\t\tif(data) {
\t\t\t\t\t\tfor(var i = 0; i < data.length; i++) {
\t\t\t\t\t\t\tcontent += `
\t\t\t\t\t\t\t\t<tr><td data-field=\"company_name\">
\t\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-company_name\">\${data[i].company_name}</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td data-field=\"sort\">
\t\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-sort\">
\t\t\t\t\t\t\t\t\t<select class=\"sort\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" \${data[i].sort == 1 ? \"selected\" : \"\"}>1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" \${data[i].sort == 2 ? \"selected\" : \"\"}>2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" \${data[i].sort == 3 ? \"selected\" : \"\"}>3</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" \${data[i].sort == 4 ? \"selected\" : \"\"}>4</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\" \${data[i].sort == 5 ? \"selected\" : \"\"}>5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\" \${data[i].sort == 6 ? \"selected\" : \"\"}>6</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\" \${data[i].sort == 7 ? \"selected\" : \"\"}>7</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\" \${data[i].sort == 8 ? \"selected\" : \"\"}>8</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\" \${data[i].sort == 9 ? \"selected\" : \"\"}>9</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\" \${data[i].sort == 10 ? \"selected\" : \"\"}>10</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td data-field=\"show\" data-content=\"1\">
\t\t\t\t\t\t\t\t\t<div class=\"layui-table-cell laytable-cell-1-show\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"show\" value=\"\${data[i].show}\" \${data[i].show == 1 ? \"checked\" : \"\"} lay-skin=\"switch\" lay-text=\"否|是\" lay-filter=\"sexDemo\"
\t\t\t\t\t\t\t\t\t\t<div class=\"layui-unselect layui-form-switch\" lay-skin=\"_switch\"><i></i></div></div>
\t\t\t\t\t\t\t\t</td></tr>
\t\t\t\t\t\t\t\t`;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#data-list').html(content);
\t\t\t\t\t\tform.render();
\t\t\t\t\t} else {
\t\t\t\t\t\tlayer.msg('还没有入驻企业');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/im/addShop.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 55,  75 => 54,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {*/
/* 		margin: 10px;*/
/* 	}*/
/* 	*/
/* 	.demo-carousel {*/
/* 		height: 200px;*/
/* 		line-height: 200px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.layui-table-view .layui-table {*/
/* 		width: 100%*/
/* 	}*/
/* 	*/
/* 	.model {*/
/* 		padding: 20px;*/
/* 	}*/
/* 	*/
/* 	.layui-upload-img {*/
/* 		width: 100px;*/
/* 		height: 100px;*/
/* 		border: 1px solid transparent;*/
/* 	}*/
/* 	*/
/* 	.layui-form-label {*/
/* 		width: 86px;*/
/* 		padding: 9px 8px !important;*/
/* 	}*/
/* 	*/
/* 	.layui-form-item .layui-input-inline {*/
/* 		width: 135px;*/
/* 	}*/
/* 	*/
/* 	.layui-input-block {*/
/* 		margin-left: 116px;*/
/* 	}*/
/* 	*/
/* 	.layui-table-cell {*/
/* 		overflow: visible;*/
/* 	}*/
/* 	*/
/* 	table .layui-input,*/
/* 	.layui-select,*/
/* 	.layui-textarea {*/
/* 		height: 30px;*/
/* 	}*/
/* 	*/
/* 	.hidden {*/
/* 		display: none !important;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 100%px; padding-bottom: 30px;">*/
/* 	<blockquote class="layui-elem-quote">*/
/* 		基本信息*/
/* 	</blockquote>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">店铺名称</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">店铺介绍</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="username" lay-verify="" placeholder="请输入" autocomplete="off" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">店铺图片</label>*/
/* 			<div class="layui-input-block">*/
/* 				<div class="layui-upload">*/
/* 					<div class="layui-upload-list" id="demo2"></div>*/
/* 					<button type="button" type="button" class="layui-btn" id="test2">上传图片</button>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<blockquote class="layui-elem-quote">*/
/* 		运营人员*/
/* 	</blockquote>*/
/* 	<div class="layui-form-item peoplegroup">*/
/* 		<div>*/
/* 			<div class="layui-inline">*/
/* 				<label class="layui-form-label">运营人员姓名</label>*/
/* 				<div class="layui-input-inline">*/
/* 					<input type="tel" name="phone" lay-verify="" autocomplete="off" class="layui-input">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-inline">*/
/* 				<label class="layui-form-label">联系人电话</label>*/
/* 				<div class="layui-input-inline">*/
/* 					<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-inline">*/
/* 				<label class="layui-form-label">联系人角色</label>*/
/* 				<div class="layui-input-inline">*/
/* 					<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="layui-inline">*/
/* 				<label class="layui-form-label">联系人邮箱</label>*/
/* 				<div class="layui-input-inline">*/
/* 					<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 				</div>*/
/* 			</div>*/
/* 			<button type="button" class="layui-btn addpeople layui-btn-sm"><i class="layui-icon"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* 	<blockquote class="layui-elem-quote">*/
/* 		店铺地址*/
/* 	</blockquote>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">店铺地址</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="title" lay-verify="" autocomplete="off" placeholder="请输入标题" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">坐标</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="title" lay-verify="" autocomplete="off" placeholder="请输入经度" class="layui-input">*/
/* 		</div>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="title" lay-verify="" autocomplete="off" placeholder="请输入纬度" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* 	<blockquote class="layui-elem-quote" style="padding: 8px;">*/
/* 		空间服务<button type="button" class="layui-btn layui-btn-sm addservice" style="margin-left: 50px;">添加服务</button>*/
/* 	</blockquote>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">平面图例</label>*/
/* 		<div id="lc">*/
/* 			<div id="" style="height: 200px;">*/
/* 				<div class="layui-input-inline">*/
/* 					<input type="text" name="title" lay-verify="" autocomplete="off" placeholder="请输入楼层" class="layui-input">*/
/* 					<div class="layui-upload">*/
/* 						<div class="layui-upload-list">*/
/* 							<img class="layui-upload-img" id="suploadimg">*/
/* 							<p id="demoText"></p>*/
/* 						</div>*/
/* 						<div class="layui-btn-group">*/
/* 							<button type="button" type="button" class="layui-btn" id="supload">上传图片</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<button type="button" class="layui-btn layui-btn-sm addlc"><i class="layui-icon"></i></button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-collapse" lay-filter="test" style="margin-bottom: 50px;">*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">场地办公服务</h2>*/
/* 			<div class="layui-colla-content" id="serviceList">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="layui-collapse" lay-filter="test" style="margin-bottom: 50px;">*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">虚拟办公服务</h2>*/
/* 			<div class="layui-colla-content" id="fictitiousService">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="layui-collapse" lay-filter="test" style="margin-bottom: 50px;">*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">其他服务</h2>*/
/* 			<div class="layui-colla-content" id="otherService">*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<blockquote class="layui-elem-quote">*/
/* 		中心配套*/
/* 	</blockquote>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">配套名称</label>*/
/* 		<div class="layui-input-inline" style="width: 700px;">*/
/* 			<div id="pt">*/
/* 				<button type="button" class="layui-btn la	yui-btn-sm" style="float: left; margin-right: 10px;">配套名称</button>*/
/* 			</div>*/
/* 			<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input ptlabel" style="width: 80px; float: left; margin-right: 10px;">*/
/* 			<button type="button" id="addPt" class="layui-btn layui-btn-sm" style="float: left;"><i class="layui-icon"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* 	<blockquote class="layui-elem-quote">*/
/* 		周边设施*/
/* 	</blockquote>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">设施名称</label>*/
/* 		<div class="layui-input-inline" style="width: 700px;">*/
/* 			<div id="labelGroup">*/
/* 				<button type="button" class="layui-btn layui-btn-sm labelBtn" style="float: left; margin-right: 10px;">设施名称</button>*/
/* 			</div>*/
/* */
/* 			<input type="text" name="email" id="labelName" lay-verify="" autocomplete="off" class="layui-input " style="width: 80px; float: left; margin-right: 10px;">*/
/* 			<button type="button" id="addlabelGroup" class="layui-btn layui-btn-sm" style="float: left;"><i class="layui-icon"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<blockquote class="layui-elem-quote" style="padding: 8px;">*/
/* 		入驻企业 <button type="button" class="layui-btn la	yui-btn-sm" id="get_cus" style=" margin-left: 10px;">获取入驻企业</button>*/
/* 	</blockquote>*/
/* 	<div id="">*/
/* */
/* 	</div>*/
/* */
/* 	<div class="layui-collapse" lay-filter="test">*/
/* 		<div class="layui-colla-item">*/
/* 			<h2 class="layui-colla-title">点击展开入驻企业</h2>*/
/* 			<div class="layui-colla-content">*/
/* 				<table cellspacing="0" cellpadding="0" border="0" class="layui-table">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<!--<th data-field="logo">*/
/* 								<div class="layui-table-cell laytable-cell-1-logo"><span>logo</span></div>*/
/* 							</th>-->*/
/* 							<th data-field="company_name">*/
/* 								<div class="layui-table-cell laytable-cell-1-company_name"><span>公司名称</span></div>*/
/* 							</th>*/
/* 							<th data-field="sort">*/
/* 								<div class="layui-table-cell laytable-cell-1-sort"><span>排序</span></div>*/
/* 							</th>*/
/* 							<th data-field="show">*/
/* 								<div class="layui-table-cell laytable-cell-1-show"><span>是否展示</span></div>*/
/* 							</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody id="data-list">*/
/* 						<tr data-index="0" class="">*/
/* 							*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				</table>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="service_group" style="display: none;">*/
/* */
/* 	</div>*/
/* 	<div class="layui-form-item" style="margin-top: 50px;">*/
/* 		<div class="layui-input-block">*/
/* 			<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>*/
/* 			<button type="reset" class="layui-btn layui-btn-primary">取消</button>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* <script type="text/html" id="switchTpl">*/
/* 	<!-- 这里的 checked 的状态只是演示 -->*/
/* 	<input type="checkbox" name="show" value="<% d.show %>" lay-skin="switch" lay-text="女|男" lay-filter="sexDemo" <% d.show==1 ? 'checked' : false %>>*/
/* </script>*/
/* <!--<script src="/resource/admin/js/jslib/citys.js "></script>-->*/
/* */
/* <script>*/
/* 	ykp.defineClass(['element', "jquery "], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom(it);*/
/* 		},*/
/* 		initFrom: function(it) {*/
/* */
/* 			hm.load(function(optionObj) {*/
/* 				var form = optionObj.form,*/
/* 					layer = optionObj.layer,*/
/* 					layedit = optionObj.layedit,*/
/* 					laydate = optionObj.laydate,*/
/* 					public = optionObj.public,*/
/* 					table = optionObj.table,*/
/* 					upload = optionObj.upload;*/
/* 				laytpl = optionObj.laytpl;*/
/* 				var num = 1,*/
/* 					serviceArr = [];*/
/* 				it.confirm = false;*/
/* 				it.serviceList = [];*/
/* 				form.render();*/
/* */
/* 				//多图片上传*/
/* 				upload.render({*/
/* 					elem: '#test2',*/
/* 					url: '/api/api_common/upload_file',*/
/* 					multiple: true,*/
/* 					done: function(res) {*/
/* 						//上传完毕*/
/* 						$('#demo2').append('<img src=" ' + res.data + ' " alt=" ' + res.data + ' " style="margin-right:10px;" class="layui-upload-img ">')*/
/* 					}*/
/* 				});*/
/* */
/* 				it.uploadRender({*/
/* 					el: "#supload",*/
/* 					imgEl: '#suploadimg'*/
/* 				}, upload)*/
/* */
/* 				upload.render();*/
/* */
/* 				//获取入驻公司*/
/* 				$('#get_cus').click(function() {*/
/* 					var result = public.getIframeParams(ykp.getSessionStorage('iframeId'));*/
/* 					it.get_cus(form, result);*/
/* 				})*/
/* */
/* 				//添加配套*/
/* 				$('#addPt').click(function() {*/
/* 					var content = '';*/
/* 					var val = $('.ptlabel').val();*/
/* 					if(!val) {*/
/* 						layer.msg('请输入再添加');*/
/* 					} else {*/
/* 						content = '<button type="button" class="layui-btn layui-btn-sm labelName" style="float: left; margin-right: 10px;">' + val + '</button>';*/
/* 						$('#pt').append(content);*/
/* 						$('.ptlabel').val('');*/
/* 					}*/
/* 				})*/
/* */
/* 				//添加设施*/
/* 				$('#addlabelGroup').click(function() {*/
/* 					var content = '';*/
/* 					var val = $('#labelName').val();*/
/* 					if(!val) {*/
/* 						layer.msg('请输入再添加');*/
/* 					} else {*/
/* 						content = '<button type="button" class="layui-btn layui-btn-sm labelBtn" style="float: left; margin-right: 10px;">' + val + '</button>';*/
/* 						$('#labelGroup').append(content);*/
/* 						$('#labelName').val('');*/
/* 					}*/
/* 				})*/
/* */
/* 				//添加人员*/
/* 				$('.addpeople').click(function() {*/
/* 					var content = `<div  >*/
/* 						<div class="layui-inline">*/
/* 							<label class="layui-form-label">运营人员姓名</label>*/
/* 							<div class="layui-input-inline">*/
/* 								<input type="tel" name="phone" lay-verify="" autocomplete="off" class="layui-input">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="layui-inline">*/
/* 							<label class="layui-form-label">联系人电话</label>*/
/* 							<div class="layui-input-inline">*/
/* 								<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="layui-inline">*/
/* 							<label class="layui-form-label">联系人角色</label>*/
/* 							<div class="layui-input-inline">*/
/* 								<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="layui-inline">*/
/* 							<label class="layui-form-label">联系人邮箱</label>*/
/* 							<div class="layui-input-inline">*/
/* 								<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 							</div>*/
/* 						</div>*/
/* 						<button type="button" class="layui-btn layui-btn-sm close"><i class="layui-icon">&#x1006;</i></button>*/
/* 					</div>`;*/
/* 					$('.peoplegroup').append(content);*/
/* 					form.render();*/
/* 					$('.close').unbind('click').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/* 				})*/
/* */
/* 				//添加楼层*/
/* 				$('.addlc').click(function() {*/
/* 					var content = `*/
/* 						<div id="" style="height: 200px;margin-left: 100px;">*/
/* 							<div class="layui-input-inline">*/
/* 								<input type="text" name="title" lay-verify="" autocomplete="off" placeholder="请输入楼层" class="layui-input">*/
/* 								<div class="layui-upload">*/
/* 									<div class="layui-upload-list">*/
/* 										<img class="layui-upload-img" id="suploadimg${num}">*/
/* 										<p id="demoText"></p>*/
/* 									</div>*/
/* 									<div class="layui-btn-group">*/
/* 										<button type="button" type="button" class="layui-btn" id="supload${num}">上传图片</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<button type="button" class="layui-btn layui-btn-sm closeP"><i class="layui-icon">&#x1006;</i></button>*/
/* 						</div>`;*/
/* 					$('#lc').append(content);*/
/* 					$('.closeP').unbind('click').click(function() {*/
/* 						$(this).parent().remove();*/
/* 					})*/
/* 					it.uploadRender({*/
/* 						el: "#supload" + num,*/
/* 						imgEl: "#suploadimg" + num*/
/* 					}, upload)*/
/* 					num++;*/
/* 				})*/
/* */
/* 				//添加服务*/
/* 				$('.addservice').click(function() {*/
/* 					//保存过楼层*/
/* 					if(it.confirm) {*/
/* 						public.layerOpen({*/
/* 							el: $('#service_group'),*/
/* 							area: ['700px'],*/
/* 							title: "添加服务"*/
/* 						}, function() { //成功执行的回调*/
/* 							var el = $('#service_group').find("input:radio[name=im_station]:checked");*/
/* 							var index = el.attr('data-id');*/
/* 							var name = el.attr('data-name');*/
/* 							el.prev().hide(); //选择过不能选择*/
/* 							appendService(index, name);*/
/* 							var arr = [];*/
/* 							it.serviceList.forEach(function(item) {*/
/* 								if(item['im_station.id'] != index) {*/
/* 									delete item;*/
/* 									arr.push(item)*/
/* 								}*/
/* 							})*/
/* 							it.serviceList = arr;*/
/* 							it.initList(it.serviceList, form);*/
/* 							layer.closeAll();*/
/* 						}, function() { //取消执行的回调*/
/* 							layer.closeAll();*/
/* 						})*/
/* 					} else {*/
/* 						layer.confirm('平面图确认添加完才可以添加服务，确认后楼层不可修改', function(index) {*/
/* 							$('.addlc').remove();*/
/* 							$('.closeP').remove();*/
/* 							layer.closeAll();*/
/* 							public.layerOpen({*/
/* 								el: $('#service_group'),*/
/* 								area: ['700px'],*/
/* 								title: "添加服务"*/
/* 							}, function() { //成功执行的回调*/
/* 								it.confirm = true;*/
/* 								var el = $('#service_group').find("input:radio[name=im_station]:checked");*/
/* 								var index = el.attr('data-id');*/
/* 								var name = el.attr('data-name');*/
/* 								el.next().remove();*/
/* 								appendService(index, name);*/
/* 								var arr = [];*/
/* 								it.serviceList.forEach(function(item) {*/
/* 									if(item['im_station.id'] != index) {*/
/* 										delete item;*/
/* 										arr.push(item)*/
/* 									}*/
/* 								})*/
/* 								it.serviceList = arr;*/
/* 								it.initList(it.serviceList, form);*/
/* 								layer.closeAll();*/
/* 							}, function() { //取消执行的回调*/
/* 								layer.closeAll();*/
/* 							})*/
/* 						});*/
/* 					}*/
/* 				})*/
/* */
/* 				it.showGw(form, serviceArr, it, function(res) {*/
/* 					console.log(res)*/
/* 				});*/
/* */
/* 				function appendService(index, name) {*/
/* 					var btn = `<button type="button" class="layui-btn addpeople layui-btn-sm"><i class="layui-icon"></i></button>`;*/
/* 					var btn1 = `<button type="button" class="layui-btn layui-btn-sm closeS"><i class="layui-icon">&#x1006;</i></button>`;*/
/* 					var content = `<div >*/
/* 					<fieldset class="layui-elem-field layui-field-title">*/
/* 					  <legend>${name}</legend>*/
/* 					</fieldset>`;*/
/* 					var con = `<div><div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">楼层</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<input type="tel" name="phone" lay-verify="" autocomplete="off" class="layui-input">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">房号</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">单价</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">时间</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">位置</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<input type="text" name="email" lay-verify="" autocomplete="off" class="layui-input">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="layui-inline">*/
/* 						<label class="layui-form-label" style="width: 40px;">规格</label>*/
/* 						<div class="layui-input-inline" style="width: 100px;">*/
/* 							<select>*/
/* 								<option value="">选择规格</option>*/
/* 								<option value="0">小</option>*/
/* 								<option value="1">中</option>*/
/* 								<option value="2">大</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				`;*/
/* */
/* 					$('#serviceList').append(content + con + btn + '</div></div>');*/
/* */
/* 					$('.addpeople').unbind('click').click(function() {*/
/* 						$(con + btn1 + '</div></div>').insertAfter($(this).parent());*/
/* */
/* 						form.render();*/
/* 						$('.closeS').click(function() {*/
/* 							$(this).parent().remove();*/
/* 						})*/
/* 					})*/
/* 					form.render();*/
/* 				}*/
/* 			})*/
/* */
/* 		},*/
/* */
/* 		//添加服务*/
/* 		addservice: function(option) {*/
/* */
/* 		},*/
/* */
/* 		//获取工位*/
/* 		showGw: function(form, serviceArr, it, callback) {*/
/* 			ykp.doAjax({*/
/* 				url: "/admin/im/Api_station/grid",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					limit: 100*/
/* 				},*/
/* 				success: function(res) {*/
/* 					console.log(res);*/
/* 					var data = res.data.rows;*/
/* 					it.serviceList = data;*/
/* 					it.initList(data, form, callback);*/
/* 				}*/
/* 			})*/
/* 		},*/
/* */
/* 		//遍历节点*/
/* 		initList: function(data, form, callback) {*/
/* 			console.log(data);*/
/* 			var content = '';*/
/* 			var serviceArr = [];*/
/* 			content += '<div id="customList" style="background: #eee; padding: 10px;" class="model">' +*/
/* 				'<form class="layui-form layui-form-pane" id="autoColForm" style=" height: 100%; width: 100%;  display: flex;justify-content: start; flex-wrap: wrap">' +*/
/* 				'<div class="layui-form-item" pane="">' +*/
/* 				'<div class="" id="checkBoxGroup">';*/
/* 			for(var i = 0; i < data.length; i++) {*/
/* 				content += '<input type="radio" data-id = "' + data[i]['im_station.id'] + '" data-name="' + data[i]['im_station.name'] + '" name="im_station" lay-skin="primary" title="' + data[i]['im_station.name'] + '">'*/
/* 				serviceArr.push(data[i]['im_station.id']);*/
/* 			}*/
/* 			content += '</div></div></form></div>';*/
/* 			$('#service_group').html(content);*/
/* */
/* 			form.render();*/
/* 		},*/
/* 		//上传图片*/
/* 		uploadRender: function(option, upload) {*/
/* 			upload.render({*/
/* 				elem: option.el,*/
/* 				url: '/api/api_common/upload_file',*/
/* 				done: function(res) {*/
/* 					//上传完毕*/
/* 					$(option.imgEl).attr('src', res.data);*/
/* 				}*/
/* 			});*/
/* 		},*/
/* */
/* 		//获取入驻企业*/
/* 		get_cus: function(form, result) {*/
/* */
/* 			ykp.doAjax({*/
/* 				url: "/admin/im/api_shop/ru_custom",*/
/* 				method: "post",*/
/* 				data: {*/
/* 					id: result.id,*/
/* 					limit: '1000'*/
/* 				},*/
/* 				success: function(res) {*/
/* 					var data = res.data.rows;*/
/* 					var content = '';*/
/* 					if(data) {*/
/* 						for(var i = 0; i < data.length; i++) {*/
/* 							content += `*/
/* 								<tr><td data-field="company_name">*/
/* 									<div class="layui-table-cell laytable-cell-1-company_name">${data[i].company_name}</div>*/
/* 								</td>*/
/* 								<td data-field="sort">*/
/* 									<div class="layui-table-cell laytable-cell-1-sort">*/
/* 									<select class="sort">*/
/* 											<option value="1" ${data[i].sort == 1 ? "selected" : ""}>1</option>*/
/* 											<option value="2" ${data[i].sort == 2 ? "selected" : ""}>2</option>*/
/* 											<option value="3" ${data[i].sort == 3 ? "selected" : ""}>3</option>*/
/* 											<option value="4" ${data[i].sort == 4 ? "selected" : ""}>4</option>*/
/* 											<option value="5" ${data[i].sort == 5 ? "selected" : ""}>5</option>*/
/* 											<option value="6" ${data[i].sort == 6 ? "selected" : ""}>6</option>*/
/* 											<option value="7" ${data[i].sort == 7 ? "selected" : ""}>7</option>*/
/* 											<option value="8" ${data[i].sort == 8 ? "selected" : ""}>8</option>*/
/* 											<option value="9" ${data[i].sort == 9 ? "selected" : ""}>9</option>*/
/* 											<option value="10" ${data[i].sort == 10 ? "selected" : ""}>10</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td data-field="show" data-content="1">*/
/* 									<div class="layui-table-cell laytable-cell-1-show">*/
/* 										<input type="checkbox" name="show" value="${data[i].show}" ${data[i].show == 1 ? "checked" : ""} lay-skin="switch" lay-text="否|是" lay-filter="sexDemo"*/
/* 										<div class="layui-unselect layui-form-switch" lay-skin="_switch"><i></i></div></div>*/
/* 								</td></tr>*/
/* 								`;*/
/* 						}*/
/* 						$('#data-list').html(content);*/
/* 						form.render();*/
/* 					} else {*/
/* 						layer.msg('还没有入驻企业');*/
/* 					}*/
/* 				}*/
/* 			})*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
