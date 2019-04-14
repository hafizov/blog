<?php
/**
 * Created by PhpStorm.
 * User: abdullo
 * Date: 2/5/19
 * Time: 5:41 PM
 */

namespace App\Acme\Solid;

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

interface ManagableIntrface
{
    public function beManaged();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableIntrface
{

    public function work()
    {
        return 'human working';
    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}


class AndroidWorker implements WorkableInterface, ManagableIntrface
{
    public function work()
    {
        return 'android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}


class Captain
{
    public function manage(ManagableIntrface $worker)
    {
        $worker->beManaged();
     }
}
