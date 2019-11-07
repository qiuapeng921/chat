<?php

declare(strict_types=1);

namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 *
 * @method static getMessage(int $code)
 * @method static getHttpCode(int $code)
 */
class ApiCode extends AbstractConstants
{
    // TODO ----------------------通用验证100-500-------------------------
    /**
     * @HttpCode("1")
     * @Message("操作失败")
     */
    const OPERATION_FAIL = 1;
    /**
     * @HttpCode("2")
     * @Message("参数错误")
     */
    const PARAMS_ERROR = 2;


    // TODO ----------------------用户 1000-1500-------------------------
    /**
     * @HttpCode("1001")
     * @Message("验证码不匹配")
     */
    const AUTH_CODE_ERROR = 1001;
    /**
     * @HttpCode("1002")
     * @Message("验证码错误")
     */
    const AUTH_CODE_NOT_EXIST = 1002;
    /**
     * @HttpCode("1003")
     * @Message("此用户已存在")
     */
    const AUTH_USER_EXIST = 1003;
    /**
     * @HttpCode("1004")
     * @Message("注册失败")
     */
    const AUTH_REGISTER_ERR = 1004;
    /**
     * @HttpCode("1005")
     * @Message("账号不存在")
     */
    const AUTH_USER_NOT_EXIST = 1005;
    /**
     * @HttpCode("1006")
     * @Message("该账户已被锁定")
     */
    const AUTH_USER_LOCK = 1006;
    /**
     * @HttpCode("1007")
     * @Message("用户名密码不匹配")
     */
    const AUTH_PASSWD_ERR = 1007;
    /**
     * @HttpCode("1008")
     * @Message("已在别处登陆")
     */
    const AUTH_LOGIN_EXIST = 1008;
    /**
     * @HttpCode("1008")
     * @Message("密码修改失败")
     */
    const AUTH_PASSWD_EDIT_ERR = 1008;

    /**
     * @HttpCode("1020")
     * @Message("未登录")
     */
    const NOT_LOGIN = 1020;
    /**
     * @HttpCode("1021")
     * @Message("重新登录")
     */
    const RENEW_LOGIN = 1021;

    // TODO ----------------------申请状态码 2000-2200-------------------------

    /**
     * @HttpCode("2000")
     * @Message("不能添加自己为好友")
     */
    const CANT_ADD_SELF = 2000;
    // TODO ----------------------群组 2300-2400-------------------------
    /**
     * @HttpCode("2301")
     * @Message("群组不存在")
     */
    const GROUP_NOT_EXIST = 2301;
    /**
     * @HttpCode("2302")
     * @Message("群组创建失败")
     */
    const GROUP_CREATE_FAIL = 2302;


}
