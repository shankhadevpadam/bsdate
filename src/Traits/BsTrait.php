<?php

namespace Shankhadev\Bsdate\Traits;

use Shankhadev\Bsdate\Bsdate;

trait BsTrait
{
    /**
     * @var [string]
     */
    protected $date;

    /**
     * @param [string] $date
     *
     * @return [string]
     */
    public function getCreatedAtAttribute($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @param [string] $date
     *
     * @return [string]
     */
    public function getUpdatedAtAttribute($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @param [string] $format
     *
     * @return [string]
     */
    public function format($format = 'd F Y, l')
    {
        $bsdate = new Bsdate();

        $arr = explode('-', date('Y-m-d', strtotime($this->date)));

        $convertedDate = $bsdate->engToNep($arr[0], $arr[1], $arr[2]);

        return str_replace(['Y', 'm', 'd', 'l', 'F'], $convertedDate, $format);
    }
}
