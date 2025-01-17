<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $commonValue;
    /**
     * 
     *
     * @var string
     */
    protected $commonDescription;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit
     */
    protected $creditLimit;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue
     */
    protected $providerValue;
    /**
     * 
     *
     * @return string
     */
    public function getCommonValue(): string
    {
        return $this->commonValue;
    }
    /**
     * 
     *
     * @param string $commonValue
     *
     * @return self
     */
    public function setCommonValue(string $commonValue): self
    {
        $this->initialized['commonValue'] = true;
        $this->commonValue = $commonValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommonDescription(): string
    {
        return $this->commonDescription;
    }
    /**
     * 
     *
     * @param string $commonDescription
     *
     * @return self
     */
    public function setCommonDescription(string $commonDescription): self
    {
        $this->initialized['commonDescription'] = true;
        $this->commonDescription = $commonDescription;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit
     */
    public function getCreditLimit(): GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit
    {
        return $this->creditLimit;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit $creditLimit): self
    {
        $this->initialized['creditLimit'] = true;
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue
     */
    public function getProviderValue(): GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue
    {
        return $this->providerValue;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue $providerValue
     *
     * @return self
     */
    public function setProviderValue(GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue $providerValue): self
    {
        $this->initialized['providerValue'] = true;
        $this->providerValue = $providerValue;
        return $this;
    }
}