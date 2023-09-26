<?php

require_once 'conexion.php';

class ModeloFormularios{

    /*REGISTRO*/

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, pass)VALUES (:nombre, :email, :pass)");

        $stmt->bindParam(":nombre", $datos['nombre'],PDO::PARAM_STR);

        $stmt->bindParam(":email",$datos['email'],PDO::PARAM_STR);

        $stmt->bindParam(":pass",$datos['pass'] , PDO::PARAM_STR);
        
        

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }

        $stmt->closeCursor();

        $stmt = null;


    }


    /*==== Seleccionar Registros M ====*/


    static public function mdlSelccionarRegistros($tabla){


        $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y' ) AS fecha  FROM $tabla ORDER BY id DESC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->closeCursor();

        $stmt = null;


    }


    static public function mdlSelccionarTotal($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT SUM(pass) AS suma_pass FROM $tabla");

        $stmt->execute();

        return $stmt->fetch();

        $stmt->closeCursor();

        $stmt = null;


    }



    static public function mdlSelccionarUsuario($tabla, $iten,$valor){



        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $iten = :$iten");

        $stmt->bindParam(":".$iten, $valor,PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->closeCursor();

        $stmt = null;


    }
}