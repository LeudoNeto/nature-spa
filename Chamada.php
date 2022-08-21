<?php

class Chamada
{
    private $name = null;
    private $email = null;
    private $phone = null;
    private $request = null;

    public function setName(string $name) :void
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setEmail(string $email) :void
    {
        $this->email = $email;
    }

    public function getEmail() :string
    {
        return $this->email;
    }

    public function setPhone(string $phone) :void
    {
        $this->phone = $phone;
    }

    public function getPhone() :string
    {
        return $this->phone;
    }

    public function setRequest(string $request) :void
    {
        $this->request = $request;
    }

    public function getRequest() :string
    {
        return $this->request;
    }

    private function connection()
    {
        return new \PDO("mysql:host=localhost;dbname=teste_fullstack", "root", "");
    }

    public function create() :string
    {
        try
        {
            $con = $this->connection();
            $stmt = $con->prepare("INSERT INTO chamadas VALUES (:_name, :_email, :_phone, :_request)");
            $stmt->bindValue("_name", $this->getName(), \PDO::PARAM_STR);
            $stmt->bindValue("_email", $this->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue("_phone", $this->getPhone(), \PDO::PARAM_STR);
            $stmt->bindValue("_request", $this->getRequest(), \PDO::PARAM_STR);
            if ($stmt->execute())
            {
                return '<h5 style="color: green;">SUCESSO! Sua chamada foi recebida.</h5>';
            }
            else
            {
                return '<h5 style="color: red;">ERRO! Não foi possível se conectar com o banco de dados.</h5>';
            }
        }
        catch (Exception $e)
        {
            return '<h5 style="color: red;">ERRO! Não foi possível se conectar com o banco de dados.</h5>';
        }
    }


}

?>