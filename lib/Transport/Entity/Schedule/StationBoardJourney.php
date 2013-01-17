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
                'S10' => array('bg' => '005394', 'text' => 'ffffff'), //Zürich
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
                'SN9' => array('bg' => '000000', 'text' => 'f6ff00'), //Zürich
                '752' => array('bg' => '8ab51f', 'text' => '000000'), //Zürich
                '751' => array('bg' => '11296f', 'text' => 'ffffff'), //Zürich
                'S24' => array('bg' => '005394', 'text' => 'ffffff'), //Zürich
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
                'S' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
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
                'S12' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
                'SN1' => array('bg' => '000000', 'text' => 'f6ff00'), //Winterthur
                'S7' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
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
                'S41' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
                'S26' => array('bg' => '005394', 'text' => 'ffffff'), //Winterthur
                '680' => array('bg' => 'ffcc00', 'text' => '000000'), //Winterthur
            ),
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

        //assign regional line colors
        foreach (self::$lineColors as $key => $value) {
            if (!strncmp($obj->stop->station->name, $key, strlen($key))) { // is station of a known region ?
                if (isset($value[$obj->number])) {
                    $obj->bgColor = $value[$obj->number]['bg'];
                    $obj->textColor = $value[$obj->number]['text'];
                }
                break;
            }
        }

        return $obj;
    }
}
