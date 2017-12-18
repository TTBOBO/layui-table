<?php

/*
 * 公共配置
 */

defined('BASEPATH') OR exit('No direct script access allowed');


//配置
$config['version'] = '1.0.1';
$config['sex_list'] = [ '1' => '男', '2' => '女'];
$config['default_avatar'] = '/resource/front/images/avatar/avatar.png';

$config['webinfo'] = array(
    'name' => '海脉后台管理系统', //示例: 云客派 - 新闻页
    'title' => '',
    'keywords' => '海脉空间,seo关键字设置',
    'description' => '海脉空间描述。。。',
    'author' => '海脉空间（深圳）有限公司',
    'weblogo' => '/resource/front/images/logo.png',
);

//oauth2验证
$config['oauth2_tables'] = array(
    'client_table' => 'oauth_clients',
    'access_token_table' => 'oauth_access_tokens',
    'refresh_token_table' => 'oauth_refresh_tokens',
    'code_table' => 'oauth_authorization_codes',
    'user_table' => 'oauth_users',
    'jwt_table' => 'oauth_jwt',
    'jti_table' => 'oauth_jti',
    'scope_table' => 'oauth_scopes',
    'public_key_table' => 'oauth_public_keys',
);
