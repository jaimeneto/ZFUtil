<?php
/**
 * Abstract class for extension
 */
require_once 'Zend/View/Helper/Abstract.php';


/**
 * Converts a string to be used on an url with valid characters
 *
 * @category   Case
 * @package    Case_View
 * @subpackage Helper
 */
class ZFUtil_View_Helper_Slug extends Zend_View_Helper_Abstract
{

    /**
     * Filters the provided string.
     *
     * @param  string $value
     * @return string
     * @throws Zend_View_Exception
     */
    public function slug($value)
    {
        require_once 'ZFUtil/Filter/Slug.php';
        $filterSlug = new ZFUtil_Filter_Slug();
        $slug = $filterSlug->filter($value);

        return $slug;
    }

}
