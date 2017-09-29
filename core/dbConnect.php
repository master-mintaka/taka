<?php
namespace core;


require_once '../config/database.php';


/**
 *
 * @author JHON GRANADOS
 *        
 */
class DbConnect
{
    
    private $driver;
    private $host, $user, $pass, $database, $charset;

    
    /**
     * Initialize the connection parameters
     */
    public function __construct()
    {
        
        $this->driver = DRIVER;
        $this->host = HOST;
        $this->user = USER;
        $this->pass = PASS;
        $this->database = DATABASE;
        $this->charset = CHARSET;
    }//Fin constructor
    
    
    /* Entablish a database connection*/
    public function setConnection()
    {
        if($this->driver=="mysql" || $this->driver==null){
            $con = MySQLi_connect ($this->host, $this->user, $this->pass, $this->database);
            $con->query("SET NAMES '".$this->charset."'");
        }
        
        return $con; //Returns an object which represents the connection to a MySQL Server.
        
    }//fin fuction setConnection
    
}

