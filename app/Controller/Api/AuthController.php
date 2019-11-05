<?php
/**
 * Created by PhpStorm.
 * User: phpstorm
 * Date: 2019/10/8
 * Time: 10:03
 */

namespace App\Controller\Api;

use App\Controller\AbstractController;
use App\Request\Auth\RegisterRequest;
use App\Request\Auth\LoginRequest;
use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AuthController
 * @package App\Controller\Api
 */
class AuthController extends AbstractController
{
    /**
     * @Inject()
     * @var UserService
     */
    private $userService;

    /**
     * 用户登录
     * @param LoginRequest $request
     * @return ResponseInterface
     */
    public function login(LoginRequest $request)
    {
        dd($request->all());
        $response = $this->userService->handleLogin($request->getParsedBody());
        return $this->success($response);
    }

    /**
     * @param RegisterRequest $request
     * @return ResponseInterface
     */
    public function register(RegisterRequest $request)
    {
        $cacheCode = redis()->get($request['phone']);
        if (!$cacheCode) {
            return $this->error("验证码无效");
        }
        if ($cacheCode != $request['code']) {
            return $this->error("验证码不匹配");
        }
        $response = $this->userService->handleRegister($request);
        return $this->success($response);
    }

    /**
     * 用户退出
     * @return ResponseInterface
     */
    public function logout()
    {
        $userId = getContext('userId');
        redis()->hDel('userToken', (string)$userId);
        return $this->success();
    }

    /**
     * @param RegisterRequest $request
     * @return ResponseInterface
     */
    public function retrieve(RegisterRequest $request)
    {
        $response = $this->userService->updatePassword($request);
        return $this->success($response);
    }
}