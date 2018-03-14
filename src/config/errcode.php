<?php
/**
 * 统一错误码
 * 20502
 * 2                            05           02
 * 服务级错误（1为系统级错误）   服务模块代码  具体错误代码
 *
 * @author  songmw<imphp@qq.com>
 * @since   2018.03.10
 */

/**
 * 系统级别错误，代码 1
 */
$system = [
    'success'                 => [0, 'success', '请求成功'],
    'system_error'            => [10001, 'system error', '系统错误'],
    'service_unavailable'     => [10002, 'service unavailable', '服务暂停'],
    'remote_service_error'    => [10003, 'Remote service error', '远程服务错误'],
    'ip_limit'                => [10004, 'IP limit', 'IP限制不能请求该资源'],
    'permission_denied'       => [10005, 'Permission denied, need a high level appkey', '该资源需要appkey拥有授权'],
    'appkey_missing'          => [10006, 'Source paramter (appkey) is missing', '缺少source (appkey) 参数'],
    'unsupport_mediatype'     => [10007, 'Unsupport mediatype (%s)', '不支持的MediaType (%s)'],
    'param_error'             => [10008, 'Param error, see doc for more info', '参数错误，请参考API文档'],
    'system_busy'             => [10009, 'Too many pending tasks, system is busy', '任务过多，系统繁忙'],
    'job_expired'             => [10010, 'Job expired', '任务超时'],
    'rpc_error'               => [10011, 'RPC error', 'RPC错误'],
    'illegal_request'         => [10012, 'Illegal request', '非法请求'],
    'invalid_user'            => [10013, 'Invalid user', '不合法的用户'],
    'api_permissions'         => [10014, 'Insufficient app permissions', '应用的接口访问权限受限'],
    'param_miss'              => [10016, 'Miss required parameter (%s) , see doc for more info', '缺失必选参数 (%s)，请参考API文档'],
    'param_invalid'           => [10017, "Parameter (%s)'s value invalid, expect (%s) , but get (%s) , see doc for more info", '参数值非法，需为 (%s)，实际为 (%s)，请参考API文档'],
    'request_body_over_limit' => [10018, 'Request body length over limit', '请求长度超过限制'],
    'api_not_found'           => [10020, 'Request api not found', '接口不存在'],
    'method_not_suported'     => [10021, 'HTTP method is not suported for this request', '请求的HTTP METHOD不支持，请检查是否选择了正确的POST/GET方式'],
    'ip_out_of_rate_limit'    => [10022, 'IP requests out of rate limit', 'IP请求频次超过上限'],
    'user_out_of_rate_limit'  => [10023, 'User requests out of rate limit', '用户请求频次超过上限'],
    'unknow_error'            => [10024, 'Unknow Error', '未知错误'],
    'unknow_errcode'          => [10025, 'Unknow ErrorCode', '未知错误码'],
    'sign_error'              => [10026, 'Sign Error', '签名错误'],
    'sign_lapse'              => [10027, 'Sign Lapse', '签名失效'],
    'sign_repeat'             => [10028, 'Sign Repeat', '签名重复'],
    'version_error'           => [10029, 'Version Error', '版本号错误'],
    'invalid_status'          => [10030, 'Invalid status', '无效状态码'],
];

/**
 * 服务级别错误，代码 2
 */
$service = [
    
    // 通用服务 00 预留01
    'uid_is_null'                => [20001, 'Uid parameter is null', 'Uid参数为空'],
    'user_not_exists'            => [20002, 'User does not exists', '用户不存在'],
    'unsupported_image_type'     => [20003, 'Unsupported image type, only suport JPG, GIF, PNG', '不支持的图片类型，仅仅支持JPG、GIF、PNG'],
    'image_size_too_large'       => [20004, 'Image size too large', '图片太大'],
    'content_is_null'            => [20005, 'Content is null', '内容为空'],
    'text_too_long'              => [20006, 'Text too long', '输入文字太长'],
    'account_ip_illgal'          => [20007, 'Account or ip or app is illgal, can not continue', '账号、IP或应用非法，暂时无法完成此操作'],
    'out_of_limit'               => [20008, 'Out of limit', '发布内容过于频繁'],
    'repeat_content'             => [20009, 'Repeat content', '提交相似的信息'],
    'your_ip_unruly'             => [20010, "Your ip's behave in a comic boisterous or unruly manner", '此IP地址上的行为异常'],
    'test_and_verify'            => [20011, 'Test and verify', '需要验证码'],

    // 用户服务 02
    'auth_faild'                 => [20201, 'Auth faild', '认证失败'],
    'username_or_password_error' => [20202, 'Username or password error', '用户名或密码不正确'],
    'auth_out_of_rate_limit'     => [20203, 'Username and pwd auth out of rate limit', '用户名密码认证超过请求限制'],

    // 短信服务 07
    'invalid_mobile'             => [20701, 'Invalid mobile', '非法手机号'],
    'mobile_count_over_limit'    => [20702, 'Mobile count over limit', '手机号码数量超过限制'],
    'business_limit_control'     => [20703, 'Business limit control', '业务限流'],

];

return $system + $service;