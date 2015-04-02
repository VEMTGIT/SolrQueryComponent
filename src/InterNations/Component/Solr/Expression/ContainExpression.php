<?php
namespace InterNations\Component\Solr\Expression;

use InterNations\Component\Solr\Util;


class ContainExpression extends Expression
{
    /**
     * Wildcard character
     *
     * @var string
     */
    protected $wildcard;

    /**
     * @var string
     */
    protected $word;

    /**
     * @param Expression|string $word
     */
    public function __construct($word)
    {
        $this->wildcard = '*';
        $this->word = $word;
    }

    /**
     * @SuppressWarnings(PMD.NPathComplexity)
     * @SuppressWarnings(PMD.CyclomaticComplexity)
     *
     * @return string
     */
    public function  __toString()
    {
        $word = Util::escape($this->word);

        $expr = $this->wildcard . $word . $this->wildcard;

        return $expr;
    }
}
