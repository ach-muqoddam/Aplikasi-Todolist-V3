<?php 

namespace Repository {

    use \Entity\Todolist;

    interface TodolistRepository
    {

        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository {

        public array $todolist = array();

        // membuat field untuk koneksi
        private \PDO $connection;

        // membuat jalur jika function membutuhkan koneksi
        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(Todolist $todolist): void
        {
            //$number = sizeof($this->todolist) + 1;
            // $this->todolist[$number] = $todolist;

            $sql = "INSERT INTO todolist(todo) VALUES (?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$todolist->getTodo()]);
        }

        function remove(int $number): bool
        {
            // if ($number > sizeof($this->todolist)){
            //     return false;
            // }

            // for ($i = $number; $i < sizeof($this->todolist); $i++) {
            //     $this->todolist[$i] = $this->todolist[$i + 1];
            // }

            // unset($this->todolist[sizeof($this->todolist)]);

            // return true;

            $sql = "SELECT id FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if ($statement->fetch())
            {
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            } else
            {
                return false;
            }

        }

        function findAll(): array
        {
            //return $this->todolist;

            // melakukan SELECT
            $sql = "SELECT id, todo FROM todolist";

            // prepare statement
            $statement = $this->connection->prepare($sql);

            // eksekusi tanpa parameter
            $statement->execute();

            // membuat array kosong
            $result = [];

            // membuat perulangan untuk statement
            foreach ($statement as $row) {

                // membuat todolist
                $todolist = new Todolist();

                // mengambil row id dan todo
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);

                // lalu ditambahkan ke dalam result
                $result[] = $todolist;
            }
            return $result;
        }
    }
}