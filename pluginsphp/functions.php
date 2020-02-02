<?php
function getMail($id_estado,$id_producto){
    $correos = '';
    $envio = array
    (
        array('id_estado' => 1,'id_producto' => 1,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 1,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 1,'id_producto' => 3,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 1,'id_producto' => 4,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 1,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 2,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 2,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 2,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 2,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 2,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 3,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 3,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 3,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 3,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 3,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 4,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 4,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 4,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 4,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 4,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 5,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 5,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 5,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 5,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 5,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 6,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 6,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 6,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 6,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 6,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 7,'id_producto' => 1,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 7,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 7,'id_producto' => 3,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 7,'id_producto' => 4,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 7,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 8,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 8,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 8,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 8,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 8,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 9,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 9,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 9,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 9,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 9,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 10,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 10,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 10,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 10,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 10,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 11,'id_producto' => 1,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 11,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 11,'id_producto' => 3,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 11,'id_producto' => 4,'correos' => 'ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 11,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 12,'id_producto' => 1,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 12,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 12,'id_producto' => 3,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 12,'id_producto' => 4,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 12,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 13,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 13,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 13,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 13,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 13,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 14,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 14,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 14,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 14,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 14,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 15,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 15,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 15,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 15,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 15,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 16,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 16,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 16,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 16,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 16,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 17,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 17,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 17,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 17,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 17,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 18,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 18,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 18,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 18,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 18,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 19,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 19,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 19,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 19,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 19,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 20,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 20,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 20,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 20,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 20,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 21,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 21,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 21,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 21,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 21,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 22,'id_producto' => 1,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 22,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 22,'id_producto' => 3,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 22,'id_producto' => 4,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 22,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 23,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 23,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 23,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 23,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 23,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 24,'id_producto' => 1,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 24,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 24,'id_producto' => 3,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 24,'id_producto' => 4,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 24,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 25,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 25,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 25,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 25,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 25,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 26,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 26,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 26,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 26,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 26,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 27,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 27,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 27,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 27,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 27,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 28,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 28,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 28,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 28,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 28,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 29,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 29,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 29,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 29,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 29,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 30,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 30,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 30,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 30,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 30,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 31,'id_producto' => 1,'correos' => 'ventas1@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 31,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 31,'id_producto' => 3,'correos' => 'ventas2@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 31,'id_producto' => 4,'correos' => 'ventas3@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 31,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 32,'id_producto' => 1,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 32,'id_producto' => 2,'correos' => 'ventas4@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 32,'id_producto' => 3,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 32,'id_producto' => 4,'correos' => 'ventasslp@masterblowers.com,slp@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com'),
        array('id_estado' => 32,'id_producto' => 5,'correos' => 'elerma@masterblowers.com,ventas@masterblowers.com,operaciones@masterblowers.com,publicidad.masterblowers@gmail.com,tespinosa@masterblowers.com')
    );
    
    foreach($envio as $index => $values){
        if($values['id_estado'] == $id_estado && $values['id_producto'] == $id_producto){
            $correos = explode(',', $values['correos']);
        }
    }
    return $correos;
}

function getFormatoConteo($validar = false){
    $archivo = "conteo.txt"; 
    $filas = file($archivo);
    $array = explode('-',$filas[count($filas)-1]); 
    
    if(isset($array[1])){
        $mes_contador = substr($array[0], 4);
        $contador = (int) $array[1];
        
        if($validar){
            $contador = str_pad($contador, 3, "0", STR_PAD_LEFT);
        }else{
            $contador = str_pad($contador + 1, 3, "0", STR_PAD_LEFT);
        }
    }else{
        $mes_contador = date('m');
        if($validar){
            $contador = '000';
        }else{
            $contador = '001';
        }
    }
    $consecutivo = $mes_contador.'-'.$contador;
    return $consecutivo;
}
function interface_contador(){ 

    $archivo = "conteo.txt"; 
    $contador = 0; 
    $date_contador = '';
    $date = date('Ym');

    $filas = file($archivo);
    $array = explode('-',$filas[count($filas)-1]); 

    if(isset($array[1])){
        $date_contador = $array[0];
        $contador = (int) $array[1];
    }

    if($date_contador == $date){
       ++$contador;
       $codigo = $date.'-'.$contador;

        $file = fopen($archivo,'r');
        $cantidadRegistros = 0;
        while(!feof($file)) {   
            $name = fgets($file);  
            $lineas[] = $name; 
            ++$cantidadRegistros;
        }  
        fclose($file);
        $lineas[$cantidadRegistros - 1] = $codigo;

        $lineas = array_values($lineas);
        $file = fopen($archivo, "w");  
        foreach( $lineas as $linea ) {  
            fwrite( $file, $linea );  
        }   
        fclose( $file );
    }else{
        $contador = 1;
        $codigo = $date.'-'.$contador;
        $fp = fopen($archivo,"a"); 
        if($date_contador != ''){
            fwrite($fp, "\n");
        }
        fwrite($fp, $codigo);
        fclose($fp); 
    }
}