<?php
namespace App\Models;

use InvalidArgumentException;

/**
 * Immutable Class MonthYear
 *
 * Represents a date with only Month and Year.
 * It does not hold any timezone information.
 */
class MonthYear {
    /** @var string[] */
    private static $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];

    /** @var int */
    private $month;

    /** @var int */
    private $year;

    /**
     * SimpleDate constructor.
     * @param int $month
     * @param int $year
     */
    public function __construct(int $month, int $year) {
        if (($month < 1) || ($month > 12)) {
            throw new InvalidArgumentException('Invalid month: '.$month);
        }
        if (($year < 1000) || ($year > 9999)) {
            throw new InvalidArgumentException('Invalid year: '.$year);
        }
        $this->month = $month;
        $this->year = $year;
    }

    /**
     * Compares two dates.
     * @param MonthYear $a
     * @param MonthYear $b
     * @return int Returns -1 (A<B), 0 (A=B) or 1 (A>B).
     */
    public static function compare(MonthYear $a, MonthYear $b) {
        $result = $a->year <=> $b->year;
        if ($result != 0) {
            return $result;
        }
        return $a->month <=> $b->month;
    }

    /**
     * @return string Short date format in English.
     */
    public function __toString() : string {
        return self::$months[$this->month].', '.$this->year;
    }
}
