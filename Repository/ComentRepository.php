<?php
namespace Repository {

    use Model\Coment;

    interface ComentRepository
    {
        function insert(Coment $coment): Coment ;
        function findById(int $id): ?Coment;
        function findAll(): array;
    }

    class ComentRepositoryImpl implements ComentRepository {
        public function __construct(private \PDO $connection)
        {
        }
        public function insert(Coment $coment): Coment
        {
            $sql = "INSERT INTO coments (email,coment) VALUES (?,?)";
            $result = $this->connection->prepare($sql);
            $result->execute([$coment->getEmail(),$coment->getComent()]);
            $id = $this->connection->lastInsertId();
            $coment->setId($id);

            return $coment;
        }

        public function findById(int $id): ?Coment
        {
          $sql = "SELECT * FROM coments WHERE id = ? ";
          $result = $this->connection->prepare($sql);
          $result->execute([$id]);

          if($row = $result->fetch()){
              return new Coment(
                  id: $row['id'],
                  email: $row['email'],
                  coment: $row['coment']
              );
          } else {
              return null ;
          }
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM coments";
            $result = $this->connection->query($sql);

            $array = [];

            while($row = $result->fetch()){
                $array[] = new Coment(
                    id: $row['id'],
                    email: $row['email'],
                    coment: $row['coment']
                );
            }
            return $array;
        }
    }
}