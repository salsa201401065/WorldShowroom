<?php

require '../easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('car','http://www.projectsemweb/namespace#');

$newrdf = new \EasyRdf\Graph("https://salsa201401065.github.io/projectbesar/showroom.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('dc:type');

$i = 0;

foreach($allSubject as $subjek) {
    $type[$i]   = $newrdf->get($subjek,'dc:type');
    $ccar[$i]  = $newrdf->get($subjek,'car:ccar');
    $date[$i]  = $newrdf->get($subjek,'dc:date');
    $price[$i]  = $newrdf->get($subjek,'car:price');

    $i++;
    }

?>