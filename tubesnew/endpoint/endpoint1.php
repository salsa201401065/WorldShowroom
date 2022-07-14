<?php

require '../easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('car','http://www.projectsemweb/namespace#');

$newrdf = new \EasyRdf\Graph("https://salsa201401065.github.io/projectbesar/showroom.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('dc:title');

$i = 0;

foreach($allSubject as $subjek) {
    $title[$i]   = $newrdf->get($subjek,'dc:title');
    $compname[$i]  = $newrdf->get($subjek,'car:compname');
    $coverage[$i]  = $newrdf->get($subjek,'dc:coverage');
    $compFouded[$i]  = $newrdf->get($subjek,'car:compFouded');
    $date[$i]  = $newrdf->get($subjek,'car:date');
    $description[$i]  = $newrdf->get($subjek,'dc:description');
    $img[$i]  = $newrdf->get($subjek,'car:img');
  
   
    $i++;
    }

?>