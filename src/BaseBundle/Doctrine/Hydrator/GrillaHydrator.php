<?php

/**
 * Created by PhpStorm.
 */

namespace App\BaseBundle\Doctrine\Hydrator;

use Doctrine\ORM\Internal\Hydration\ArrayHydrator;
use PDO;

class GrillaHydrator extends ArrayHydrator {

    /**
     * Hydrates all rows from the current statement instance at once.
     *
     * @return array
     */
    protected function hydrateAllData() {
        $result = array();
        $cache = array();
        $total_rows = 0;

        while ($data = $this->_stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($total_rows == 0 && $data['total_row_count']) {
                $total_rows = $data['total_row_count'];
            }
            parent::hydrateRowData($data, $cache, $result);
        }

        return [
            'result' => $result,
            'total_row_count' => $total_rows
        ];
    }

}
