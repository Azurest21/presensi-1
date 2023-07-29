<?php

use App\Models\Haversine;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of helpers
 *
 * @author banua
 */


    function getlocationhaversine($latitude, $longitude) {

        $haversine =  Haversine::where('id', 1)
                        ->first();
        $lat = $haversine->latitude;
        $long = $haversine->longitude;
        $maksradius = $haversine->distance;


        $radius = null;

        $radiushaversine = haversinedistance($lat, $long, $latitude, $longitude);

        $radius = $radiushaversine;

        $note = null;
        if($radius <= $maksradius) {
            $note = 'ok';
        }else if($radius > $maksradius) {
            $note = 'Posisi Diluar Jangkauan.';
        }


       // $arr = array;
        echo json_encode(array(
                'radius' => $radius,
                'note' => $note,
                'maksradius' => $maksradius
            ));
}


 function haversinedistance( $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000) {


  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return intval(preg_replace('/[^\d.]/', '',  ($angle * $earthRadius)));

}