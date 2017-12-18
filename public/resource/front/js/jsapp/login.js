defineClass('init', ykp, {
    init: function () {
        var it = this;
        it.login();
    },
    login: function () {
        $('#login-btn').click(function () {
            var postData = ykp.getFormData('#reg_cont');
            if (postData == false) {
                return false;
            }
            ykp.doAjax({
                url: '/api/api_user/login',
                data: postData,
                method: 'post',
                success: function (res) {
                    location.href = '/';
                }
            });
        });
    },
});



