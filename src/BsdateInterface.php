<?php

declare(strict_types=1);

namespace Shankhadev\Bsdate;

interface BsdateInterface
{
    /**
     * @param int $day
     *
     * @return string
     */
    public function getDayOfWeek(int $day): string;

    /**
     * @param string $m
     *
     * @return string
     */
    public function getEnglishMonth(int $m): string;

    /**
     * @param string $m
     *
     * @return string
     */
    public function getNepaliMonth(int $m): string;

    /**
     * @param int $yy
     * @param int $mm
     * @param int $dd
     *
     * @return bool
     */
    public function isInRangeEng(int $yy, int $mm, int $dd): bool;

    /**
     * @param int $yy
     * @param int $mm
     * @param int $dd
     *
     * @return bool
     */
    public function isInRangeNep(int $yy, int $mm, int $dd): bool;

    /**
     * @param int $year
     *
     * @return bool
     */
    public function isLeapyear(int $year): bool;

    /**
     * @param int $yy
     * @param int $mm
     * @param int $dd
     *
     * @return array
     */
    public function engToNep(int $yy, int $mm, int $dd): array;

    /**
     * [nepToEng description].
     *
     * @param int $yy
     * @param int $mm
     * @param int $dd
     *
     * @return array
     */
    public function nepToEng(int $yy, int $mm, int $dd): array;

    /**
     * @param string $str
     *
     * @return string
     */
    public function convertToNepaliNumber(int $str): string;
}
