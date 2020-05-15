<?php

class Adherent {

    // Variables
    private $id;

    // Methods
    public function __construct(string $lastname, string $firstname, DateTime $birthdate) {
        $this->id=self::concatenate_id($lastname,$firstname,$birthdate);
    }

    public static function concatenate_id(string $lastname, string $firstname, DateTime $birthdate) {
        return strtoupper((self::skip_accents($lastname)).strtoupper(self::skip_accents($firstname)).$birthdate->format('Y-m-d'));
    }

    // Aide : https://murviel-info-beziers.com/fonction-php-supprimer-accents/
    public static function skip_accents(string $string) {
        $charset='utf-8';

        $str = htmlentities( $string, ENT_NOQUOTES, $charset );
        $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
        $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
        $str = preg_replace( '#&[^;]+;#', '', $str );

        return $str;
    }
}