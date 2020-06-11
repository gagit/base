<?php
/**
 * Created by PhpStorm.
 * User: cgarcia
 * Date: 10/12/15
 * Time: 16:38
 */

namespace App\BaseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

abstract class AbstractRepository extends EntityRepository
{
    /**
     * Agrega el Hint de Row Count de PostgreSql.
     *
     * @param Query $query
     * @return Query
     */
    public function addRowCount(Query $query)
    {
        $query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'App\BaseBundle\Doctrine\Walker\PostgreSQL\RowCount');
        $query->setHint("doctrine.walker.postgresql.row_count", true);
        return $query;
    }
}