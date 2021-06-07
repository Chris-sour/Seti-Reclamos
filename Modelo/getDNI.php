<?php

$dni = $_GET['dni'];
echo file_get_contents('https://api.ludfact.com/Consulta/DNI?numDoc='.$dni);
