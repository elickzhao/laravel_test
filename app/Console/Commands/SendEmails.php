<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *命令名称
     * @var string
     */
    protected $signature = '
                            emails:send {user}
                            {--queue= : Whether the job should be queued}\';
                            ';
    //第二个是选项  以--开头为选项 而且有输入时的描述 :开始后为描述

    /**
     * The console command description.
     *命令描述
     * @var string
     */
    protected $description = '发送一封邮件给用户';

    //因为没有依赖的这个所以就先注释掉了
    //protected $drip;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //__construct(DripEmailer $drip)
        //通过依赖注入方法 引入一个类
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //然后在用类的方法执行某个操作
        // $this->drip->send(User::find($this->argument('user')));

//        // 获取指定选项...
//        $queueName = $this->option('queue');
//        // 获取所有选项...
//        $options = $this->option();
    }
}
