<?php
    namespace Model;

    use Core\AbstractModel;

    class Note extends AbstractModel
    {
        public $tbName = 'notes';

        public function add($persist)
        {
            $qb = $this->em->createQueryBuilder();

            return $qb
                ->insert($this->tbName)
                ->setValue('val', ':val')
                ->setParameter('val', $persist['val'])
                ->execute();
        }

        public function edit($persist)
        {
            $qb = $this->em->createQueryBuilder();

            return $qb
                ->update($this->tbName)
                ->set('val', ':val')
                ->where('id = :id')
                ->setParameter('val', $persist['val'])
                ->setParameter('id', $persist['id'])
                ->execute();
        }

        public function delete($id)
        {
            $qb = $this->em->createQueryBuilder();
            return $qb
                ->delete($this->tbName)
                ->where('id = :id')
                ->setParameter('id', $id)
                ->execute();
        }
    }