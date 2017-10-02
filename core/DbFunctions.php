<?php
namespace core;
require_once 'dbConnect.php';

/**
 *
 * @author JHON GRANADOS
 *        
 */
class DbFunctions
{
    
    private $table;
    private $con_obj;
    private $connect;

    /* Class constructor
     * Recieve a table name to do any query defined by this class
     */
    public function __construct($table)
    {
        $this->table = (string)$table;
        $this->connect = new DbConnect(); //Instances DbConnect class
        $this->con_obj = $this->connect->setConnection(); //Get db connection object
    }
    
    // Returns DbConnect object
    public function getConnection()
    {
        return $this->connect;
    }
    
    // Returns db conection object
    public function con_obj()
    {
        return $this->con_obj;
    }

    /* The following methods will be used for interact with the data base entity defined in
    * the $table attibute.
    * If you need to use this class with different tables you will need to declare so many
    * objects as tables you will going to use
    */
    
    
    

}//End Class DbFunctions



