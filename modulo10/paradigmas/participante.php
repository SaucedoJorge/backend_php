<?php
/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * 
 */
class participante
{
    #PROPIEDADES
    public $nombre;
    public $apellido;
    public $edad;
    public $pais;

    # METODO
    public function getData()
    {
        $data = file_get_contents("../../resource/participantes.json");
        return json_decode($data, true);
    }

    public function getList()
    {
        $participantes = $this->getData();
        $response = [];
        foreach ($participantes as $p) {
            $res         = new participante();
            $res->nombre  = $p['nombre']; 
            $res->apellido = $p['apellido'];
            $res->edad = $p['edad'];
            $res->pais = $p['pais'];
            $response[]  = $res;  
        }
        return $response;
    }
}