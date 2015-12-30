<?php

namespace Illuminate\Foundation\Auth;

trait AuthenticatesAndRegistersUsers
{
    //AuthenticatesUsers 认证用户
    //RegistersUsers     注册用户
    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
    }
}
