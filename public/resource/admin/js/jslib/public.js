//config的设置是全局的
layui.config({
	debug: true,
	base: '/resource/admin/js/jslib/', //扩展路径
}).extend({

});

layui.define(function(exports) { //提示：模块也可以依赖其它模块，如：layui.define('layer', callback);
	var obj = {
		//扩展model弹出层   
		/**
		 * 
		 * @param {Object} el   搜索内容
		 * @param {Object} yes  model确认按钮
		 * @param {Object} cancel  model取消
		 */
		layerOpen: function(data, yes, cancel, reset) {
			var yesBtn = data.yes || "确认",
				noBtn = data.no || "取消",
				btn = [yesBtn, noBtn];
			if(reset) {
				btn.push('重置');
			}
			layer.open({
				type: 1,
				title: data.title || "搜索",
				closeBtn: 1, //下标
				shadeClose: false,
				skin: '',
				area: data.area || ['944px'], //['925px']
				offset: [100],
				zIndex: 49,
				content: data.el,
				scrollbar: false,
				btn: btn,
				yes: yes, //确认回调
				btn2: cancel, //取消回调
				btn3: reset  //重置
			});
		},

		//获取搜索需要的参数
		getSearchCode: function(option) {
			var sear = [];
			if(option.el) {
				$(option.el).find('input,select').each(function() {
					if($(this).val() != "") {
						var val = $(this).val();
						if($(this).attr('data-type') == "time") {
							if(!$(this).attr('range')) { //时间范围时
								var timeArr = $(this).val().split('-');
								sear.push("(time between '" + new Date(timeArr[0]) / 1000 + "' and '" + +new Date(timeArr[1]) / 1000 + "')");
							} else { //单个时间时
								sear.push($(this).attr('sear') + ' like \'%' + new Date($(this).val()) / 1000 + '%\'');
							}
						} else {
							if($(this).attr('sear')) { //防止select 插件
								if($(this).attr('data-type') == 'select') {
									sear.push($(this).attr('sear').replace(/-/, '.') + ' = ' + $(this).val());
								}else{
									sear.push($(this).attr('sear').replace(/-/, '.') + ' like \'%' + $(this).val() + '%\'');
								}
							}
							
						}
					}
				})
				sear = sear.join(',').replace(/,/g, ' and ');
				return sear;
			}
		},

		//重置search值
		emptyVal: function(el) {
			$(el).find('input,select').val('');
		},

		/**
		 * 
		 * @param {Array} option  数组对象
		 */
		timePicker: function(option) {
			layui.use('laydate', function() {
				for(var i in option) {
					layui.laydate.render({
						elem: option[i].el,
						range: option[i].range,
						format: option[i].format
					})
				}
			})
		},

		/**
		 * 
		 * @param {Object} option  
		 */
		upload: function(option) {
			layui.use('upload', function() {
				var upload = layui.upload;
				if(!option) {
					console.error('请添加option参数');
					return false;
				}
				//普通图片上传
				var uploadInst = upload.render({
					elem: option.el, //图片展示节点
					url: option.url, //上传地址
					multiple: option.multiple || false,
					accept: 'file', //上传普通文件
					exts: option.exts || "", //值允许某种文件  例：'zip|rar|7z'
					size: option.size || 200, // 限制大小,
					auto: option.auto || true,
					before: function(obj) {
						//预读本地文件示例，不支持ie8
						obj.preview(function(index, file, result) {
							//$(option.showImg).attr('src', result); //图片链接（base64）     opton.showImg//显示图片地址
						});
					},
					done: function(res) { //上传回调
						//如果上传失败
						if(res.code == 200) {
							console.log(res.data)
							$(option.showImg).attr('src', res.data);
							$(option.showImg).parent().append('<span class="fa fa-remove remove" style="position: absolute;top: 0px;left: 83px;padding: 2px;"><span></span></span>');
							return layer.msg('上传成功');

						} else {
							return layer.msg('上传失败');
						}
						//上传成功
					},
					error: function(res) {
						//演示失败状态，并实现重传
						var demoText = $('#demoText');
						demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
						demoText.find('.demo-reload').on('click', function() {
							uploadInst.upload();
						});
					},
					error: function(index, upload) {
						console.log(index);
					}
					//					,
					//					choose: function(obj) {
					//						//将每次选择的文件追加到文件队列
					//					    var files = obj.pushFile();
					//					    
					//					    //预读本地文件，如果是多文件，则会遍历。(不支持ie8/9)
					//					    obj.preview(function(index, file, result){
					//					      console.log(index); //得到文件索引
					//					      console.log(file); //得到文件对象
					//					      console.log(result); //得到文件base64编码，比如图片
					//					      
					//					      //这里还可以做一些 append 文件列表 DOM 的操作
					//					      
					//					      //obj.upload(index, file); //对上传失败的单个文件重新上传，一般在某个事件中使用
					//					      //delete files[index]; //删除列表中对应的文件，一般在某个事件中使用
					//					    });
					//					}
				});
			});
		},

		import: function(option, callback, obj) {
			layui.use(['upload'], function() {
				var upload = layui.upload;
				upload.render({
					elem: option.el,
					url: option.url,
					auto: false,
					accept: 'file',
					bindAction: '.actionBtn',
					done: function(res) {
						if(typeof callback == 'function') {
							callback(res);
						}
					},
					choose: function(obj) {
						//将每次选择的文件追加到文件队列
						var files = obj.pushFile();

						//预读本地文件，如果是多文件，则会遍历。(不支持ie8/9)
						obj.preview(function(index, file, result) {
							//					      console.log(index); //得到文件索引
							//					      console.log(file); //得到文件对象
							//					      console.log(result); //得到文件base64编码，比如图片

							//这里还可以做一些 append 文件列表 DOM 的操作

							//obj.upload(index, file); //对上传失败的单个文件重新上传，一般在某个事件中使用
							//delete files[index]; //删除列表中对应的文件，一般在某个事件中使用
						});
					}

				});
			});
		},
		//预留导出
		Export: function() {

		},

		//  时间插件  例 "#demo"   /  [{el:'#date',range:false}]
		dataRender: function(option) {
			if(!option) {
				console.error('请传入option参数');
				return false;
			}
			layui.use(['laydate'], function() {
				var laydate = layui.laydate;
				if(typeof option == 'string') { //当为单个时传入字符串el节点
					laydate.render({
						elem: option,
						type: "datetime",
						format: "yyyy-MM-dd HH:mm:ss",
					});
				} else { //当为多个时传入数组 对象
					for(var i in option) {
						laydate.render({
							elem: option[i].el,
							range: option[i].range,
							format: option[i].format || "yyyy-MM-dd HH:mm:ss",
							type: option[i].type || "datetime"
						})
					}
				}
			})

		},

		/**
		 * 
		 * @param {Object} iframeId  iframe id值 返回  参数
		 */
		getIframeParams: function(iframeId) {
			var regexpParam = /\??([\w\d%]+)=([\w\d%]*)&?/g; //分离参数的正则表达式
			var targetEle = self.parent.document.getElementById(iframeId);
			//console.log(targetEle);
			var paramMap = null;
			if(!!targetEle) {
				var url = targetEle.src; //取得iframe的url
				var ret;
				paramMap = {}; //初始化结果集

				//开始循环查找url中的参数，并以键值对形式放入结果集
				while((ret = regexpParam.exec(url)) != null) {
					//ret[1]是参数名，ret[2]是参数值
					paramMap[ret[1]] = ret[2];
				}
			}
			return paramMap; //返回结果集
		},
		//显示编辑信息   
		/**
		 * 
		 * @param {Object} option  {el："#el/.el",data:data}  el 节点   data 参数
		 */
		showEditInfo: function(option) {
			if(option && option.data) {
				var data = option.data,
					el = option.el;
				layui.use(['form'], function() {
					for(var key in data) {
						$(el).find('input,img,select,textarea').each(function(i) {
							if($(this).attr('name') == key) {
								if($(this).attr('datatype') == "img") { //图片时
									$(this).attr('src', data[key]);
								} else { //输入框时
									if($(this).attr('datatype')) { //特殊表单时
										var form = layui.form;
										var type = $(this).attr('datatype');
										if(type == 'select') { //select
											$(this).val(data[key].split(','));
											form.render();
										} else if(type == 'radio') {
											if($(this).val() == data[key]) { //radio
												$(this).attr('checked', true);
												form.render('radio');
											}
										} else if(type == 'textarea') {

											option.editor.html("<h3>Hello KindEditor</h3>");
										} else {
											if($(this).val() == data[key]) { //checkbox
												$(this).attr('checked', true);
												form.render('checkbox');
											}
										}
									} else { //普通输入框时
										$(this).val(data[key]);
									}
								}
							}
						})
					}
					if(data.city) {
						pca.init('select[name=P1]', 'select[name=C1]', 'select[name=A1]', data.city[0], data.city[1], data.city[2]);
					}
				})
			} else {
				console.error('请传入正确的参数');
			}
		},
		//展示列表
		showTable: function(option) {
			if(option) { //topBtnGroup
				var that = this;
				that.searchCode = ""; //存放搜索字段				
				that.select = [];
				that.statusKey = '';
				var roles = hm.getLocalStorage('role');
				//el   预留切换卡
				if(option.topTool) { //顶部按钮
					var btnCon = '<div class="layui-btn-group topBtnGroup">',
						topTool = option.topTool.btnArr;
					for(var i = 0; i < topTool.length; i++) {
						if(topTool[i].role) { //权限   权限id
							if(roles.indexOf(topTool[i].role) != -1) {
								btnCon += '<button class="layui-btn ' + (topTool[i].class || "") + '" style="height: 35px; line-height: 35px;" data-type="' + topTool[i].type + '">' + (topTool[i].title == "高级搜索" ? "搜索" : topTool[i].title) + '</button>';
							}
						} else {
							btnCon += '<button class="layui-btn ' + (topTool[i].class || "") + '" style="height: 35px; line-height: 35px;" data-type="' + topTool[i].type + '">' + (topTool[i].title == "高级搜索" ? "搜索" : topTool[i].title) + '</button>';
						}
					}
					btnCon += '</div>';
					$(btnCon).insertBefore(option.reader.elem);
				}
				if(option.cols) {
					var timeArr = hm.getSearch({ //展示遍历搜索内容节点
						data: option.cols,
						el: option.reader.elem
					}); //遍历搜素demo
					layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
						var table = layui.table;
						var public = layui.public,
							form = layui.form,
							tabConId = (option.tabConId || "");
						public.timePicker(timeArr); //加载时间插件
						form.render(); //方式  动态添加的select表单不绚烂  

						//是否添加自定义按钮
						if(option.autoCol) {
							var con = ""; //按钮内容
							if(typeof option.autoCol == 'boolean') {
								var con = '<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="autoShowCol">自定义列表</button>';
							} else {
								var con = '<button class="layui-btn  ' + (option.autoCol.class || "") + '" style="height: 35px; line-height: 35px;" data-type="' + (option.autoCol.type || "") + '">自定义列表</button>';
							}
							$(".topBtnGroup").append(con); //添加自定义列表按钮

							var checkBoxCon = "";
							var col = option.cols;
							//遍历自定义按钮的节点
							checkBoxCon += '<div id="customList" style="display: none;background: #eee; padding: 10px;" class="model">' +
								'<form class="layui-form layui-form-pane" id="autoColForm" style=" height: 100%; width: 100%;  display: flex;justify-content: start; flex-wrap: wrap">' +
								'<div class="layui-form-item" pane="">' +
								'<div class="" id="checkBoxGroup">';

							for(var i in col) {
								if(col[i]['title'] && col[i]['title'] != '操作') {
									checkBoxCon += '<input type="checkbox" name="' + col[i]['field'] + '" lay-skin="primary" title="' + col[i]['title'] + '"   ' + (col[i]['hidden'] ? "" : "checked=''") + '>'
								}
							}
							checkBoxCon += '</div></div></form></div>';
							$(checkBoxCon).insertBefore(option.reader.elem);
							form.render('checkbox');
						}

						//加入当前table刷新
						if(!option.tableLoad) {
							var con = ""; //按钮内容
							if(!typeof option.tableLoad == 'boolean') {
								var con = '<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="tableLoad">刷新</button>';
							} else {
								var con = '<button class="layui-btn  ' + (option.autoCol.class || "") + '" style="height: 35px; line-height: 35px;" data-type="tableLoad">刷新</button>';
							}
							$(".topBtnGroup").append(con); //添加刷新按钮
						}

						var data = [];
						if(option.reader) { //展示列表
							var select = [];
							var str = '';
							var result = []; //去重时存放的数组  防止select数据重复
							//console.log(option.cols);
							for(var i in option.cols) {
								if(option.cols[i].field && option.cols[i].field != 'right') {
									str = option.cols[i].field;
									select.push(str.replace(/-+/, '.') + ' as ' + option.cols[i].field);
								}
							}
							//去重处理防止查询时出错
							for(var i = 0; i < select.length; i++) {
								if(result.indexOf(select[i]) == -1) {
									result.push(select[i])
								}
							}
							that.select = result.join(',');
							table.render({
								elem: option.reader.elem || "",
								url: option.reader.url || '',
								method: "post",
								cols: [
									option.cols
								],
								id: option.reader.id || '',
								page: option.reader.page == false ? false : true,
								height: option.reader.height || "full-180", // 高度
								skin: option.reader.skin || 'row', //表格风格
								even: true,
								limits: option.reader.limits || [10, 20, 30, 45, 50, 100], //配置显示多少条数据
								limit: option.reader.limit || 10, //每页默认显示的数量   搜索关键字
								initSort: option.reader.initSort ?  {field:option.reader.initSort || "",type:"desc" } : "",
								//where: option.reader.where ? : {filter: "",order: "",select: select || ""},
								where: $.extend({}, option.reader.where, {
									'select': that.select
								}),

								request: { //.pageName
									pageName: (option.reader.request ? option.reader.request.pageName : "page") || "page", //页码的参数名称，默认：page
									limitName: (option.reader.request ? option.reader.request.limitName : "limit") || "limit", //每页数据量的参数名，默认：limit
								},
								response: {
									statusName: (option.reader.response ? option.reader.response.statusName : "code") || "code", //数据状态的字段名称，默认：code
									statusCode: (option.reader.response ? option.reader.response.statusCode : 0) || 0, //成功的状态码，默认：0
									msgName: (option.reader.response ? option.reader.response.msgName : "msg") || "msg", //状态信息的字段名称，默认：msg
									countName: (option.reader.response ? option.reader.response.countName : "records") || "records", //数据总数的字段名称，默认：count
									dataName: (option.reader.response ? option.reader.response.dataName : "rows") || "rows", //数据列表的字段名称，默认：data
								},
								done: function(res) {
									var cols = option.cols;
									var it = this;
									it.multiple = {}; //存放多个数据的

									for(var i in cols) {
										//根据数据库枚举型的数据 显示对应的值
										$('td[data-field=' + cols[i].field + ']').children().each(function() {
											if(cols[i].examine) {
												that.statusKey = cols[i].field;
											}

											if(cols[i].enum) {
												$(this).text(cols[i].enum[$(this).text()]);
											}
											//当为异步
											if(cols[i].key) {
												$(this).parent().attr('data-name', cols[i].key);
											}
											if(cols[i].after) {
												$(this).text($(this).text() + cols[i].after);
											}
											if(cols[i].type && cols[i].type === 'image') {
												var pic = $(this).text();
												var html = [
													'<div style="position:relative;">',
													'<img style="width:90%;height:90%;" src="' + pic + '" />',
													'<div class="table_pic_show" style="position:fixed;display:none;z-index:100;border:2px solid #4CB7EE;width:200px;height:200px;background:#fff;">',
													'<img style="width:100%;height:100%;" src="' + pic + '" />',
													'</div>',
													'</div>',
												];
												var html = html.join('');
												$(this).html(html).hover(function(e) {
													var parentDom = $('.table_pic_show', $(this)).parent();
													var topP = parentDom.offset().top;
													var leftP = parentDom.offset().left + parentDom.width() + 10;
													$('.table_pic_show', $(this)).css({
														'top': topP,
														'left': leftP
													}).show();
												}, function(e) {
													$('.table_pic_show', $(this)).hide();
												});
											}

										});

										if(cols[i].url && cols[i].multiple) {
											it.url = cols[i].url;
											it.field = cols[i].field;
											it.data = {
												limit: 1000
											};
											if(cols[i].filter) {
												it.data.filter = cols[i].filter;
											}
											(function(i) {
												ykp.doAjax({
													url: it.url,
													method: "post",
													data: it.data,
													async: false,
													success: function(res) {
														it.multiple[it.field] = res.data.rows;
													}
												})

											})(i)
										}

									}

									//过滤td列 返回数据为  1,2,3时的格式   
									for(var key in it.multiple) {
										it.multiple[key + '1'] = [];
										$('td[data-field=' + key + ']').text().split(',').forEach(function(item) {
											for(var j in it.multiple[key]) {
												if(it.multiple[key][j].id == item) {
													it.multiple[key + '1'].push(it.multiple[key][j][$('td[data-field=' + key + ']').attr('data-name')]);
												}
											}
										})
										$('td[data-field=' + key + ']').children().text(it.multiple[key + '1'].join(','));
									}

									//自定义列表
									public.shwoHideCol({
										el: tabConId + "#autoColForm"
									});

									//权限预留功能
									/*$('a[lay-event]').each(function(i) {
										if(roles.indexOf($(this).attr('role')) == -1 && $(this).attr('role')) {
											$(this).remove();
										}
									})*/
								}
							});

							//table操作栏按钮事件
							table.on('tool(' + option.reader.id + ')', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
								var data = obj.data, //获得当前行数据
									layEvent = obj.event; //获得 lay-event 对应的值
								if(!option.tool.id) {
									console.error('请传入id关键字，例如："id", "product_type_id"');
									return false;
								}
								var id = obj.data[option.tool.id]; //单条记录的id

								var Event = option.tool.Event; //toolbar点击按钮组
								for(var i in Event) {
									if(layEvent == Event[i].type) {
										if(Event[i].type == "del") { //删除时
											//											that.url = this.Event[i].url;
											(function(i) {
												layer.confirm('真的删除行么', function(index) {
													//												console.log(that.url);
													//删除批量删除							
													hm.plDel({
														data: id,
														primaryKey: (option.tool.id).replace(/-/, '.'),
														params: {
															url: Event[i].url,
															method: 'post',
															special:Event[i].special,
															other:Event[i].otherOption  || ""  
														}
													}, function(res) {
														console.log("删除成功");
														search({
															select: that.select || "",
															searchCode: option.reader.where.filter || ""
														});
													})
													layer.close(index);
												});
											})(i)
										} else if(Event[i].type == "examine") {
											if(obj.data[that.statusKey] != 0) {
												layer.msg('您已经审批过了');
												return false;
											}

											var content = '<div id="spFrom" style="display: none;background: #eee; padding: 10px;" class="model">' +
												'<form class="layui-form layui-form-pane" id="form" style=" height: 100%; width: 100%;  display: flex; flex-wrap: wrap;justify-content: start;">';
											content += `<select name="interest" id="sp" lay-filter="aihao">
											        <option value="">请选择审批状态</option>
											        <option value="1">审批成功</option>
											        <option value="2">审批失败</option>
											      </select></form></div>`;
											$(content).insertBefore(tabConId + "#globalSearch");
											form.render();
											(function(i) {
												public.layerOpen({
													el: $('#spFrom'),
													area: "auto",
													title: "审批"
												}, function() { //成功执行的回调
													var val = $('#sp').val();
													if(!val) {
														layer.msg('请选择再提交');
														return false;
													}
													console.log(Event[i].url);
													ykp.doAjax({
														url: Event[i].url,
														method: "post",
														data: {
															id: id,
															status: val
														},
														success: function(res) {
															//成功回调请求刷新列表
															$('#sp').val('');
															search({
																select: that.select || "",
																searchCode: option.reader.where.filter || ""
															});
															layer.closeAll();
														}
													})

												}, function() { //取消执行的回调
													layer.closeAll();
												})
											})(i)
										} else {
											$(option.tool.conId).find('input').val(obj.data.name);
											if(option.tool.jumpUrl) { //编辑  详情 不跳转页面时
												if(!option.tool.conId) {
													console.error('请传入操作栏 id，例如："#add_edit"');
													return false;
												}
												Event[i].fun(id, function(res) {
													console.log(res);
													search({
														select: that.select || ""
													});
												}); //执行里面的函数
											} else {
												//编辑  详情 跳转页面时
												self.parent.document.getElementById(ykp.getSessionStorage('iframeId')).src = Event[i].url + id;
											}

										}
									}
								}
							});

							//排序事件  后续再优化 
							table.on('sort(' + option.reader.id + ')', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
								var data = {
									order: obj
								};
								if(that.searchCode) { //防止searchCode 清空
									data.searchCode = that.searchCode;
								}
								data.select = that.select;
								search(data);
								public.shwoHideCol({
									el: tabConId + "#autoColForm"
								});
							});

							//默认初始化事件

							var active = {
								//高级搜索
								hSearch: function() {
									public.layerOpen({
										el: $(tabConId + '#globalSearch')
									}, function() { //成功执行的回调
										var searchCode = public.getSearchCode({
											el: tabConId + "#globalSearch"
										});
										if(!searchCode) {
											ykp.prompt('最少输入一个条件');
										} else {
											that.searchCode = searchCode + (option.reader.where.filter ? (' and '+option.reader.where.filter) : ""); //存放search值
											searchCode = searchCode + (option.reader.where.filter ? (' and '+option.reader.where.filter) : "");
											search({
												searchCode: searchCode,
												select: that.select || ""
											});
											layer.closeAll();
										}
									}, function() { //取消执行的回调
										layer.closeAll();
									}, function() {
										that.searchCode = ""; //清空search值
										public.emptyVal(tabConId + "#globalSearch"); //清除输入框
										return false;
									})
								},
								//自定义列表点击事件
								autoShowCol: function() {
									public.layerOpen({
										el: $('#customList'),
										area: ['700px'],
										title: "自定义列表"
									}, function() { //成功执行的回调
										public.shwoHideCol({
											el: tabConId + "#autoColForm"
										});
										layer.closeAll();
									}, function() { //取消执行的回调
										layer.closeAll();
									})
								},
								//刷新列表
								tableLoad: function() {
									search({
										select: that.select || "",
										searchCode: option.reader.where.filter || ""
									});
								}
							};
							//判断顶部点击事件按钮   根据选项卡添加事件
							if(option.topBtnActive) {
								var topBtnActive = option.topBtnActive.Event;
								for(var i in topBtnActive) {
									//批量删除时
									if(topBtnActive[i].type == "plDel") {
										(function(i) {
											var url = topBtnActive[i].url; // 闭包的原因
											active[topBtnActive[i].type] = function() {
												var checkStatus = table.checkStatus('tabel_user'),
													data = checkStatus.data;
												if(data.length == 0) {
													layer.msg('最少选中一个');
													return false;
												}

												layer.confirm('真的删除行么', function(index) {
													//删除批量删除							
													hm.plDel({
														data: data,
														primaryKey: (option.tool.id).replace(/-/, '.'),
														params: {
															url: topBtnActive[i].url,
															method: 'post',
															special:topBtnActive[i].special,
															other:topBtnActive[i].otherOption  || ""  
														},
														name: option.tool.id
													}, function(res) {
														layer.msg('删除成功');
														search({
															select: that.select || "",
															searchCode: option.reader.where.filter || ""
														});
													});
												});

											}
										})(i)
									} else if(topBtnActive[i].type == "add") { //添加事件
										if(option.tool.jumpUrl) { //true   不跳页面添加   反之
											active[topBtnActive[i].type] = topBtnActive[i].fun;
											//											('',function(res) {
											//												console.log(res);
											//												search();
											//											})
										} else {

											(function(i) {
												var url = topBtnActive[i].url; //闭包的原因
												active[topBtnActive[i].type] = function() {
													self.parent.document.getElementById(ykp.getSessionStorage('iframeId')).src = url;
												}
											})(i)
										}
									} else if(topBtnActive[i].type == "improt") {
										var url = topBtnActive[i].url; //必须写在外面  闭包的原因
										(function(i) {
											var url = topBtnActive[i].url; //闭包的原因
											active[topBtnActive[i].type] = function() {
												layer.tab({
													area: '500px',
													offset: '100px',
													tab: [{
														title: '导入',
														content: $('#import1').html()
													}]
												});
												public.import({
													el: '.test8',
													url: url,
												}, function(res) {
													console.log(res);
												}, function(obj) {
													console.log(obj);
												})

											}
										})(i)
									} else {
										(function(i) {
											var url = topBtnActive[i].url; //闭包的原因
											active[topBtnActive[i].type] = function() {
												ykp.doAjax({
													url: url,
													method: "post",
													data: {},
													success: function(res) {

													}
												})
											}
										})(i)
									}
								}
							}
							$('.topBtnGroup .layui-btn').on('click', function() {
								var type = $(this).data('type');
								active[type] ? active[type].call(this) : '';
							});

							//重复加载
							function search(option) {
								var data = {};
								if(option) {
									if(option.searchCode) {
										data.filter = option.searchCode;
									}
									if(option.order) {
										data.order = (option.order.field.replace(/-+/, '.') + " " + (option.order.type || "asc"));
									}
									if(option.select) {
										data.select = option.select;
									}
								}
								table.reload('tabel_user', {
									initSort: option ? option.order : "",
									where: data
								});
							}

						} else {
							console.error('请传入reader对象参数,详情请栏layui table表格reader 参数');
						}

					})
				} else {
					console.error('请传入cols对象参数');
				}
			} else {
				console.error('请传入option对象参数');
			}
		},

		/**
		 *   option  el : 节点id   如果涉及到table选项卡的时候  可以以对象的方式传入 {el:"#autoColForm" ,tId:tabelId} 
		 */
		//自定义显示列表
		shwoHideCol: function(option) {
			var showArr = [],
				hideArr = [];
			var el = typeof option == "string" ? option : option.el;
			$(el).find('input[type="checkbox"]').each(function() {
				if($(this).is(":checked")) {
					showArr.push($(this).attr('name'));
				} else {
					hideArr.push($(this).attr('name'));
				}
			})
			var Table = option.tId ? option.tId : "table";
			for(var i in showArr) {
				$(Table).find('thead th,tbody td').each(function() {
					if($(this).attr('data-field') == showArr[i]) {
						$(this).show();
					}
				})
			}
			for(var j in hideArr) {
				$(Table).find('thead th,tbody td').each(function() {
					if($(this).attr('data-field') == hideArr[j]) {
						$(this).hide();
					}
				})
			}
		},
		/**
		 * 遍历详情节点
		 */
		showInfo: function(option) {
			if(option.col) {
				var data = option.col,
					lw = option.lw || "", //左边labe的宽度
					content = "";
				for(var i in data) {
					if(data[i].type && data[i].type == "img") {
						//${data[i].val || '/resource/admin/image/avatar.png'}
						content += `<div class="layui-form-item">
					<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}">${data[i].name}:</label>
					<div class="layui-input-block">
						<div class="layui-upload">
							<div class="layui-upload-list">
								<img class="layui-upload-img" src="" data-info="pics" data-type="img" id="demo1">
								<p id="demoText"></p>
							</div>
						</div>
					</div>
				</div>`;
					} else {
						content += `
					<div class="layui-form-item">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}">${data[i].name}:</label>
						<label class="layui-form-label label_value" style="${data[i].w ? "width:" +data[i].w+"px !important" : ""}" data-arr="${data[i].select ? data[i].val : ""}" data-after="${data[i].after ? data[i].after : ""}" data-info="${data[i].val}"></label>
					</div>`;
					}
				}
				$((option.el || '.layui-form')).html(content);

			} else {
				console.error('请传入col参数');
			}
		},

		verifyData: function(option) {
			//例子
			//var option = [{verifyDate:"password",msg:"请输入正确的密码"},
			//{verifyDate:"tel",msg:'请输入正确的手机号码'}];
			if(!option.option || !option.el) {
				console.error('请传入正确的参数');
				return false;
			}
			var el = option.el,
				option = option.option;

			var verifyArr = {
				password: [/^[\S]{6,12}$/, '密码必须6到12位，且不能出现空格'], //密码
				tel: [/^1[3|4|5|8][0-9]\d{4,8}$/, '不是完整的11位手机号或者正确的手机号前七位'], //手机号
				gtNum: [/^\d+$/, '请填写非负数'], //非负数
				pInt: [/^[0-9]*[1-9][0-9]*$/, '请填写正整数'], //正整数
				stre: [/^[A-Za-z]+$/, '请填写英文'], //英文
				streB: [/^[A-Z]+$/, '请填写大写英文'], //大写英文
				streS: [/^[a-z]+$/, '请填写小写英文'], //小写英文
				email: [/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/, '请填写正确的邮箱'], //邮箱
				url: [/[a-zA-z]+:\/\/[^\s]* /, '请填写正确的url地址'], //url
				china: [/[^\x00-\xff]/, '请填写中文'], //中文
				qq: [/^\d{5,10}$/, '请填写正确的qq'], //qq
				idCard: [/\d{15}|\d{18}/, '请填写正确的身份证'], //身份证
				idCard: [/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip'], //ip地址
				mzero: [/^[1-9]\d*(\.\d+)?$/,'请输入大于零的数'],  //大于零包含小数
			}
			var data = {};
			layui.use(['form'], function() {
				var form = layui.form;
				//				$(el).find('input,select,textarea').each(function(index) {
				//					for( var j in option) {
				//						if($(this).attr('lay-verify') == option[j].verifyDate) {
				//							if($(this).val() == "") {
				//								option.splice(index, 1);
				//							}
				//						}
				//					}
				//				})
				for(var i in verifyArr) {
					for(var j in option) {
						if(option[j].verifyDate == i) { //当   对象相同时，直接做处理
							if(option[j].msg) {
								verifyArr[i][1] = option[j].msg;
								data[option[j].verifyDate] = verifyArr[i];
							} else {
								data[option[j].verifyDate] = verifyArr[i];
							}
						} else if(option[j].match) { //当需要自定义正则的时候  添加  match字段
							data[option[j].verifyDate] = option[j].match;
						}
					}
				}

				//				console.log(data);
				form.verify(data);
			})
		},

		//生成近几天的时间范围数据
		/**
		 * 
		 * @param {Object} option  
		 * @param {Object} el 节点  
		 * @param {Array} data 数组
		 * @param {Function} fun 回调函数  返回当前选中值
		 */
		showTimeSelect: function(option) {
			var content = '',
				data = option.data,
				el = option.el;
			content = `<select name="interest" lay-filter="time"><option value="">请选择</option> `;
			for(var i = 0; i < data.length; i++) {
				content += '<option value="' + data[i].val + '">' + data[i].title + '</option>';
			}
			content += '</select>';
			$(el).append(content);
			hm.load(function(Option) {
				var table = Option.table;
				var public = Option.public;
				var form = Option.form;
				form.render();
				form.on('select(time)', function(data) {
					if(typeof option.fun == 'function') {
						option.fun(data.value)
					}
				});
			})
		}
	};

	//输出public接口
	exports('public', obj);
});

