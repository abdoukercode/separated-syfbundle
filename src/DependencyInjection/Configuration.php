<?php
/**
 * Created by PhpStorm.
 * User: abdou
 * Date: 13/08/18
 * Time: 07:54
 */

namespace Abdou\LoremIpsumBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('abdou_lorem_ips');

        $rootNode
            ->children()
                ->booleanNode('unicorns_are_real')->defaultTrue()->info('Whether or not you believe in unicorns')->end()
                ->integerNode('min_sunshine')->defaultValue(3)->info('How much do you like sunshine?')->end()
                ->scalarNode('word_provider')->defaultNull()->end()
        ->end();

        return $treeBuilder;
    }
}