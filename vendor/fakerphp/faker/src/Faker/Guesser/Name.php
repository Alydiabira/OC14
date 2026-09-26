<?php

namespace Faker\Guesser;

use Faker\Provider\Base;

class Name
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param string   $name
     * @param int|null $size Length of field, if known
     *
     * @return callable|null
     */
    public function guessFormat($name, $size = null)
    {
        $name = Base::toLower($name);
        $generator = $this->generator;

        if (preg_match('/^is[_A-Z]/', $name)) {
            return static function () use ($generator) {
<<<<<<< HEAD
                return $generator->boolean;
=======
                return $generator->boolean();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            };
        }

        if (preg_match('/(_a|A)t$/', $name)) {
            return static function () use ($generator) {
<<<<<<< HEAD
                return $generator->dateTime;
=======
                return $generator->dateTime();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            };
        }

        switch (str_replace('_', '', $name)) {
            case 'firstname':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->firstName;
=======
                    return $generator->firstName();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'lastname':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->lastName;
=======
                    return $generator->lastName();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'username':
            case 'login':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->userName;
=======
                    return $generator->userName();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'email':
            case 'emailaddress':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->email;
=======
                    return $generator->email();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'phonenumber':
            case 'phone':
            case 'telephone':
            case 'telnumber':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->phoneNumber;
=======
                    return $generator->phoneNumber();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'address':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->address;
=======
                    return $generator->address();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'city':
            case 'town':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->city;
=======
                    return $generator->city();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'streetaddress':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->streetAddress;
=======
                    return $generator->streetAddress();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'postcode':
            case 'zipcode':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->postcode;
=======
                    return $generator->postcode();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'state':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->state;
=======
                    return $generator->state();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'county':
                if ($this->generator->locale == 'en_US') {
                    return static function () use ($generator) {
<<<<<<< HEAD
                        return sprintf('%s County', $generator->city);
=======
                        return sprintf('%s County', $generator->city());
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    };
                }

                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->state;
=======
                    return $generator->state();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'country':
                switch ($size) {
                    case 2:
                        return static function () use ($generator) {
<<<<<<< HEAD
                            return $generator->countryCode;
=======
                            return $generator->countryCode();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        };

                    case 3:
                        return static function () use ($generator) {
<<<<<<< HEAD
                            return $generator->countryISOAlpha3;
=======
                            return $generator->countryISOAlpha3();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        };

                    case 5:
                    case 6:
                        return static function () use ($generator) {
<<<<<<< HEAD
                            return $generator->locale;
=======
                            return $generator->locale();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        };

                    default:
                        return static function () use ($generator) {
<<<<<<< HEAD
                            return $generator->country;
=======
                            return $generator->country();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                        };
                }

                break;

            case 'locale':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->locale;
=======
                    return $generator->locale();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'currency':
            case 'currencycode':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->currencyCode;
=======
                    return $generator->currencyCode();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'url':
            case 'website':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->url;
=======
                    return $generator->url();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'company':
            case 'companyname':
            case 'employer':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->company;
=======
                    return $generator->company();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'title':
                if ($size !== null && $size <= 10) {
                    return static function () use ($generator) {
<<<<<<< HEAD
                        return $generator->title;
=======
                        return $generator->title();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    };
                }

                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->sentence;
=======
                    return $generator->sentence();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };

            case 'body':
            case 'summary':
            case 'article':
            case 'description':
                return static function () use ($generator) {
<<<<<<< HEAD
                    return $generator->text;
=======
                    return $generator->text();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                };
        }

        return null;
    }
}
