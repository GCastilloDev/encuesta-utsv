 <?php

/**
 * En la clase <b>DatabaseConnect</b> vamos a incluir los métodos que utilizamos para crear y
 * administrar la conexión a la base de datos.
 * In the "Database Connect" class we will include the methods we use to create and
 * manage the connection to the database.
 */
class DatabaseConnect
{
    /**
     * Método con los valores generales para nuestra aplicación.
     * Method with the default values for our application.
     */
    public function dbConnectSimple()
    {
        $dbsystem = 'mysql';
        $host = 'localhost';
        $dbname = 'encuestautsv';
        $username = 'root';
        $passwd = '';

        return $this->dbConnect($dbsystem, $host, $dbname, $username, $passwd);
    }

    /**
     * Método para definir la conexión a la base de datos mediante parámetros.
     *
     * @param type $dbsystem tipo de base de datos, por ejemplo: mysql, postgresql (database type, for example: mysql, postgresql..
     * @param type $host     el host ya sea el nombre correspondiente o la IP directamente (the host either the corresponding name or IP directly)
     * @param type $dbname   el nombre de la base de datos a la que nos queremos conectar (the name of the database to which you want to connect)
     * @param type $username nombre del usuario para la conexión a la base de datos especificada en el DSN (for the connection to the database specified in the DSN)
     * @param type $passwd   contraseña asociada la usuario que definimos para la conexión (password associated with the user to define the connection type)
     */
    public function dbConnect($dbsystem, $host, $dbname, $username, $passwd)
    {
        $dsn = $dbsystem.':host='.$host.';dbname='.$dbname;
        try {
            $connection = mysqli_connect($host, $username, $passwd, $dbname);
        } catch (Exception $exception) {
            $connection = null;
            echo 'Error al establecer la conexión: '.$exception->getMessage();
            exit();
        }

        return $connection;
    }
}
