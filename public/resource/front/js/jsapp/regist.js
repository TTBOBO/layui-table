defineClass('init', ykp, {
    init: function () {
        var it = this;
        it.register();
    },
    register: function () {
        $('#reg_btn').click(function () {
            var postData = ykp.getFormData('#reg_cont');
            console.log(postData);
            if (postData == false) {
                return false;
            }
            ykp.doAjax({
                url: '/api/api_user/regist',
                data: postData,
                method: 'post',
                success: function (res) {
                   // location.href = '/';
                }
            });
        });
        $(".register").one("click", function(){
            //倒计时
        	 var time=60;
        	 var str="";
        	 var timer=setInterval(function(){
        	 	time--;
        	 	str=time+' 	s'
        	 	if(time<=0){
        	 		str="再获取一次";
        	 		clearInterval(timer);
        	 	};
        	 
        	 	$(".register").html(str);
        	 },1000)
        });
         $("#validateForm").validate();
         jQuery.validator.addMethod("phone", function(value, element) {     
        var tel = /^1\d{10}$/;  
    return this.optional(element) || (tel.test(value));  
}, "请输入正确的手机号码");
        
     
    },
});



