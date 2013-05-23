<?php

namespace Transport\Entity\Schedule;

/**
 * Request for a station board journey
 */
class StationBoardJourney extends Journey
{
    /**
     * @var Transport\Entity\Schedule\Stop
     */
    public $stop;

    static private $lineColors = array('Zürich' => array (
                '11' => array('bg' => '00892f', 'text' => 'ffffff'), //Zürich
                '13' => array('bg' => 'ffc100', 'text' => '000000'), //Zürich
                '14' => array('bg' => '008dc5', 'text' => 'ffffff'), //Zürich
                '15' => array('bg' => 'e20a16', 'text' => 'ffffff'), //Zürich
                '17' => array('bg' => '8e214d', 'text' => 'ffffff'), //Zürich
                '80' => array('bg' => 'cbcfb3', 'text' => '000000'), //Zürich
                '350' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich
                '781' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich
                '787' => array('bg' => '008dc5', 'text' => 'ffffff'), //Zürich
                '32' => array('bg' => 'ccb2d1', 'text' => '000000'), //Zürich
                '31' => array('bg' => 'a5a2c6', 'text' => 'ffffff'), //Zürich
                '17' => array('bg' => '8e214d', 'text' => 'ffffff'), //Zürich
                '14' => array('bg' => '008dc5', 'text' => 'ffffff'), //Zürich
                '13' => array('bg' => 'ffc100', 'text' => '000000'), //Zürich
                '11' => array('bg' => '00892f', 'text' => 'ffffff'), //Zürich
                '10' => array('bg' => 'e12472', 'text' => 'ffffff'), //Zürich
                '46' => array('bg' => 'c1d59f', 'text' => '000000'), //Zürich
                'N2' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N6' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N7' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N5' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N8' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                '12' => array('bg' => '5eb3db', 'text' => '000000'), //Zürich
                '94' => array('bg' => 'a9a39b', 'text' => 'ffffff'), //Zürich
                'N78' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                '220' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich
                '72' => array('bg' => 'c6a693', 'text' => '000000'), //Zürich
                'N45' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                '46' => array('bg' => 'c1d59f', 'text' => '000000'), //Zürich
                '307' => array('bg' => 'ca7d3c', 'text' => 'ffffff'), //Zürich
                '9' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                '7' => array('bg' => '000000', 'text' => 'ffffff'), //Zürich
                '6' => array('bg' => 'ca7d3c', 'text' => 'ffffff'), //Zürich
                '5' => array('bg' => '734522', 'text' => 'ffffff'), //Zürich
                '4' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                '3' => array('bg' => '00892f', 'text' => 'ffffff'), //Zürich
                '2' => array('bg' => 'e20a16', 'text' => 'ffffff'), //Zürich
                '760' => array('bg' => '00892f', 'text' => 'ffffff'), //Zürich
                '14' => array('bg' => '008dc5', 'text' => 'ffffff'), //Zürich
                'N11' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N12' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N13' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                'N14' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                '752' => array('bg' => '8ab51f', 'text' => '000000'), //Zürich
                '751' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                '62' => array('bg' => 'cac0b6', 'text' => '000000'), //Zürich
                '8' => array('bg' => '8ab51f', 'text' => '000000'), //Zürich
                '9' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                '7' => array('bg' => '000000', 'text' => 'ffffff'), //Zürich
                '4' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                '2' => array('bg' => 'e20a16', 'text' => 'ffffff'), //Zürich
                '3' => array('bg' => '00892f', 'text' => 'ffffff'), //Zürich
                '31' => array('bg' => 'a5a2c6', 'text' => 'ffffff'), //Zürich
                '33' => array('bg' => 'dad69c', 'text' => '000000'), //Zürich
                '5' => array('bg' => '734522', 'text' => 'ffffff'), //Zürich
                '200' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich
                'N52' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich Flughafen
                '510' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich Flughafen
                '531' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich Flughafen
                '530' => array('bg' => 'ffcc00', 'text' => '000000'), //Zürich Flughafen
            ),
            'Winterthur' => array (
                '9' => array('bg' => 'dd7100', 'text' => '000000'), //Winterthur
                'N61' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N60' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N65' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N64' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N67' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N66' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N68' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'N59' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                '9' => array('bg' => 'dd7100', 'text' => '000000'), //Winterthur
                '3' => array('bg' => '23b24b', 'text' => 'ffffff'), //Winterthur
                '7' => array('bg' => '3f979f', 'text' => 'ffffff'), //Winterthur
                '4' => array('bg' => 'fcb814', 'text' => '000000'), //Winterthur
                '5' => array('bg' => '0073bc', 'text' => 'ffffff'), //Winterthur
                '2' => array('bg' => 'ee1d23', 'text' => 'ffffff'), //Winterthur
                '1' => array('bg' => '000000', 'text' => 'ffffff'), //Winterthur
                '14' => array('bg' => 'f0e840', 'text' => '000000'), //Winterthur
                '10' => array('bg' => '163279', 'text' => 'ffffff'), //Winterthur
                '11' => array('bg' => 'ed3896', 'text' => 'ffffff'), //Winterthur
                '615' => array('bg' => 'ffcc00', 'text' => '000000'), //Winterthur
                '12' => array('bg' => '815732', 'text' => 'ffffff'), //Winterthur
                '660' => array('bg' => 'ffcc00', 'text' => '000000'), //Winterthur
                '680' => array('bg' => 'ffcc00', 'text' => '000000'), //Winterthur
            ),
            'other' => array (
                'S24' => array('bg' => '005394', 'text' => 'ffffff'), //Zürich                
                'S26' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur                
                'SN9' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich                
                'S10' => array('bg' => '005394', 'text' => 'ffffff'), //Zürich                
                'S41' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur                
                'S' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur                
                'N25' => array('bg' => '000000', 'text' => 'f6ff00'), //Affoltern am Albis
                'N24' => array('bg' => '000000', 'text' => 'f6ff00'), //Affoltern am Albis
                'N63' => array('bg' => '000000', 'text' => 'f6ff00'), //Andelfingen
                '280' => array('bg' => 'ffcc00', 'text' => '000000'), //Baar
                'SN7' => array('bg' => '000000', 'text' => 'f6ff00'), //Bassersdorf
                '809' => array('bg' => 'ffcc00', 'text' => '000000'), //Bauma
                '835' => array('bg' => 'ffcc00', 'text' => '000000'), //Bauma
                'IC' => array('bg' => 'ff0000', 'text' => 'ffffff'), //Bern
                '625' => array('bg' => 'ffcc00', 'text' => '000000'), //Bichelsee
                'N22' => array('bg' => '000000', 'text' => 'f6ff00'), //Birmensdorf
                '205' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                '221' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                '222' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                '222' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                '221' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                '237' => array('bg' => 'ffcc00', 'text' => '000000'), //Bonstetten-Wettswil
                'N23' => array('bg' => '000000', 'text' => 'f6ff00'), //Bonstetten-Wettswil
                '767' => array('bg' => 'ffcc00', 'text' => '000000'), //Brütten
                '485' => array('bg' => 'ffcc00', 'text' => '000000'), //Buchs ZH
                'N54' => array('bg' => '000000', 'text' => 'f6ff00'), //Bülach
                'N53' => array('bg' => '000000', 'text' => 'f6ff00'), //Bülach
                '502' => array('bg' => 'ffcc00', 'text' => '000000'), //Bülach
                '503' => array('bg' => 'ffcc00', 'text' => '000000'), //Bülach
                'EC' => array('bg' => 'ff0000', 'text' => 'ffffff'), //Chur
                'IR' => array('bg' => 'ff0000', 'text' => 'ffffff'), //Chur
                'S33' => array('bg' => '005394', 'text' => 'ffffff'), //Dachsen
                'S16' => array('bg' => '005394', 'text' => 'ffffff'), //Dachsen
                'S11' => array('bg' => '005394', 'text' => 'ffffff'), //Dachsen
                '535' => array('bg' => 'ffcc00', 'text' => '000000'), //Dielsdorf
                '525' => array('bg' => 'ffcc00', 'text' => '000000'), //Dielsdorf
                'S17' => array('bg' => '005394', 'text' => 'ffffff'), //Dietikon
                'S3' => array('bg' => '005394', 'text' => 'ffffff'), //Dietikon
                '309' => array('bg' => '008dc5', 'text' => 'ffffff'), //Dietikon
                '305' => array('bg' => '734522', 'text' => 'ffffff'), //Dietikon
                '306' => array('bg' => 'ffc100', 'text' => '000000'), //Dietikon
                '748' => array('bg' => 'e12472', 'text' => 'ffffff'), //Dietlikon
                '743' => array('bg' => 'e20a16', 'text' => 'ffffff'), //Dübendorf
                'N17' => array('bg' => '000000', 'text' => 'f6ff00'), //Dübendorf
                '754' => array('bg' => '734522', 'text' => 'ffffff'), //Dübendorf
                '235' => array('bg' => 'ffcc00', 'text' => '000000'), //Ebertswil
                '225' => array('bg' => 'ffcc00', 'text' => '000000'), //Ebertswil
                'N62' => array('bg' => '000000', 'text' => 'f6ff00'), //Effretikon
                '654' => array('bg' => 'ffcc00', 'text' => '000000'), //Effretikon
                '542' => array('bg' => 'ffcc00', 'text' => '000000'), //Eglisau
                '543' => array('bg' => 'ffcc00', 'text' => '000000'), //Eglisau
                'S13' => array('bg' => '005394', 'text' => 'ffffff'), //Einsiedeln
                'S40' => array('bg' => '005394', 'text' => 'ffffff'), //Einsiedeln
                '827' => array('bg' => 'ffcc00', 'text' => '000000'), //Fehraltorf
                'S18' => array('bg' => 'ff0000', 'text' => 'ffffff'), //Forch
                '520' => array('bg' => 'ffcc00', 'text' => '000000'), //Freienstein
                '521' => array('bg' => 'ffcc00', 'text' => '000000'), //Freienstein
                'N19' => array('bg' => '000000', 'text' => 'f6ff00'), //Fällanden
                '540' => array('bg' => 'ffcc00', 'text' => '000000'), //Glattfelden
                '612' => array('bg' => 'ffcc00', 'text' => '000000'), //Gütighausen
                '240' => array('bg' => 'ffcc00', 'text' => '000000'), //Hausen
                '223' => array('bg' => 'ffcc00', 'text' => '000000'), //Hausen
                '675' => array('bg' => 'ffcc00', 'text' => '000000'), //Henggart
                '676' => array('bg' => 'ffcc00', 'text' => '000000'), //Henggart
                'N89' => array('bg' => '000000', 'text' => 'f6ff00'), //Hinwil
                'S14' => array('bg' => '005394', 'text' => 'ffffff'), //Hinwil
                '150' => array('bg' => 'ffcc00', 'text' => '000000'), //Hirzel
                '837' => array('bg' => 'ffcc00', 'text' => '000000'), //Hittnau
                '150' => array('bg' => 'ffcc00', 'text' => '000000'), //Horgen
                '155' => array('bg' => 'ffcc00', 'text' => '000000'), //Horgen
                'N26' => array('bg' => '000000', 'text' => 'f6ff00'), //Horgen
                '545' => array('bg' => 'ffcc00', 'text' => '000000'), //Hüntwangen-Wil
                '546' => array('bg' => 'ffcc00', 'text' => '000000'), //Hüntwangen-Wil
                '545' => array('bg' => 'ffcc00', 'text' => '000000'), //Hüntwangen-Wil
                '303' => array('bg' => '11296f', 'text' => 'ffffff'), //Killwangen-Spreitenbach
                'N18' => array('bg' => '000000', 'text' => 'f6ff00'), //Küsnacht
                'SN8' => array('bg' => '000000', 'text' => 'f6ff00'), //Lachen
                'SN4' => array('bg' => '000000', 'text' => 'f6ff00'), //Langnau-Gattikon
                '620' => array('bg' => 'ffcc00', 'text' => '000000'), //Marthalen
                '847' => array('bg' => 'ffcc00', 'text' => '000000'), //Marthalen
                '230' => array('bg' => 'ffcc00', 'text' => '000000'), //Maschwanden
                'N16' => array('bg' => '000000', 'text' => 'f6ff00'), //Maur
                'N92' => array('bg' => '000000', 'text' => 'f6ff00'), //Meilen
                '137' => array('bg' => 'ffcc00', 'text' => '000000'), //Menzingen
                '232' => array('bg' => 'ffcc00', 'text' => '000000'), //Mettmenstetten
                'HN4' => array('bg' => '000000', 'text' => 'f6ff00'), //Neuhausen
                '7' => array('bg' => 'a7005a', 'text' => 'ffffff'), //Neuhausen
                'S55' => array('bg' => '005394', 'text' => 'ffffff'), //Niederweningen
                'N51' => array('bg' => '000000', 'text' => 'f6ff00'), //Oberglatt
                '504' => array('bg' => 'ffcc00', 'text' => '000000'), //Oberglatt
                '215' => array('bg' => 'ffcc00', 'text' => '000000'), //Oberlunkhofen
                '605' => array('bg' => 'ffcc00', 'text' => '000000'), //Oberstammheim
                '867' => array('bg' => 'ffcc00', 'text' => '000000'), //Oetwil am See
                '842' => array('bg' => 'ffcc00', 'text' => '000000'), //Oetwil am See
                '301' => array('bg' => '8ab51f', 'text' => '000000'), //Oetwil an der Limmat
                'S6' => array('bg' => '005394', 'text' => 'ffffff'), //Otelfingen
                '212' => array('bg' => 'ffcc00', 'text' => '000000'), //Ottenbach
                '213' => array('bg' => 'ffcc00', 'text' => '000000'), //Ottenbach
                'S8' => array('bg' => '005394', 'text' => 'ffffff'), //Pfäffikon SZ
                'SN5' => array('bg' => '000000', 'text' => 'f6ff00'), //Pfäffikon SZ
                'S5' => array('bg' => '005394', 'text' => 'ffffff'), //Pfäffikon SZ
                '833' => array('bg' => 'ffcc00', 'text' => '000000'), //Pfäffikon ZH
                '670' => array('bg' => 'ffcc00', 'text' => '000000'), //Rafz
                '670' => array('bg' => 'ffcc00', 'text' => '000000'), //Rafz
                'S15' => array('bg' => '005394', 'text' => 'ffffff'), //Rapperswil
                'N1' => array('bg' => '000000', 'text' => 'f6ff00'), //Regensdorf
                '456' => array('bg' => 'ffcc00', 'text' => '000000'), //Regensdorf-Watt
                'S30' => array('bg' => '005394', 'text' => 'ffffff'), //Romanshorn
                'N69' => array('bg' => '000000', 'text' => 'f6ff00'), //Schaffhausen
                '1' => array('bg' => '006f3b', 'text' => 'ffffff'), //Schaffhausen
                'HN3' => array('bg' => '000000', 'text' => 'f6ff00'), //Schaffhausen
                'HN2' => array('bg' => '000000', 'text' => 'f6ff00'), //Schaffhausen
                'HN1' => array('bg' => '000000', 'text' => 'f6ff00'), //Schaffhausen
                '630' => array('bg' => 'ffcc00', 'text' => '000000'), //Schaffhausen
                '5' => array('bg' => '0089af', 'text' => 'ffffff'), //Schaffhausen
                '4' => array('bg' => '000000', 'text' => 'ffffff'), //Schaffhausen
                '6' => array('bg' => 'ffc121', 'text' => 'ffffff'), //Schaffhausen
                '1' => array('bg' => '006f3b', 'text' => 'ffffff'), //Schaffhausen
                '3' => array('bg' => 'd8531d', 'text' => 'ffffff'), //Schaffhausen
                'RE' => array('bg' => 'ffffff', 'text' => 'ff0000'), //Schaffhausen
                '8' => array('bg' => '594598', 'text' => 'ffffff'), //Schaffhausen
                '555' => array('bg' => 'ffcc00', 'text' => '000000'), //Schleinikon
                'N30' => array('bg' => '000000', 'text' => 'f6ff00'), //Schlieren
                '634' => array('bg' => 'ffcc00', 'text' => '000000'), //Schloss Laufen
                'N72' => array('bg' => '000000', 'text' => 'f6ff00'), //Schwerzenbach
                'R' => array('bg' => 'ff0000', 'text' => 'ffffff'), //Sihlwald
                '137' => array('bg' => 'ffcc00', 'text' => '000000'), //Sihlwald
                'S4' => array('bg' => '005394', 'text' => 'ffffff'), //Sihlwald
                '807' => array('bg' => 'ffcc00', 'text' => '000000'), //Sitzberg
                'ICN' => array('bg' => 'ff0000', 'text' => 'ffffff'), //St. Gallen
                'SN' => array('bg' => '000000', 'text' => 'f6ff00'), //St. Margrethen
                '515' => array('bg' => 'ffcc00', 'text' => '000000'), //Stadel bei Niederglatt
                'SN3' => array('bg' => '000000', 'text' => 'f6ff00'), //Stein am Rhein
                'S29' => array('bg' => '005394', 'text' => 'ffffff'), //Stein am Rhein
                'N95' => array('bg' => '000000', 'text' => 'f6ff00'), //Stäfa
                '522' => array('bg' => 'ffcc00', 'text' => '000000'), //Teufen
                'N15' => array('bg' => '000000', 'text' => 'f6ff00'), //Thalwil
                'S21' => array('bg' => '005394', 'text' => 'ffffff'), //Thalwil
                'S22' => array('bg' => '005394', 'text' => 'ffffff'), //Thayngen
                '621' => array('bg' => 'ffcc00', 'text' => '000000'), //Trüllikon
                '820' => array('bg' => 'ffcc00', 'text' => '000000'), //Turbenthal
                '201' => array('bg' => 'ffcc00', 'text' => '000000'), //Uitikon
                'N4' => array('bg' => '000000', 'text' => 'f6ff00'), //Unterengstringen
                '308' => array('bg' => 'e12472', 'text' => 'ffffff'), //Unterengstringen
                '304' => array('bg' => 'e20a16', 'text' => 'ffffff'), //Unterengstringen
                'S2' => array('bg' => '005394', 'text' => 'ffffff'), //Unterterzen
                '311' => array('bg' => 'ff5d55', 'text' => '000000'), //Urdorf-Weihermatt
                '302' => array('bg' => '00892f', 'text' => 'ffffff'), //Urdorf-Weihermatt
                'N81' => array('bg' => '000000', 'text' => 'f6ff00'), //Uster
                'S9' => array('bg' => '005394', 'text' => 'ffffff'), //Uster
                '830' => array('bg' => 'ffcc00', 'text' => '000000'), //Uster
                '771' => array('bg' => 'ffcc00', 'text' => '000000'), //Wallisellen
                '796' => array('bg' => 'ffc100', 'text' => '000000'), //Wangen
                '832' => array('bg' => 'ffcc00', 'text' => '000000'), //Weisslingen
                'N88' => array('bg' => '000000', 'text' => 'f6ff00'), //Wetzikon
                'N87' => array('bg' => '000000', 'text' => 'f6ff00'), //Wetzikon
                'N86' => array('bg' => '000000', 'text' => 'f6ff00'), //Wetzikon
                'S35' => array('bg' => '005394', 'text' => 'ffffff'), //Wil SG
                '825' => array('bg' => 'ffcc00', 'text' => '000000'), //Wildberg
                'N27' => array('bg' => '000000', 'text' => 'f6ff00'), //Wädenswil
                'S12' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
                'SN1' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'S7' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur


                )
        );

