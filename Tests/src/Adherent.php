<?php

class Adherent {

    // Variables
    private $id;

    // Methods
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