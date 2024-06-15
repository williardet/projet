<?php
class Model
{
    protected string $dsn = 'mysql:host=127.0.0.1;dbname=baseAppl';
    protected $username = 'root';
    protected $password = '';
    protected PDO|NULL $pdo = null;
    protected string $table;
    public function ouvrirConnexion(): void
    {
        try {
            //verifier si la connexion est déja ouverte
            if ($this->pdo == null) {
                $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            }
        }
        //capturer
        catch (PDOException $e) {
            echo "Erreur de connexion:" . $e->getMessage();
        }
    }
    public function fermerConnexion(): void
    {
        //verifier si la connexion est déja ouverte
        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }
    protected function executeSelect(string $sql, bool $fetch = false): array
    {
        try {
            //verifier si la connexion est déja ouverte
            $stm = $this->pdo->query($sql);
            return $fetch? $stm->fetch(PDO::FETCH_ASSOC) : $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        //capturer
        catch (PDOException $e) {
            echo "Erreur de connexion:" . $e->getMessage();
            return [];
        }
    }
    public function executeUpdate(string $sql): int
    {
        try {
            return $this->pdo->exec($sql);
        }
        //capturer
        catch (PDOException $e) {
            echo "Erreur de connexion:" . $e->getMessage();
            return 0;
        }
    }

    public function findAll(): array
    {
        return $this->executeSelect("SELECT * FROM $this->table");
    }
}
