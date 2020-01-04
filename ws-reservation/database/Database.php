<?php
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/public/wp-config.php';

class Database
{
    /**
     * @var mysqli
     */
    private $connection;

    public function openConnection() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME_RESERVATIONS);

        if ($this->connection->error) {
            throw new Exception("Could not connect to the database");
        }

        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }

}