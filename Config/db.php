<?php
    namespace Config;
    use Doctrine\DBAL\Connection;
    use Doctrine\DBAL\DBALException;
    use Doctrine\DBAL\DriverManager;

    class DB
    {
        /**
         * Current database connection
         */
        private $connection;

        public function __construct()
        {
            $this->connection = null;
        }

        /**
         * Get current database connection
         * @return Connection|null $db
         * @throws DBALException
         */
        public function getDB()
        {
            if (is_null($this->connection)) {
                $host = getenv('host');
                $port = getenv('port');
                $name = getenv('name');
                $user = getenv('user');
                $passwd = getenv('passwd');

                $connectionParams = [
                    "url" => "postgresql://{$user}:{$passwd}@{$host}:{$port}/{$name}",
                ];

                try {
                    $this->connection = DriverManager::getConnection($connectionParams);
                } catch (DBALException $e) {
                    print($e);
                }

            }

            return $this->connection;
        }
    }
