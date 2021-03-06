<?php
/**
 * Created by PhpStorm.
 * User: phpstorm
 * Date: 2019/10/8
 * Time: 13:40
 */

use App\Controller\Api\ApplyController;
use App\Controller\Api\AuthController;
use App\Controller\Api\FriendArticleController;
use App\Controller\Api\FriendController;
use App\Controller\Api\GroupController;
use App\Controller\Api\RoomController;
use App\Controller\Api\UserController;
use Hyperf\HttpServer\Router\Router;

// 登陆
Router::post('auth/login', [AuthController::class, 'login']);
// 扫码登陆
Router::post('auth/scanLogin', [AuthController::class, 'scanLogin']);
// 注册
Router::post('auth/register', [AuthController::class, 'register']);
// 退出
Router::post('auth/logout', [AuthController::class, 'logout']);
// 忘记密码重置
Router::post('auth/retrieve', [AuthController::class, 'retrieve']);

// 用户详情
Router::post('user/info', [UserController::class, 'info']);
// 更新资料
Router::post('user/updateUserInfo', [UserController::class, 'updateUserInfo']);


// 好友添加申请
Router::post('apply/create', [ApplyController::class, 'create']);
// 申请记录
Router::post('apply/record', [ApplyController::class, 'record']);
// 好友添加审核
Router::post('apply/review', [ApplyController::class, 'review']);
// 好友列表
Router::post('friend/list', [FriendController::class, 'list']);
// 好友资料
Router::post('friend/info', [FriendController::class, 'info']);
// 搜索用户
Router::post('friend/search', [FriendController::class, 'search']);
// 删除用户
Router::post('friend/delete', [FriendController::class, 'delete']);


// 创建房间
Router::post('room/create', [RoomController::class, 'create']);
// 聊天记录
Router::post('room/messageRecord', [RoomController::class, 'messageRecord']);
// 删除房间
Router::post('room/delete', [RoomController::class, 'delete']);


// 群组列表
Router::post('group/list', [GroupController::class, 'list']);
// 添加群组
Router::post('group/create', [GroupController::class, 'create']);
// 修改群组
Router::post('group/update', [GroupController::class, 'update']);
// 删除群组
Router::post('group/delete', [GroupController::class, 'delete']);
// 申请加入
Router::post('group/join', [GroupController::class, 'join']);
// 邀请入群
Router::post('group/invite', [GroupController::class, 'invite']);
// 编辑群昵称
Router::post('group/updateNick', [GroupController::class, 'updateNick']);
// 获取所有群组成员
Router::post('group/memberList', [GroupController::class, 'memberList']);
// 获取所有群组成员
Router::post('group/messageRecord', [GroupController::class, 'messageRecord']);


//朋友圈列表
Router::post("article/list",[FriendArticleController::class,"articleList"]);
//发布说说
Router::post("article/push",[FriendArticleController::class,"pushArticle"]);
//评论说说
Router::post("article/comment",[FriendArticleController::class,"commentArticle"]);