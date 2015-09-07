<?php
namespace cronentry;

use cronentry\asset\AssetCollection;

/**
 * User: kapil
 * Date: 07/09/15
 * Time: 12:26 PM
 */
class CronEntry
{
    /** @var  AssetCollection $month */
    private $minutes;
    /** @var  AssetCollection $hours */
    private $hours;
    /** @var  AssetCollection $months */
    private $months;
    /** @var  AssetCollection $daysOfWeek */
    private $daysOfWeek;
    /** @var  AssetCollection $daysOfMonth */
    private $daysOfMonth;
    /** @var  String $command */
    private $command;

    public function __construct($entry)
    {
        //TODO: Create cron entry from existing crontab entry.
    }

    public function toString()
    {
        return $this->minutes->toString() . ' ' .
                $this->hours->toString() . ' ' .
                $this->months->toString() . ' ' .
                $this->getDaysOfWeek()->toString() . ' ' .
                $this->getDaysOfMonth()->toString() . ' ' .
                $this->getCommand();
    }

    /**
     * @return AssetCollection
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    public function getMinutesAsString()
    {
        //TODO: Return minutes as string.
    }

    /**
     * @param AssetCollection $minutes
     */
    public function setMinutes(AssetCollection $minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * @return AssetCollection
     */
    public function getHours()
    {
        return $this->hours;
    }

    public function getHoursAsString()
    {
        //TODO: Return hours as string.
    }

    /**
     * @param AssetCollection $hours
     */
    public function setHours(AssetCollection $hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return AssetCollection
     */
    public function getMonths()
    {
        return $this->months;
    }

    public function getMonthsAsString()
    {
        //TODO: Return Months as string.
    }

    /**
     * @param AssetCollection $months
     */
    public function setMonths(AssetCollection $months)
    {
        $this->months = $months;
    }

    /**
     * @return AssetCollection
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    public function getDOWAsString()
    {
        //TODO: Return dow as string.
    }

    /**
     * @param AssetCollection $daysOfWeek
     */
    public function setDaysOfWeek(AssetCollection $daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;
    }

    /**
     * @return AssetCollection
     */
    public function getDaysOfMonth()
    {
        return $this->daysOfMonth;
    }

    public function getDOMAsString()
    {
        //TODO: Return DOM as string.
    }

    /**
     * @param AssetCollection $daysOfMonth
     */
    public function setDaysOfMonth(AssetCollection $daysOfMonth)
    {
        $this->daysOfMonth = $daysOfMonth;
    }

    /**
     * @return String
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param String $command
     */
    public function setCommand(AssetCollection $command)
    {
        $this->command = $command;
    }
}