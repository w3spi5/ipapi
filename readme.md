IP-API.com PHP API
=======================

[![Latest Stable Version](https://poser.pugx.org/rypsx/ipapi/v/stable?format=flat-square)](https://packagist.org/packages/rypsx/ipapi) [![Total Downloads](https://poser.pugx.org/rypsx/ipapi/downloads?format=flat-square)](https://packagist.org/packages/rypsx/ipapi) [![License](https://poser.pugx.org/rypsx/ipapi/license?format=flat-square)](https://packagist.org/packages/rypsx/ipapi) [![Monthly Downloads](https://poser.pugx.org/rypsx/ipapi/d/monthly?format=flat-square)](https://packagist.org/packages/rypsx/ipapi)[![SensioLabsInsight](https://insight.sensiolabs.com/projects/064f9554-8e43-46f9-81bc-cd0a54002edc/mini.png)](https://insight.sensiolabs.com/projects/064f9554-8e43-46f9-81bc-cd0a54002edc)

### [Access to English version](#english)

Ce package vous permet de récupérer facilement les informations sur une adresse IP renseignée.
Ce développement parse le XML.

**ATTENTION : L'UTILISATION GRATUITE PERMET DE REALISER 150 REQUETES PAR MINUTE !**

## [Comment utliser ce package](#usage)

## Requis

PHP5 et **[Carbon](https://github.com/briannesbitt/carbon)**

## Composer

Je vous conseille vivement l'utilisation de **[Composer](https://getcomposer.org/)**.
Vous pouvez ajouter ce package en tapant la commande suivante dans votre terminal :

    composer require rypsx/ipapi

Ou en éditant le fichier `composer.json`, tel que :

    {
    "require": {
      "rypsx/ipapi": "^1.0"
    }

## [Voir un exemple de retour](#exretour)

## English Version <a id="english"></a> 

This package allows you to easily retrieve information about an IP address filled.
This development parse XML.

**WARNING: FREE USE PERMITS TO MAKE 150 QUERIES PER MINUTE ONLY !**

## Usage Example / Utilisation <a id="usage"></a>

```php
<?php
	use Rypsx\Ipapi\Ipapi;

	require __DIR__ . '/../vendor/autoload.php';

	try {
	    $ipapi = new Ipapi('208.80.152.201');
	} catch (\Exception $e) {
	    print $e->getMessage();
	}

	var_dump($ipapi);
?>
```

## Required

PHP5 and **[Carbon](https://github.com/briannesbitt/carbon)**


## Composer

I highly recommend the use of **[Composer](https://getcomposer.org/)**.
You can add this package by typing the following command in your terminal:

    composer require rypsx/ipapi

Or by editing the `composer.json` file, such as:

    {
    "require": {
      "rypsx/ipapi": "^1.0"
    }

## Packagist

**[Packagist Repo URL](https://packagist.org/packages/rypsx/ipapi)**

## Output example / Example de retour  <a id="exretour"></a>

The following IP adress was taken from **[IP-API.COM](http://ip-api.com/docs/api:xml)** website

```php
object(Rypsx\Ipapi\Ipapi)[3]
  public 'erreur' => null
  public 'date' => string '2016-08-07 12:01:16' (length=19)
  public 'ipAdr' => string '208.80.152.201' (length=14)
  public 'ip2long' => int -800024375
  public 'ipapi' => 
    object(Rypsx\Ipapi\IpRequest)[4]
      public 'erreur' => 
        array (size=0)
          empty
      public 'status' => string 'success' (length=7)
      public 'pays' => string 'United States' (length=13)
      public 'paysCode' => string 'US' (length=2)
      public 'region' => string 'California' (length=10)
      public 'ville' => string 'San Francisco' (length=13)
      public 'cp' => string '94105' (length=5)
      public 'latitude' => string '37.7898' (length=7)
      public 'longitude' => string '-122.3942' (length=9)
      public 'timezone' => string 'America/Los_Angeles' (length=19)
      public 'isp' => string 'Wikimedia Foundation' (length=20)
```

## License

**The MIT License (MIT)**

**Copyright (c) 2016 RypsX Dev**

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.