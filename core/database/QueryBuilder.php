<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Search all records from a database table.
     *
     * @param string $table
     */
    public function searchAll($search)
    {
        $statement = $this->pdo->prepare(
            "SELECT n.id, n.name, n.parent_id, n.type
            FROM node n
            WHERE n.name LIKE '%{$search}%'"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get parent record categories.
     *
     * @param int $parentId
     */
    public function getParentCategories($parentId)
    {
        $statement = $this->pdo->prepare(
                "SELECT n.id, n.name, n.parent_id, n.type
                FROM node n
                WHERE id = '$parentId'"
        );
        $statement->execute();

        if ($statement->rowCount() > 0) {
           $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
        
        $data = [];
        foreach ($results as $key => $result) {
            if ($result['parent_id'] > 0) {
                $data = $this->getParentCategories($result['parent_id']);
            }

            $data[] = $result;
        }

        return $data;
    }
}
