<?php

namespace Bangpound\Atom\Model\Enum;

/**
 * TextConstructType.
 *
 * @category Enums
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
final class TextConstructType
{
    /**
     * @staticvar string (xs:token)
     *
     * @internal enumeration (http://www.w3.org/2001/XMLSchema)
     */
    const text = 'text';

    /**
     * @staticvar string (xs:token)
     *
     * @internal enumeration (http://www.w3.org/2001/XMLSchema)
     */
    const html = 'html';

    /**
     * @staticvar string (xs:token)
     *
     * @internal enumeration (http://www.w3.org/2001/XMLSchema)
     */
    const xhtml = 'xhtml';
}
