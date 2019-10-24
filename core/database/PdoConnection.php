<?php
class PdoConnection {

    /**
     * Instancia de la clase
     *
     * @var PDOConnection
     */
    private static $instance = null;
    /**
     * conexión con la bbdd
     *
     * @var PDO
     */
    public $bbdd;

    private function __construct(){
    }

    public static function getInstance() {
    }


    public function select($query, $params = null){
    }

    public function insert($query, $params){
    }

    public function lastInsertId() {
    }

    public function update($query, $params){
    }


    public function delete($query, $params){
    }

    private function execQuery($query, $params) {
    }

    private function execQueryNoResult($query, $params) {
    }

};