<?php

namespace Proxies\__CG__\DoctorsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Doctors extends \DoctorsBundle\Entity\Doctors implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'id', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'firstName', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'lastName', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'birthday', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'GSM', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'title', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'professionalStatement', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'image', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'imageFile', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'updatedAt', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'settings', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'education', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'hopitaux', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'certifications', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'invoices', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'location', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'specialities', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'review', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'question', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'comment'];
        }

        return ['__isInitialized__', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'id', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'firstName', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'lastName', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'birthday', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'GSM', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'title', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'professionalStatement', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'image', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'imageFile', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'updatedAt', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'settings', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'education', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'hopitaux', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'certifications', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'invoices', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'location', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'specialities', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'review', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'question', '' . "\0" . 'DoctorsBundle\\Entity\\Doctors' . "\0" . 'comment'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Doctors $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setGSM($gSM)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGSM', [$gSM]);

        return parent::setGSM($gSM);
    }

    /**
     * {@inheritDoc}
     */
    public function getGSM()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGSM', []);

        return parent::getGSM();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfessionalStatement($professionalStatement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfessionalStatement', [$professionalStatement]);

        return parent::setProfessionalStatement($professionalStatement);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfessionalStatement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfessionalStatement', []);

        return parent::getProfessionalStatement();
    }

    /**
     * {@inheritDoc}
     */
    public function addEducation(\DoctorsBundle\Entity\Educations $education)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEducation', [$education]);

        return parent::addEducation($education);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEducation(\DoctorsBundle\Entity\Educations $education)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEducation', [$education]);

        return parent::removeEducation($education);
    }

    /**
     * {@inheritDoc}
     */
    public function getEducation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEducation', []);

        return parent::getEducation();
    }

    /**
     * {@inheritDoc}
     */
    public function addHopitaux(\AppBundle\Entity\hopitaux $hopitaux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHopitaux', [$hopitaux]);

        return parent::addHopitaux($hopitaux);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHopitaux(\AppBundle\Entity\hopitaux $hopitaux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHopitaux', [$hopitaux]);

        return parent::removeHopitaux($hopitaux);
    }

    /**
     * {@inheritDoc}
     */
    public function getHopitaux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHopitaux', []);

        return parent::getHopitaux();
    }

    /**
     * {@inheritDoc}
     */
    public function addCertification(\DoctorsBundle\Entity\Certifications $certification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCertification', [$certification]);

        return parent::addCertification($certification);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCertification(\DoctorsBundle\Entity\Certifications $certification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCertification', [$certification]);

        return parent::removeCertification($certification);
    }

    /**
     * {@inheritDoc}
     */
    public function getCertifications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCertifications', []);

        return parent::getCertifications();
    }

    /**
     * {@inheritDoc}
     */
    public function addSpeciality(\DoctorsBundle\Entity\Specialities $speciality)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSpeciality', [$speciality]);

        return parent::addSpeciality($speciality);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSpeciality(\DoctorsBundle\Entity\Specialities $speciality)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSpeciality', [$speciality]);

        return parent::removeSpeciality($speciality);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialities', []);

        return parent::getSpecialities();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addLocation(\DoctorsBundle\Entity\Locations $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLocation', [$location]);

        return parent::addLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLocation(\DoctorsBundle\Entity\Locations $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLocation', [$location]);

        return parent::removeLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function addInvoice(\DoctorsBundle\Entity\Invoices $invoice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInvoice', [$invoice]);

        return parent::addInvoice($invoice);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInvoice(\DoctorsBundle\Entity\Invoices $invoice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInvoice', [$invoice]);

        return parent::removeInvoice($invoice);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoices', []);

        return parent::getInvoices();
    }

    /**
     * {@inheritDoc}
     */
    public function addSetting(\AppointmentsBundle\Entity\Settings $setting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSetting', [$setting]);

        return parent::addSetting($setting);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSetting(\AppointmentsBundle\Entity\Settings $setting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSetting', [$setting]);

        return parent::removeSetting($setting);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSettings', []);

        return parent::getSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setSettings(\AppointmentsBundle\Entity\Settings $settings = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSettings', [$settings]);

        return parent::setSettings($settings);
    }

    /**
     * {@inheritDoc}
     */
    public function addReview(\DoctorsBundle\Entity\Reviews $review)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReview', [$review]);

        return parent::addReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReview(\DoctorsBundle\Entity\Reviews $review)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReview', [$review]);

        return parent::removeReview($review);
    }

    /**
     * {@inheritDoc}
     */
    public function getReview()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReview', []);

        return parent::getReview();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestion(\DoctorsBundle\Entity\Questions $question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuestion', [$question]);

        return parent::addQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestion(\DoctorsBundle\Entity\Questions $question)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuestion', [$question]);

        return parent::removeQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\DoctorsBundle\Entity\Comments $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\DoctorsBundle\Entity\Comments $omment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$omment]);

        return parent::removeComment($omment);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
