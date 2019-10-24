<?php
namespace core\database;

class Model {

protected $table;


private $key;
protected $instance;
protected $sql;
protected $exists;
protected $new;
protected $attributes;
protected $originals;
protected $where;

/**
 * Getter for Table
 *
 * @return [type]
 */
public function getTable()
{
    return $this->table;
}


/**
 * Getter for Key
 *
 * @return [type]
 */
public function getKey()
{
    return $this->key;
}



/**
 * método mágico que nos permitirá acceder a los
 * campos de la tabla de la forma $object->field
 *
 * @param [type] $attributes
 * @return void
 */
public function __get($attributes)
{
    # code...
}

/**
 * método mágico que nos permitirá guardar
 * el valor del atributo especificado
 *
 * @param [type] $attributes
 * @param [type] $value
 */
public function __set($attributes, $value)
{
    # code...
}
/**
 * método para devolver una instancia de la clase
 *
 * @return void
 */
public function getNewInstance()
{
    # code...
}

/**
 * devolverá todos los registros de la tabla
 *
 * @return void
 */
public function getAll()
{
    # code...
}

/**
 * convierte un conjunto de resultados en un array de
 * instancias de la clase
 *
 * @return void
 */
public function toInstance()
{
    # code...
}

/**
 * método que nos permitirá buscar un registro en la tabla por
* su id
 *
 * @param [type] $id
 * @return void
 */
 public function find($id)
{
    # code...
}

/**
 * añadirá una condición al array wheres[]
 *
 * @param [type] $condiction
 * @return void
 */
public function setWhere($condiction)
{
    # code...
}


/**
 * permitirá añadir una condición a la
 * consulta
 *
 * @param [type] $field
 * @param [type] $operator
 * @param [type] $value
 * @return void
 */
public function where($field, $operator, $value)
{
    # code...
}

/**
 * método mágico que se
 * ejecutará cuando se llame a un método no estático de forma estática
 *
 * @param [type] $method
 * @param [type] $arguments
 * @return void
 */
public function __callStatic($method, $arguments)
{
    # code...
}
/**
 *  método mágico que se ejecutará
 * cuando se llame a un método que no exista en el contexto (por
 * ejemplo, cuando se llame a un método privado desde fuera de la
 * clase)
 *
 * @param [type] $method
 * @param [type] $arguments
 * @return void
 */
public function __call($method, $arguments)
{
    # code...
}

/**
 * devolverá una cadena de texto con la sentencia sql que se va
 * a ejecutar
 *
 * @return void
 */
public function toSql()
{
    # code...
}

/**
 * métodos para traer datos de la tabla
 *
 * @param [type] $params
 * @return void
 */
public function get($params)
{
    # code...
}
/**
 * insertar o actualizar datos
 *
 * @return void
 */
public function save()
{
    # code...
}
/**
 * borrar datos
 *
 * @return void
 */
public function delete()
{
    # code...
}
/**
 * devolverá el último id insertado en la tabla
 *
 * @return void
 */
public function lastInsertId()
{
    # code...
}

/**
 * devolverá el valor original de la clave primaria
 *
 * @return void
 */
public function getKeyValue()
{
    # code...
}

}