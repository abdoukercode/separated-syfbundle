<?php
/**
 * Created by PhpStorm.
 * User: abdou
 * Date: 13/08/18
 * Time: 12:20
 */

namespace Abdou\LoremIpsumBundle;


interface WordProviderInterface
{
    /**
     * Returns an array of words to use for fake text
     * @return array
     */
    public function getWordList(): array;

}