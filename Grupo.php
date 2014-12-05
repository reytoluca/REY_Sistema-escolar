<?php
    class Grupo {

        private $id;
        private $nombre;
        private $avatar;
        private $orden;
        private $estatus;

        public function createGrupo(){
            echo "<br>Create Grupo";
        }
        public function readGrupoG(){
            echo "<br>Read Grupo G";
        }
        public function readGrupoS(){
            echo "<br>Read Grupo S";
        }
        public function deleteGrupo(){
            echo "<br>Delete Grupo";
        }
        public function updateGrupo(){
            echo "<br>Update Grupo";
        }
        public function asignarAlumnoGrupo(){
            echo "<br>Asignar Alumno a Grupo";
        }
    }