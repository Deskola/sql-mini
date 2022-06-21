<?php

namespace Deskola\SqlMini\Configs;

use PDO;
use PDOException;

class DatabaseConfig
{
    /**
     * Database name
     * @var $databaseName
     */
    private $databaseName;

    /**
     * Host name or url where the database is
     * @var $databaseHost
     */
    private $databaseHost;

    /**
     * Username for database admin
     * @var $databaseUser
     */
    private $databaseUser;

    /**
     * Password for database admin
     * @var $databasePassword
     */
    private $databasePassword;

    /**
     * Database driver e.g. mysql
     * @var $databasePassword
     */
    private $databaseType;

    /**
     * Database encoding format
     * @var $databasePassword
     */
    private $charset;

    /**
     * Database connection port
     * @var $databasePassword
     */
    private $port;

    /**
     * Other PDO  format
     * @var $databasePassword
     */
    private $option = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE          =>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    ];
    public $pdo;

    public function __construct($databaseName, $databaseHost, $databaseUser, $databasePassword, $databaseType, $port) {
        $this->databaseName = $databaseName;
        $this->databaseHost = $databaseHost;
        $this->databaseUser = $databaseUser;
        $this->databasePassword = $databasePassword;
        $this->databaseType = $databaseType;
        $this->port = $port;
        $this->charset = "utf8mb4";
    }

    /**
     * Returns PDO object if the database connection is established
     * @return PDO
     */
    public function connect()
    {
        try {

            if (isset($this->port)) {
                $dns = "{$this->databaseType}:host={$this->databaseHost};port={$this->port};dbname={$this->databaseName};charset={$this->charset}";
            }else{
                $dns = "{$this->databaseType}:host={$this->databaseHost};dbname={$this->databaseName};charset={$this->charset}";
            }

            $this->pdo = new PDO($dns, $this->databaseUser, $this->databasePassword, $this->option);
            return $this->pdo;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), intval($e->getCode()));
        }

    }

    /**
     * Returns null to destroy the PDO object
     * @return null
     */
    public function close()
    {
        $this->pdo = null;
        return $this->pdo;
    }


}