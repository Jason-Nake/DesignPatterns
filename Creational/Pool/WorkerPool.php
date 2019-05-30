<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 3:03 PM
 */

class WorkerPool implements \Countable
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    /**
     * @return string
     */
    public function get(): string
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
    }

    /**
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if(isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count():int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

}
