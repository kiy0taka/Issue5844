<?php

namespace Plugin\Issue5844\Entity;

use Eccube\Annotation\EntityExtension;
use Doctrine\ORM\Mapping as ORM;

/**
 * @EntityExtension("Plugin\Api42\Entity\WebHook")
 */
trait WebHookTrait
{
    /**
     * @ORM\Column(name="hoge", type="string", length=255, nullable=true)
     */
    public $hogeProperty;
}