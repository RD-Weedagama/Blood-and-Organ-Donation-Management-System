<!DOCTYPE html>

<html>

<form method="post">

<input type="text" name="address">

<input type="submit" name="submit" value="submit">

</form>

</html>

<?php

if(isset($_POST['submit']))

{


function getLatLong($address){

    if(!empty($address)){

        //Formatted address

        $formattedAddr = str_replace(' ','+',$address);

        //Send request and receive json data by address

        $geocodeFromAddr = file_get_contents
('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 

        $output = json_decode($geocodeFromAddr);

        //Get latitude and longitute from json data

        $data['latitude']  = $output->results[0]->geometry->location->lat; 

        $data['longitude'] = $output->results[0]->geometry->location->lng;

        //Return latitude and longitude of the given address

        if(!empty($data)){

            return $data;

        }else{

            return false;

        }

    }else{

        return false;  
 
    }

}

$address = $_POST['address'];

$latLong = getLatLong($address);

$latitude = $latLong['latitude']?$latLong['latitude']:'Not found';

$longitude = $latLong['longitude']?$latLong['longitude']:'Not found';

echo "Latitude:".$latitude."<br>";

echo "longitude:".$longitude."";

}

?>
