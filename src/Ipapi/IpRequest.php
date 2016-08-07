<?php

namespace Rypsx\Ipapi;

class IpRequest {

    /**
     * @var array
     */
    public $erreur = [];

    /**
     * @var string
     */
    public  $status;

    /**
     * @var string
     */
    public  $pays;

    /**
     * @var string
     */
    public $paysCode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $ville;

    /**
     * @var string
     */
    public $cp;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $isp;

    CONST STATUS_INVALIDE    = "La requête a générée une erreur";
    CONST PAYS_INVALIDE      = "Le pays est introuvable";
    CONST PAYSCODE_INVALIDE	 = "La code du pays est introuvable";
    CONST REGION_INVALIDE    = "La région est introuvable";
    CONST VILLE_INVALIDE     = "La ville est introuvable";
    CONST CP_INVALIDE        = "Le code postal est introuvable";
    CONST LATITUDE_INVALIDE  = "La latitude est introuvable";
    CONST LONGITUDE_INVALIDE = "La longitude est introuvable";
    CONST TIMEZONE_INVALIDE  = "La zone de temps est introuvable";
    CONST ISP_INVALIDE       = "Le fournisseur de services Internet est introuvable";

    /**
     * Construction de l'objet
     * @param array $valeurs
     */
    public function __construct($valeurs = [])
    {
        if (!empty($valeurs)) {
            $this->rechercheMethode($valeurs);
        }
    }

    /**
     * Méthode permettant d'assigner les valeurs spécifiées en paramètre aux attributs correspondants
     * @param  array $donnees
     * @return void
     */
    public function rechercheMethode($donnees)
    {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set'.ucfirst($attribut);
            if (is_callable([$this, $methode])) {
                $this->$methode($valeur);
            }
        }
    }

    /**
     * Assigner le statut
     * @param string $status
     */
    public function setStatus($status)
    {
        if (empty($status)) {
            $this->erreur[] = self::STATUS_INVALIDE;
        } else {
            $this->status = (string) $status;
        }
    }

    /**
     * Assigner le pays
     * @param string $pays
     */
    public function setPays($pays)
    {
        if (empty($pays)) {
        	$this->erreur[] = self::PAYS_INVALIDE;
        } else {
            $this->pays = (string) $pays;
        }
    }

    /**
     * Assigner le code du pays
     * @param string $paysCode
     */
    public function setPaysCode($paysCode)
    {
        if (empty($paysCode)) {
        	$this->erreur[] = self::PAYSCODE_INVALIDE;
        } else {
            $this->paysCode = (string) $paysCode;
        }
    }

    /**
     * Assigner la région
     * @param string $region
     */
    public function setregion($region)
    {
        if (empty($region)) {
        	$this->erreur[] = self::REGION_INVALIDE;
        } else {
            $this->region = (string) $region;
        }
    }

    /**
     * Assigner la ville
     * @param string $ville
     */
    public function setVille($ville)
    {
        if (empty($ville)) {
            $this->erreur[] = self::VILLE_INVALIDE;
        } else {
            $this->ville = (string) $ville;
        }
    }

    /**
     * Assigner le code postal
     * @param string $cp
     */
    public function setCp($cp)
    {
        if (empty($cp)) {
            $this->erreur[] = self::CP_INVALIDE;
        } else {
            $this->cp = (string) $cp;
        }
    }

    /**
     * Assigner la latitude
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        if (empty($latitude)) {
            $this->erreur[] = self::LATITUDE_INVALIDE;
        } else {
            $this->latitude = (string) $latitude;
        }
    }

    /**
     * Assigner la longitude
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        if (empty($longitude)) {
            $this->erreur[] = self::LONGITUDE_INVALIDE;
        } else {
            $this->longitude = (string) $longitude;
        }
    }

    /**
     * Assigner la timezone
     * @param string $timezone
     */
    public function setTimezone($timezone)
    {
        if (empty($timezone)) {
            $this->erreur[] = self::TIMEZONE_INVALIDE;
        } else {
            $this->timezone = (string) $timezone;
        }
    }

    /**
     * Assigner le fournisseur de services Internet
     * @param string $isp
     */
    public function setIsp($isp)
    {
        if (empty($isp)) {
            $this->erreur[] = self::ISP_INVALIDE;
        } else {
            $this->isp = (string) $isp;
        }
    }
}
