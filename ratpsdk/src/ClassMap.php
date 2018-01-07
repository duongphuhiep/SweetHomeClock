<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GeoPoint' => '\\StructType\\GeoPoint',
            'Line' => '\\StructType\\Line',
            'Reseau' => '\\StructType\\Reseau',
            'WrDirections' => '\\StructType\\WrDirections',
            'Direction' => '\\StructType\\Direction',
            'Station' => '\\StructType\\Station',
            'StationArea' => '\\StructType\\StationArea',
            'StationAcces' => '\\StructType\\StationAcces',
            'Tarif' => '\\StructType\\Tarif',
            'WrItineraries' => '\\StructType\\WrItineraries',
            'Itinerary' => '\\StructType\\Itinerary',
            'Mission' => '\\StructType\\Mission',
            'Perturbation' => '\\StructType\\Perturbation',
            'PerturbationCause' => '\\StructType\\PerturbationCause',
            'PerturbationConsequence' => '\\StructType\\PerturbationConsequence',
            'PerturbationIncident' => '\\StructType\\PerturbationIncident',
            'PerturbationIncidentLine' => '\\StructType\\PerturbationIncidentLine',
            'PerturbationMessage' => '\\StructType\\PerturbationMessage',
            'WrMission' => '\\StructType\\WrMission',
            'WrMissions' => '\\StructType\\WrMissions',
            'WrPerturbations' => '\\StructType\\WrPerturbations',
            'WrStationAreas' => '\\StructType\\WrStationAreas',
            'WrStations' => '\\StructType\\WrStations',
            'getGeoPoints' => '\\StructType\\GetGeoPoints',
            'getGeoPointsResponse' => '\\StructType\\GetGeoPointsResponse',
            'getLines' => '\\StructType\\GetLines',
            'getLinesResponse' => '\\StructType\\GetLinesResponse',
            'getDirections' => '\\StructType\\GetDirections',
            'getDirectionsResponse' => '\\StructType\\GetDirectionsResponse',
            'getMission' => '\\StructType\\GetMission',
            'getMissionResponse' => '\\StructType\\GetMissionResponse',
            'getMissionsFirstLast' => '\\StructType\\GetMissionsFirstLast',
            'getMissionsFirstLastResponse' => '\\StructType\\GetMissionsFirstLastResponse',
            'getMissionsFrequency' => '\\StructType\\GetMissionsFrequency',
            'getMissionsFrequencyResponse' => '\\StructType\\GetMissionsFrequencyResponse',
            'getMissionsNext' => '\\StructType\\GetMissionsNext',
            'getMissionsNextResponse' => '\\StructType\\GetMissionsNextResponse',
            'getPerturbations' => '\\StructType\\GetPerturbations',
            'getPerturbationsResponse' => '\\StructType\\GetPerturbationsResponse',
            'getStations' => '\\StructType\\GetStations',
            'getStationsResponse' => '\\StructType\\GetStationsResponse',
            'getVersionResponse' => '\\StructType\\GetVersionResponse',
        );
    }
}