    /**
     * @param   \SimpleXMLElement   $xml
     * @param   string              $date   The date that will be assigned to this journey
     * @param   Journey             $obj    An optional existing journey to overwrite
     * @return  Journey
     */
    static public function createFromXml(\SimpleXMLElement $xml, \DateTime $date, Journey $obj = null)
    {
        if (!$obj) {
            $obj = new StationBoardJourney();
        }

        $obj = Journey::createFromXml($xml, $date, $obj);

        $obj->stop = Stop::createFromXml($xml->MainStop->BasicStop, $date, null);

        $line = $obj->category;
        if ( preg_match('/Tram|Bus|Tro/', $obj->category) ) {
            $line = $obj->number;
        }

        //assign regional line colors
        foreach (self::$lineColors as $key => $value) {
            if (!strncmp($obj->stop->station->name, $key, strlen($key))) { // is station of a known region ?
                if (isset($value[$line])) {
                    $obj->bgColor = $value[$line]['bg'];
                    $obj->textColor = $value[$line]['text'];
                }
                break;
            }
        }

        if ($obj->bgColor == null) {
            if (isset(self::$lineColors['other'][$line])) {
                $obj->bgColor = self::$lineColors['other'][$line]['bg'];
                $obj->textColor = self::$lineColors['other'][$line]['text'];
            }
        }

        return $obj;
    }
}
