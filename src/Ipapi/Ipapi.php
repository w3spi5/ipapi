<?php

namespace Rypsx\Ipapi;

use Carbon\Carbon;

class Ipapi
{
    /**
     * @var string
     */
    public $erreur;

    /**
     * @var Carbon
     */
    public $date;

    /**
     * @var string
     */
    public $ipAdr;

    /**
     * @var string
     */
    public $ip2long;

    /**
     * @var Object
     */
    public $ipapi;

    CONST IP_INVALIDE  = "L'adresse IP renseignée est invalide";
    CONST URL_INVALIDE = "Impossible d'obtenir les informations. Veuillez réessayer plus tard.";

    /**
     * Instance de l'objet Ipapi
     * @return void
     */
    public function __construct($ipAdr = null, $raw = false)
    {
        $this->setdate();
        $this->setIpAdr($ipAdr);
        $this->obtenirInfosIp();
    }

    /**
     * Récupère les informations sur l'adresse IP renseignée
     * @param string $ipAdr
     */
    private function setIpAdr($ipAdr)
    {
        if (!is_string($ipAdr) || empty($ipAdr) || is_null($ipAdr)) {
            $this->erreur = self::IP_INVALIDE;
        } else {
            $this->ipAdr = $ipAdr;
            $this->ip2long = (int) ip2long($ipAdr);
        }
    }

    /**
     * Définit la date actuelle
     * @param  string $date
     */
    private function setDate()
    {
        $time = Carbon::now();
        $this->date = $time->toDateTimeString();
    }

    /**
     * Formate et retourne les résultats.
     * ATTENTION A NE PAS DEPASSER 150 REQUETES PAR MINUTE AVEC UN ACCES GRATUIT !
     * @param  string $ipAdr
     * @return void
     */
    private function obtenirInfosIp()
    {
        $infos = array();
        try {
            $xml = simplexml_load_file('http://ip-api.com/xml/'.$this->ipAdr);
            if ((string) $xml->status == 'fail') {
                $this->erreur = self::IP_INVALIDE;
            } else {
                $this->ipapi = new IpRequest(
                    [
                        'status'    => $xml->status,
                        'pays'      => $xml->country,
                        'paysCode'  => $xml->countryCode,
                        'region'    => $xml->regionName,
                        'ville'     => $xml->city,
                        'cp'        => $xml->zip,
                        'latitude'  => $xml->lat,
                        'longitude' => $xml->lon,
                        'timezone'  => $xml->timezone,
                        'isp'       => $xml->isp
                    ]
                );
            }
        } catch (\Exception $e) {
            $this->erreur = $e->getMessage();
        }
        
    }
}
