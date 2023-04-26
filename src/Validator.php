<?php

namespace UPJV\INSSET;

/**
 * Nom du fichier: code.php
 *
 * Classe Validateur : permet de valider une chaîne de caractères
 *
 * Cette classe permet de valider une chaîne de caractères en vérifiant si elle est d'au moins deux caractères.
 */
class Validator
{
    /**
     * Vérifie si une chaîne de caractères est d'au moins deux caractères de longueur.
     *
     * @param string $input La chaîne de caractères à vérifier.
     *
     * @return bool Renvoie true si la chaîne est d'au moins deux caractères de longueur, false sinon.
     */
    public function check($input)
    {
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}

// End of file (EOF).
