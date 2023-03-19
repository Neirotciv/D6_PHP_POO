<?php

namespace Service;

use Entity\Person;

class HTMLHelper
{
    /**
     * @param Person $person Person object to render
     * @return string The HTML card for the given person
     */
    public static function card(Person $person)
    {
        $status = $person->getIsConnected() ? 'En ligne' : 'Hors ligne';

        $html = '<div class="card">';
        $html .= '<h3>' . $person->getName() . ' ' . $person->getLastname() . '</h3>';
        $html .= '<p>' . $person->getEmail() . '<br>';
        $html .= 'Connecté : ' . $status . '</p>';
        $html .= '</div>';
        return $html;
    }
}