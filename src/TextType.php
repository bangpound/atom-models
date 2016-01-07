<?php

namespace Bangpound\Atom\Model;

/**
 * TextType.
 *
 * The Atom text construct is defined in section 3.1 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class TextType extends CommonAttributes
{
    /**
     * @var Enum\TextConstructType
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $type = Enum\TextConstructType::text;

    /**
     * @var string
     */
    protected $text;

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return Enum\TextConstructType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Enum\TextConstructType $type
     */
    public function setType(Enum\TextConstructType $type)
    {
        $this->type = $type;
    }
}
