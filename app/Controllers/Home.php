<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view("welcome_message");
    }

    public function verDetallesProyecto($idProyecto )
    {      
        echo json_encode($idProyecto);
        $proyectos = array(
            '1' => array(
                'Nombre' => 'Sistema de Gestión de Proyectos',
                'Descripcion' => 'Plataforma integral para la gestión eficiente de proyectos de desarrollo.',
                'Equipo' => array('Ana García', 'Carlos Martínez', 'David Rodríguez'),
                'FechaInicio' => '2022-10-15',
                'Estado' => 'En Proceso',
            )
          
        );
    
        if (array_key_exists($idProyecto, $proyectos)) {
            $detallesProyecto = $proyectos[$idProyecto];
            return $this->response->setJson($detallesProyecto);
        } else {
            return $this->response->setJson(['Error' => 'Proyecto no encontrado']);
        }
        
    }
    
    


    public function verTareasProyecto($idProyecto)
    {
        $tareas = array(
            'P001' => array(
                'Desarrollar módulo de usuario',
                'Integrar sistema de pagos',
                'Realizar pruebas de rendimiento',
            ),

        );

        if (isset($tareas[$idProyecto])) {
            $tareasProyecto = $tareas[$idProyecto];
            return $this->response->setJson($tareasProyecto);
        } else {
            return $this->response->setJson(['Error' => 'Proyecto no encontrado']);
        }
    }

    public function verHitosProyecto($idProyecto)
    {
        $hitos = array(
            'P001' => array(
                'Finalización del diseño de interfaz',
                'Implementación de funciones principales',
                'Lanzamiento de la versión beta',
            ),

        );

        if (isset($hitos[$idProyecto])) {
            $hitosProyecto = $hitos[$idProyecto];
            return $this->response->setJson($hitosProyecto);
        } else {
            return $this->response->setJson(['Error' => 'Proyecto no encontrado']);
        }
    }

    public function verDocumentacionProyecto($idProyecto)
    {
        $documentacion = array(
            'P001' => array(
                'Manual de usuario',
                'Guía de instalación',
                'Documentación técnica',
            ),

        );

        if (isset($documentacion[$idProyecto])) {
            $documentacionProyecto = $documentacion[$idProyecto];
            return $this->response->setJson($documentacionProyecto);
        } else {
            return $this->response->setJson(['Error' => 'Proyecto no encontrado']);
        }
    }

}