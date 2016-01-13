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
                            email:send {user}
                            {--queue= : Whether the job should be queued}\';
                            ';
    //第二个是选项  以--开头为选项 而且有输入时的描述 :开始后为描述

    /**
     * The console command description.
     *命令描述 帮助说明里显示 php artisan -h
     * @var string
     */
    protected $description = 'send mail to user';

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
//        $name = $this->ask('what is your name');
//        echo $name;

        $userId = $this->argument('user');
        echo $userId;

        if ($this->confirm('Do you wish to continue? [y|N]')) {
            echo "Y";
        }else{
            echo "N";
        }

        //在windows下也不好使
        $this->info('Display this on the screen');

        //自动完成功能 不过在windows下不好用
//        $name1 = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);
//        echo $name1;

        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], false);
        echo $name;

        //然后在用类的方法执行某个操作
        // $this->drip->send(User::find($this->argument('user')));

//        // 获取指定选项...
//        $queueName = $this->option('queue');
//        // 获取所有选项...
//        $options = $this->option();
    }
}
