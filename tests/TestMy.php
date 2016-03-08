<?php

class FooTest extends TestCase{
    public function testSomething(){
        $this->assertTrue(true);
    }

    public function testBasicExample(){
        $this->visit('/')   //一个GET请求
            ->see('wrapper')  //see 匹配页面任何内容或html标签ID,Class 等等
            ->click('Laravel 5 Blog');   //点击页面上的连接
            //->seePageIs('/about-us');   //连接连接到页面
    }
}