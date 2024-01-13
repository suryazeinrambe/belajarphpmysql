<?php
namespace Model{
    class Coment
    {
        public function __construct(private ?int $id = null,
                                    private ?string $email = null,
                                    private ?string $coment = null )
        {

        }

        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email)
        {
            $this->email = $email;
        }

        public function getComent(): string
        {
            return $this->coment;
        }

        public function setComent(string $coment)
        {
            $this->coment = $coment;
        }


    }
}