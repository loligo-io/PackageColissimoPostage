<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contents StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Contents extends AbstractStructBase
{
    /**
     * The article
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Article[]
     */
    public $article;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Category
     */
    public $category;
    /**
     * Constructor method for contents
     * @uses Contents::setArticle()
     * @uses Contents::setCategory()
     * @param \ColissimoPostage\StructType\Article[] $article
     * @param \ColissimoPostage\StructType\Category $category
     */
    public function __construct(array $article = array(), \ColissimoPostage\StructType\Category $category = null)
    {
        $this
            ->setArticle($article)
            ->setCategory($category);
    }
    /**
     * Get article value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Article[]|null
     */
    public function getArticle()
    {
        return isset($this->article) ? $this->article : null;
    }
    /**
     * Set article value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Article[] $article
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setArticle(array $article = array())
    {
        foreach ($article as $contentsArticleItem) {
            // validation for constraint: itemType
            if (!$contentsArticleItem instanceof \ColissimoPostage\StructType\Article) {
                throw new \InvalidArgumentException(sprintf('The article property can only contain items of \ColissimoPostage\StructType\Article, "%s" given', is_object($contentsArticleItem) ? get_class($contentsArticleItem) : gettype($contentsArticleItem)), __LINE__);
            }
        }
        if (is_null($article)) {
            unset($this->article);
        } else {
            $this->article = $article;
        }
        return $this;
    }
    /**
     * Add item to article value
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Article $item
     * @return \ColissimoPostage\StructType\Contents
     */
    public function addToArticle(\ColissimoPostage\StructType\Article $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Article) {
            throw new \InvalidArgumentException(sprintf('The article property can only contain items of \ColissimoPostage\StructType\Article, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->article[] = $item;
        return $this;
    }
    /**
     * Get category value
     * @return \ColissimoPostage\StructType\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param \ColissimoPostage\StructType\Category $category
     * @return \ColissimoPostage\StructType\Contents
     */
    public function setCategory(\ColissimoPostage\StructType\Category $category = null)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Contents
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
