<?php
require '../easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('plt','http://www.fakeplanet.com/namespace#');


$newrdf = new \EasyRdf\Graph("https://assassid.github.io/projekSW-PWII/Rdfplanet.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('dc:title');

$i = 0;

foreach($allSubject as $subjek) {
    $title[$i]   = $newrdf->get($subjek,'dc:title');
    $mass[$i]  = $newrdf->get($subjek,'plt:mass');
    $diameter[$i]  = $newrdf->get($subjek,'plt:diameter');
    $composition[$i] = $newrdf->get($subjek,'plt:composition');
    $rotation[$i]  = $newrdf->get($subjek,'plt:rotation');
    $satellite[$i]  = $newrdf->get($subjek,'plt:satellite');
    $volume[$i]  = $newrdf->get($subjek,'plt:volume');
    
    $i++;

    }

?>