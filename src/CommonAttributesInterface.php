<?php

namespace Bangpound\Atom\Model;

/**
 * Class CommonAttributes.
 *
 * Every Atom class inherits from this,
 */
interface CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getLang();

    /**
     * @param string $lang
     */
    public function setLang($lang = null);

    /**
     * @return string
     */
    public function getBase();

    /**
     * @param string $base
     */
    public function setBase($base = null);
}
