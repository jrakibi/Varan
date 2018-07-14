<?php

namespace DataBundle\Entity;

/**
 * Unblockday
 */
class Unblockday
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DoctorsBundle\Entity\Doctors
     */
    private $doctor;


    /**
     * Set date
     *
     * @param string $date
     *
     * @return Unblockday
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set doctor
     *
     * @param \DoctorsBundle\Entity\Doctors $doctor
     *
     * @return Unblockday
     */
    public function setDoctor(\DoctorsBundle\Entity\Doctors $doctor = null)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \DoctorsBundle\Entity\Doctors
     */
    public function getDoctor()
    {
        return $this->doctor;
    }
}