var hm = {
	/**
	 * 
	 * @param {Object} option   data: 遍历节点的data值  数组类型   el  把节点添加到el上
	 */
	getSearch: function(option) {
		if(option.data && option.el) {
			var data = option.data,
				el = option.el;
		}
		var listData = {};
		for(var i in data) {
			// 锅炉是否有没有 异步获取的数据      url colKey    colName
			if(data[i].url) {
				var that = this;
				that.i = i;
				ykp.doAjax({
					url: data[that.i]['url'],
					method: "post",
					data: {
						limit: "10"
					},
					async: false,
					success: function(res) {
						var res = res.data.rows;
						var Arr = [];
						for(var j = 0; j < res.length; j++) {
							Arr.push({
								val: res[j][data[that.i]['colKey']],
								text: res[j][data[that.i]['colName']]
							});
						}
						listData[data[that.i]['field']] = Arr;
					}
				})
			}
		}
		var content = "";
		var select = "";
		var timeArr = [];

		content += '<div id="globalSearch" style="display: none;background: #eee; padding: 10px;" class="model">' +
			'<form class="layui-form layui-form-pane" id="form" style=" height: 100%; width: 100%;  display: flex; flex-wrap: wrap;justify-content: start;">';
		for(var i in data) {
			if(data[i]['title'] && data[i]['title'] != '操作' && data[i]['sear'] && !data[i]['hidden']) {
				if(data[i].type && data[i].type == "time") {
					content += ` <div class="layui-inline">
								      <label class="layui-form-label">${data[i]['title']}</label>
								      <div class="layui-input-block">
								        <input type="text" name="date" id="date${i}" gjs="true" range="${data[i]['range']}" data-type="${data[i]['type']}" sear="${data[i]['sear']}" autocomplete="off" class="data layui-input">
								      </div>
								    </div>`;
					timeArr.push({
						el: "#date" + i,
						range: false,
						format: 'yyyy/MM/dd'
					});
				} else if(data[i].type && data[i]['type'] == 'select') {
					select = "";
					content += `<div class="layui-inline">
					      <label class="layui-form-label">${data[i]['title']}</label>
					      <div class="layui-input-inline">
					        <select name="modules" lay-verify="required" lay-search="" gjs="true" data-type="${data[i]['type']}" sear="${data[i]['sear']}" ><option value="">直接选择或搜索选择</option>`;
					if(!data[i].url) {
						for(var key in data[i]['enum']) {
							select += `<option value="${key}">${data[i]["enum"][key]}</option>`;
						}
					} else { //当为异步获取的数据时
						for(var j = 0; j < listData[data[i].field].length; j++) {
							select += `<option value="${listData[data[i].field][j]['val']}">${listData[data[i].field][j]['text']}</option>`;
						}
					}
					content += select;
					content += `</select></div></div>`;
				} else {
					content += `<div class="layui-inline">
										<label class="layui-form-label">${data[i]['title']}</label>
										<div class="layui-input-inline">
											<input type="text" name="username" lay-verify="required"  gjs="true" data-type="${data[i]['type']}" sear="${data[i]['sear']}" placeholder="请输入" autocomplete="off" class="layui-input">
										</div>
									</div>`;
				}
			}
		}
		content += '</form></div>';
		$(content).insertBefore(el);
		return timeArr;

	},

	/**
	 * 
	 * @param {Object} option  显示添加编辑参数
	 */
	showAddEdit: function(option) {
		var that = this;
		that.option = option;
		that.imgArr = []; //图片el存放地址
		//verifyData
		if(option) {
			var list = option.list;
			var content = ''; //内容存放地址
			var listCont = ''; //select options存放地址
			var timeArr = []; //时间插件
			var uploadArr = []; //上传插件
			var listData = {}; //存放异步加载数据
			var citySel = '';
			for(var i in list) {
				// 锅炉是否有没有 异步获取的数据      url colKey    colName
				if(list[i].url) {
					var that = this;
					that.i = i;
					that.data = {
						limit: "1000"
					};
					if(list[i].filter) {
						that.data['filter'] = list[i].filter;
					}
					ykp.doAjax({
						url: list[that.i]['url'],
						method: "post",
						data: that.data,
						async: false,
						success: function(res) {
							var data = res.data.rows;
							var Arr = [];
							for(var j in data) {
								Arr.push({
									val: data[j][list[that.i]['colKey']],
									text: data[j][list[that.i]['colName']]
								});
							}

							listData[list[that.i]['field']] = Arr;
						}
					})
				}
			}

			var lw = option.lw || ""; //左边labe的宽度
			for(var i = 0; i < list.length; i++) {
				if(list[i].type == 'select') { //下拉框时
					listCont = "";
					content += `<div class="layui-form-item"><div class="layui-inline ${list[i].multiple ? " multiple" : ""}" style="display:${list[i].block ? "block" : ""}">
							<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
							<div class="${list[i].block ? "layui-input-block" : "layui-input-inline"}">
								<select  ${list[i].multiple ? "multiple" : ""}  class=""  name="${list[i].field}"  dataType="select" lay-verify="${list[i].verify || ""}" lay-search=""><option value="">${list[i].multiple ? "直接选择" : "直接选择或搜索选择"}</option>`
					if(!list[i].url) {
						for(var key in list[i].sOption) {
							listCont += `<option ${list[i].disabled ? 'disabled' : ""}  value="${key}">${list[i].sOption[key]}</option>`;
						}
					} else { //当为异步获取时
						for(var key in listData[list[i].field]) {
							listCont += `<option ${list[i].disabled ? 'disabled' : ""}  value="${listData[list[i].field][key]['val']}">${listData[list[i].field][key]['text']}</option>`;
						}
					}
					content += listCont;
					content += `</select>
							</div>
						</div></div>`;
				} else if(list[i].type == 'radio') { //单选框时
					listCont = "";
					content += `<div class="layui-form-item">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
						<div class="${list[i].block ? "layui-input-block" : "layui-input-inline"}">`
					for(var key in list[i].sOption) {
						listCont += `<input type="radio" name="${list[i].field}" ${list[i].disabled ? 'disabled' : ""}  dataType="radio" lay-verify="${list[i].verify || ""}" value="${key}" title="${list[i].sOption[key]}" >`;
					}
					content += listCont;
					content += `</div></div>`;
				} else if(list[i].type == 'checkbox') { //复选框时
					listCont = "";
					content += `<div class="layui-form-item" pane="">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
						<div class="${list[i].block ? "layui-input-block" : "layui-input-inline"}">`
					if(!list[i].url) {
						for(var key in list[i].sOption) {
							listCont += `<input type="checkbox" lay-skin="primary" name="${list[i].field+"["+key+"]"}" ${list[i].disabled ? 'disabled' : ""}  dataType="checkbox" lay-verify="${list[i].verify || ""}" value="${key}" title="${list[i].sOption[key]}">`;
						}
					} else { //当为异步获取时
						for(var key in listData[list[i].field]) {
							//							listCont += `<option ${list[i].disabled ? 'disabled' : ""}  value="${listData[list[i].field][key]['val']}">${listData[list[i].field][key]['text']}</option>`;
							listCont += `<input type="checkbox" lay-skin="primary" name="${list[i].field+"["+key+"]"}" ${list[i].disabled ? 'disabled' : ""}  dataType="checkbox" lay-verify="${list[i].verify || ""}" value="${listData[list[i].field][key]['val']}" title="${listData[list[i].field][key]['text']}">`;
						}
					}
					//					for(var key in list[i].sOption) {
					//						listCont += `<input type="checkbox" lay-skin="primary" name="${list[i].field+"["+key+"]"}" ${list[i].disabled ? 'disabled' : ""}  dataType="checkbox" lay-verify="${list[i].verify || ""}" value="${key}" title="${list[i].sOption[key]}">`;
					//					}
					content += listCont;
					content += `</div></div>`;
				} else if(list[i].type == 'time') { //时间插件时
					content += `<div class="layui-form-item">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
						<div class="${list[i].block ? "layui-input-block" : "layui-input-inline"}">
							<input type="text" lay-verify="${list[i].verify || ""}" ${list[i].disabled ? 'disabled' : ""}  name="${list[i].field}" id="${list[i].field.substring(list[i].field.indexOf('.')+1,list[i].field.length)}"  autocomplete="off" class="layui-input">
						</div>
					</div>`;
					timeArr.push({
						el: "#" + list[i].field.substring(list[i].field.indexOf('.') + 1, list[i].field.length)
					});
				} else if(list[i].type == 'upload') { //上传图片时
					content += `<div class="layui-form-item">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
						<div class="layui-input-block">
							<div class="layui-upload">
								<div class="layui-upload-list">
								<div class="imgBox">
									<img class="layui-upload-img" name="${list[i].field}" verify="${list[i].verify || ""}" dataType="img" id="${list[i].field.substring(list[i].field.indexOf('.') + 1, list[i].field.length)}1">
									<p id="demoText"></p>
								</div>
								</div>
								<button type="button" style="margin-top: 10px;" class="layui-btn" ${list[i].disabled ? 'disabled' : ""}  id="${list[i].field.substring(list[i].field.indexOf('.') + 1, list[i].field.length)}">上传图片</button>
							</div>
						</div>
					</div>`;

					//									<span class="fa fa-remove remove" style="position: absolute;top: 0px;left: 83px;padding: 2px;"><span>
					uploadArr.push({
						el: "#" + list[i].field.substring(list[i].field.indexOf('.') + 1, list[i].field.length),
						showImg: "#" + list[i].field.substring(list[i].field.indexOf('.') + 1, list[i].field.length) + 1,
						url: list[i].url
					}); //图片插件
					that.imgArr.push({
						field: list[i].field,
						el: "#" + list[i].field + 1,
						name: list[i].name
					}); //获取图片
				} else if(list[i].type == 'layedit') { //富文本
					content += `
					<div class="layui-form-item layui-form-text">
								<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"> <i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}</label>
								<div class="layui-input-block">
									<textarea id='textarea' name="${list[i].field}" dataType="textarea" style="width:800px;height:400px;visibility:hidden;">12123</textarea>
								</div>
							</div>`;
					that.layedit = true;
					//<textarea class="layui-textarea layui-hide" name="${list[i].field}" id="LAY_demo_editor"></textarea>
				} else if(list[i].type == 'citySelect') {
					content += `<div class="layui-form-item">
				    	<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}</label>
				    	<div class="layui-input-inline">
				    		<select name="P1" lay-filter="province" lay-search="">
				    			<option></option>
				    		</select>
				    	</div>
				    	<div class="layui-input-inline">
				    		<select name="C1" lay-filter="city" lay-search="">
				    			<option></option>
				    		</select>
				    	</div>
				    	<div class="layui-input-inline">
				    		<select name="A1" lay-filter="area" lay-search="">
				    			<option></option>
				    		</select>
				    	</div>
				    </div>`;
					citySel = list[i].city;
				} else { //普通输入框时
					content += `<div class="layui-form-item"><div class="layui-inline" style="display:${list[i].display ? "none" :'block'}">
						<label class="layui-form-label" style="${lw ? "width:" +lw+"px !important" : ""}"><i style="color: red;margin-right: 5px; display:${list[i].verify ? 'inline-block' :'none'}; ">*</i>${list[i].name}:</label>
						<div class="${list[i].block ? "layui-input-block" : "layui-input-inline"}">
							<input type="text" name="${list[i].field}" ${list[i].disabled ? 'disabled' : ""}    lay-verify="${list[i].verify || ""}" autocomplete="off" placeholder="请输入${list[i].name}" class="layui-input">
						</div></div></div>`;
				}
			}
			//提交 重置按钮
			content += `<div class="layui-form-item">
				<div class="layui-input-block">
					<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
					<button type="reset" class="layui-btn layui-btn-primary">重置</button>
				</div>
			</div>`;

			$('.layui-form').html(content);

			//富文本
			if(that.layedit) {
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('#textarea', {
						allowFileManager: true,
						width: '700px',
						heigth: '450px',
						fileManagerJson: 'http://www.my-haimai.com/api/api_common/upload_file'
					});
				});
			}
			//			$('.layui-form').find(".remove").click(function() {
			//				console.log($(this).prev().prev().attr('src'));
			//				ykp.doAjax({
			//					url:"",
			//					method:"post",
			//					data:{
			//						
			//					},
			//					success:function() {

			//					}
			//				})
			//			})
			hm.load(function(optionObj) {
				var form = optionObj.form,
					layer = optionObj.layer,
					layedit = optionObj.layedit,
					laydate = optionObj.laydate,
					public = optionObj.public,
					upload = optionObj.upload,
					it = this;
				//上传文件插件
				upload.render();
				//				form.render();
				if(citySel) {
					pca.init('select[name=P1]', 'select[name=C1]', 'select[name=A1]');
				}

				//加载时间插件
				public.dataRender(timeArr);

				for(var i in uploadArr) {
					public.upload({
						el: uploadArr[i].el,
						showImg: uploadArr[i].showImg,
						url: uploadArr[i].uploadUrl || '/api/api_common/upload_file',
						//http://hm-space.yunkepai.net/api/api_common/upload_file
					});
				}

				var result = public.getIframeParams(ykp.getSessionStorage('iframeId'));
				if(result.id) { //编辑的情况
					var data = {};
					data.filter = (option.selectKey.replace(/-/, '.') + "=" + result.id);

					//data.select = that.select;
					ykp.doAjax({
						url: that.option.infoUrl || "",
						method: 'post',
						data: data,
						success: function(res) {
							var data = res.data;
							if(citySel) {
								data.city = citySel;
							}
							//展示编辑详情
							public.showEditInfo({
								el: option.el || ".layui-form",
								data: data,
								editor: editor || ""
							});
						}
					})
				}

				//验证
				if(option.verifyData) {
					public.verifyData(option.verifyData);
				}

				//监听提交
				form.on('submit(demo1)', function(data) {
					var data = data.field;
					//					data[option.selectKey.replace(/-/,'.')] = result.id || 5;
					//					data.selectKey = option.selectKey.replace(/-/,'.');
					//					data.id = result.id || 5;
					//		console.log(data.selectKey);
					//处理form 表单返回多选框的数据
					for(var key in data) {
						if(/\[/.test(key)) {
							if(data[key.substring(0, key.indexOf('['))] == undefined) {
								data[key.substring(0, key.indexOf('['))] = data[key];
							} else {
								data[key.substring(0, key.indexOf('['))] += ',' + data[key];
							}
							delete data[key];
						}
					}

					//图片存在时     
					//1.判断当前图片是否必传   必传时图片为空提交提示错误     
					var status = false; //防止为空还继续上传
					if(that.imgArr.length != 0) {
						for(var i in that.imgArr) {
							if($(that.imgArr[i].el).attr("verify") == "required") {
								if($(that.imgArr[i].el).attr("src")) {
									data[that.imgArr[i].field] = $(that.imgArr[i].el).attr("src");
									status = true;
								} else {
									layer.msg(that.imgArr[i].name + '必须上传');
									return false;
								}
							} else {
								data[that.imgArr[i].field] = $(that.imgArr[i].el).attr("src");
								status = true;
							}
						}
					} else {
						status = true;
					}
					if(that.layedit) {
						console.log(editor.html());
					}

					//因添加编辑 不支持多表添加编辑   所以吧字符截取
					for(var key in data) { //key.repalce(//)
						if(key != undefined) {
							if(key.indexOf('-') != -1) {
								data[key.substr((key.indexOf('-') + 1), (key.length - 1))] = $.isArray(data[key]) ? data[key].join(',') : data[key];
								delete data[key];
							} else if(key.indexOf('.') != -1) {
								data[key.substr((key.indexOf('.') + 1), (key.length - 1))] = $.isArray(data[key]) ? data[key].join(',') : data[key];
								delete data[key];
							} else {
								data[key] = $.isArray(data[key]) ? data[key].join(',') : data[key];
							}
						} else {
							delete data[key];
						}
					}
					if(status) {
						
						hm.addList({
							data: data,
							url: that.option.addEditUrl || "",
							colModel: list,
							id: result.id,
							selectKey: option.selectKey.replace(/-/, '.')
						}, function(res) {
							if(res.code == 200) {
								if(result.id) {
									layer.msg('编辑成功');
								} else {
									layer.msg('添加成功');
								}
								var parmas = ykp.getSessionStorage('iframeId');
								self.parent.document.getElementById(parmas).src = that.option.prevUrl || "";
							} else {
								layer.msg('操作失败');
							}
						});
					}
					return false; //防止   提交刷新页面
				});
			})

		} else {
			console.error("请传入err参数");
		}
	},

	/**
	 * //删除批量删除
	 * @param {Object} option   data{id: '1,2,3',url}
	 */
	/**
	 * 
	 * @param {Object} option    data选中的值   params  ajax需要的阐述
	 * @param {Object} callback  回调
	 */
	plDel: function(option, callback) {
		if(option.data) {
			var ids; //存放删除id的
			var data = {};
			if(typeof option.data != 'string') {
				var idArr = [];
				var data = option.data;
				for(var j = 0; j < data.length; j++) {
					idArr.push(data[j][option.name ? option.name : "id"]);
				}
				if(option.params.special) {
					ids = idArr.join(',');
				}else {
					ids = option.primaryKey + ' in(' + idArr.join(',') + ')';
				}
				
			} else {
				//特殊情况时 加其他参数
				if(option.params.special) {
					ids = option.data;
				}else {
					ids = option.primaryKey + ' = ' + option.data;
				}
			}
			data.id = ids;
			if(option.params.other) {   //删除时添加额外的参数
				for(var key in option.params.other) {
					data[key] = option.params.other[key];
				}
			}
			ykp.doAjax({
				url: option.params.url,
				method: option.params.method || "get",
				data:data,
				success: function(res) {
					if(typeof callback == "function") {
						callback(res);
					}
				}
			})
		} else {
			console.error('请传入data参数');
		}
	},

	/**
	 * 
	 * @param {Object} option   url地址  data:{deme:123}  //添加的字段
	 */
	addList: function(option, callback) {
		if(option.url && option.data) {
			var data = {},
				modelInfo = {};
			//			for(var key in option.data) {
			//				if(option.data[key]) {
			//					data[key] = option.data[key];
			//				}
			//			}
			//			console.log(option.colModel);
			var col = option.colModel;
			var colModel = [];
			var name = "";
			for(var i = 0; i < col.length; i++) {
				if(col[i].field.indexOf('-') != -1) {
					colModel.push({
						name: col[i].field.substr((col[i].field.indexOf('-') + 1), (col[i].field.length - 1))
					});
				} else if(col[i].field.indexOf('.') != -1) {
					colModel.push({
						name: col[i].field.substr((col[i].field.indexOf('.') + 1), (col[i].field.length - 1))
					});
				} else {
					colModel.push({
						name: col[i].field
					});
				}
			}
			if(option.data.file == "" || option.data.file) {
				delete option.data.file;
			}
			if(!option.Default) {
				data.modelInfo = JSON.stringify(option.data);
			}else {
				for(var i in option.data) {
					if(i != 'undefined') {
						data[i] = option.data[i];
					}
				}
			}
			data.colModel = JSON.stringify(colModel);
			data.primaryKey = option.selectKey.indexOf('.') != -1 ? option.selectKey.substr((option.selectKey.indexOf('.') + 1), (option.selectKey.length - 1)) : option.selectKey;
			data.id = option.id;
			ykp.doAjax({
				url: option.url,
				method: option.method || "post",
				data: data,
				success: function(res) {
					if(typeof callback == "function") {
						callback(res);
					}
				}
			})
		} else {
			console.error("请传入正确的数据!");
		}
	},

	/**
	 * el 编辑显示节点   data:数据
	 * @param {Object} option  {el: 'demo',data:data}
	 */
	showDetails: function(option) {
		var text, data = option.data,
			Arr = option.statuArr;
		$(option.el).find('label[data-info],img[data-info]').each(function(i) {
			for(var k in data) {
				if($(this).attr('data-info') == k && !$(this).attr('data-arr')) {
					if($(this).attr('data-type') == "time") { //类型为时间时
						$(this).text(hm.getNowTime(data[k]));
					} else if($(this).attr('data-type') == "img") { //类型为图片时
						$(this).attr('src', data[k]);
					} else { //类型为文本时
						$(this).text(data[k] + $(this).attr('data-after'));
					}
				} else if($(this).attr('data-info') == k && $(this).attr('data-arr')) { //当存在数字代表名称时
					for(var j in Arr) {
						if($(this).attr('data-info') == Arr[j]['name']) { //判断datainfo值跟 arr数组name值相同时
							$(this).text(Arr[j].val[data[k]]); //给文本负对应的值
						}
					}
				}
			}
		})
	},

	//时间戳转时间
	getNowTime: function(time, statu) {
		if(time == "") {
			return "";
		}
		var time = new Date(time * 1000);
		if(statu) {
			time = (time.getFullYear() + "-" + (time.getMonth() + 1) + "-" + time.getDate() + " " + time.getHours() + ":" + time.getMinutes() + ":" + time.getMilliseconds());
		} else {
			time = (time.getFullYear() + "-" + (time.getMonth() + 1) + "-" + time.getDate());
		}

		return time;
	},
	//获取时间戳
	getTimeStamp: function(time) {
		return new Date(time) / 1000;
	},

	//权限
	getRole: function(option) {
		if(option) {
			var roles = hm.getLocalStorage('role');
			if(roles && roles.indexOf(option.role) == -1) {
				$(option.el).remove();
			}
		} else {
			console.error("请传入erro 参数");
		}
	},

	load: function(Fun) {
		layui.use(['form', 'laydate', 'layer', 'element', 'upload', 'public', 'table', 'carousel', 'layedit', 'laytpl'], function() {
			var element = layui.element;
			var layer = layui.layer;
			var public = layui.public;
			var table = layui.table;
			var upload = layui.upload;
			var laydate = layui.laydate;
			var carousel = layui.carousel;
			var layedit = layui.layedit;
			var form = layui.form;
			var laytpl = layui.laytpl;

			if(typeof Fun == 'function') {
				Fun({
					public: public,
					form: form,
					element: element,
					layer: layer,
					table: table,
					laydate: laydate,
					upload: upload,
					carousel: carousel,
					layedit: layedit,
					laytpl: laytpl
				});
			}
		})
	},

	//数据图

	getLineChart: function(option) {
		if(option.el && option.data) {

			var myChart = echarts.init(document.getElementById(option.el));
			var options = {
				title: {
					text: '对数轴示例',
					left: 'center'
				},
				tooltip: {
					trigger: 'item',
					formatter: '{a} <br/>{b} : {c}'
				},
				legend: {
					left: 'left',
					data: ['2的指数', '3的指数']
				},
				toolbox: {
					show: true,
					feature: {
						dataZoom: {
							yAxisIndex: 'none'
						},
						dataView: {
							readOnly: false
						},
						magicType: {
							type: ['line', 'bar']
						},
						restore: {},
						saveAsImage: {}
					}
				},
				xAxis: {
					type: 'category',
					name: 'x',
					splitLine: {
						show: false
					},
					data: ['一', '二', '三', '四', '五', '六', '七', '八', '九']
				},
				grid: {
					left: '3%',
					right: '4%',
					bottom: '3%',
					containLabel: true
				},
				yAxis: {
					type: 'log',
					name: 'y'
				},
				series: [{
						name: '3的指数',
						type: 'line',
						data: [1, 3, 9, 27, 81, 247, 741, 2223, 6669]
					},
					{
						name: '2的指数',
						type: 'line',
						data: [1, 2, 4, 8, 16, 32, 64, 128, 256]
					},
					{
						name: '1/2的指数',
						type: 'line',
						data: [1 / 2, 1 / 4, 1 / 8, 1 / 16, 1 / 32, 1 / 64, 1 / 128, 1 / 256, 1 / 512]
					}
				]
			};
			myChart.setOption(options);
		} else {
			console.error('参数错误')
		}
	},
	getCircularChart: function(option) {
		if(option.el && option.data) {
			var myChart = echarts.init(document.getElementById(option.el));
			var options = {
				title: {
					text: '某站点用户访问来源',
					subtext: '纯属虚构',
					x: 'center'
				},
				tooltip: {
					trigger: 'item',
					formatter: "{a} <br/>{b} : {c} ({d}%)"
				},
				legend: {
					orient: 'vertical',
					left: 'left',
					data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
				},
				series: [{
					name: '访问来源',
					type: 'pie',
					radius: '55%',
					center: ['50%', '60%'],
					data: [{
							value: 335,
							name: '直接访问'
						},
						{
							value: 310,
							name: '邮件营销'
						},
						{
							value: 234,
							name: '联盟广告'
						},
						{
							value: 135,
							name: '视频广告'
						},
						{
							value: 1548,
							name: '搜索引擎'
						}
					],
					itemStyle: {
						emphasis: {
							shadowBlur: 10,
							shadowOffsetX: 0,
							shadowColor: 'rgba(0, 0, 0, 0.5)'
						}
					}
				}]
			};
			myChart.setOption(options);
		} else {
			console.error('参数错误')
		}
	},

	//返回近几天的时间范围    //timeForMat(1)   timeForMat(7)  timeForMat(70)
	timeForMat: function(count) {
		// 拼接时间
		var time1 = new Date()
		time1.setTime(time1.getTime() - (24 * 60 * 60 * 1000))
		var Y1 = time1.getFullYear()
		var M1 = ((time1.getMonth() + 1) > 10 ? (time1.getMonth() + 1) : '0' + (time1.getMonth() + 1))
		var D1 = (time1.getDate() > 10 ? time1.getDate() : '0' + time1.getDate())
		var timer1 = Y1 + '-' + M1 + '-' + D1 // 当前时间
		var time2 = new Date()
		time2.setTime(time2.getTime() - (24 * 60 * 60 * 1000 * count))
		var Y2 = time2.getFullYear()
		var M2 = ((time2.getMonth() + 1) > 10 ? (time2.getMonth() + 1) : '0' + (time2.getMonth() + 1))
		var D2 = (time2.getDate() > 10 ? time2.getDate() : '0' + time2.getDate())
		var timer2 = Y2 + '-' + M2 + '-' + D2 // 之前的7天或者30天
		return {
			t1: timer1,
			t2: timer2
		}
	},
	setCookie: function(name, value, day) {
		var Days = day ? day : 30; //默认30天
		var exp = new Date();
		exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
		document.cookie = name + "=" + escape(value) + ";path=/;expires=" + exp.toGMTString();
	},
	getCookie: function(name) {
		var arrstr = document.cookie.split("; ");
		for(var i = 0; i < arrstr.length; i++) {
			var temp = arrstr[i].split("=");
			if(temp[0] == name)
				return unescape(temp[1]);
		}
	},
	delCookie: function(name) {
		var it = this;
		var date = new Date();
		date.setTime(date.getTime() - 10000);
		var cval = it.getCookie(name);
		if(cval != null)
			document.cookie = name + "=" + cval + "; expires=" + date.toGMTString();
	},
	setLocalStorage: function(name, value) {
		localStorage.setItem(name, value);
	},
	setLocalStorage_mul: function(option) {
		var option = option;
		for(var i in option) {
			localStorage.setItem(i, option[i]);
		}
	},
	getLocalStorage: function(name) {
		return localStorage.getItem(name);
	},
	delLocalStorage: function(name) {
		localStorage.removeItem(name);
	},
	clearLocalStorage: function() {
		localStorage.clear();
	},
	setSessionStorage: function(option) {
		var option = option;
		for(var i in option) {
			sessionStorage.setItem(i, option[i]);
		}
	},

	getSessionStorage: function(name, value) {
		return sessionStorage.getItem(name);
	},
	/**
	 * 获取节点ID
	 * @param nodes     选中的节点
	 * @returns {Array}
	 */
	getNodesId: function(nodes) {
		if(nodes.length == 0) {
			return;
		}
		var _nodes = [];
		for(var i in nodes) {
			if(nodes[i]['id']) {
				_nodes.push(nodes[i]['id']);
			}
		}
		_nodes = _nodes.join(',');
		return _nodes;
	},
	/**
	 * 转义html标签
	 * @param str           转义前字符串
	 * @returns {string}    转义后
	 */
	htmlDecodeByRegExp: function(str) {
		var s = "";
		if(str.length == 0)
			return "";
		s = str.replace(/&amp;/g, "&");
		s = s.replace(/&lt;/g, "<");
		s = s.replace(/&gt;/g, ">");
		s = s.replace(/&nbsp;/g, " ");
		s = s.replace(/&#39;/g, "\'");
		s = s.replace(/&quot;/g, "\"");
		return s;
	},

}