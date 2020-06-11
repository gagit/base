<?php

namespace App\BaseBundle\Doctrine\ORM\Id;

use Doctrine\ORM\Id\AbstractIdGenerator;
use Serializable, Doctrine\ORM\EntityManager;
/**
 * Description of UuidGenerator
 *
 * @author Gabriel Toledo
 */
class UuidGenerador extends AbstractIdGenerator{
    
    
    /**
     * Generat un ID para la entity.
     *
     * @param Doctrine\ORM\EntityManager $em The EntityManager to user
     * @param object $entity
     * @return string The generated value.
     * @override
     */
    public function generate(EntityManager $em, $entity)
    {
        return self::v5();
    }
    
    public static function v4() {
        return '{'.sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),

                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),

                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,

                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,

                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        ).'}';
   }
    public static function v5() {
        //return sprintf('%04x%04x-%04x%04x-%04x%04x-%04x-%04x%04x',
        return sprintf('%04x%04x-%04x%04x-%04x%04x-%04x%04x',

                mt_rand(0, 0xffff), mt_rand(0, 0xffff),

                mt_rand(0, 0xffff),mt_rand(0, 0x0fff) | 0x4000,
                
                mt_rand(0, 0x0fff) | 0x4000,mt_rand(0, 0xffff),
                
             //   mt_rand(0, 0x3fff) | 0x8000,

                mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
   }
}

?>