<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 3:13 PM
 */

use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool  = new WorkerPool();
        $work1 = $pool->get();
        $work2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($work1, $work2);
    }
    public function testGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1,$pool);
        $this->assertSame($worker1,$worker2);
    }
}
