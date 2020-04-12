<?php
    namespace Core;
    use \Config\DB;
    use Doctrine\DBAL\Query\QueryBuilder;

    class AbstractModel
    {
        /**
         * DB table name
         * @var string
         */
        public $tbName;

        /**
         * Query builder
         * @var QueryBuilder
         */
        public $qb;

        public $em;

        public function __construct()
        {
            $connection = new DB();
            $this->em = $connection->getDB();
        }

        public function findAll()
        {
            $qb = $this->em->createQueryBuilder();

            return $qb
                ->select('*')
                ->from($this->tbName)
                ->execute()
                ->fetchAll();
        }

        public function findByID($id)
        {
            $qb = $this->em->createQueryBuilder();

            return $qb
                ->select('*')
                ->from($this->tbName, 't')
                ->where('t.id = :id')
                ->setParameter('id', $id)
                ->execute()
                ->fetch();
        }
    }