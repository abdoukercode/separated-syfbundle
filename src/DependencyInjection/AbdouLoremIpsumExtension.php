<?php
/**
 * Created by PhpStorm.
 * User: abdou
 * Date: 13/08/18
 * Time: 06:53
 */

namespace Abdou\LoremIpsumBundle\DependencyInjection;




use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AbdouLoremIpsumExtension extends Extension
{


    /**
     * Loads a specific configuration.
     *
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        //
        //var_dump($configs); die;
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ .'/../Resources/config'));
        $loader->load('services.xml');
        $confugration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($confugration, $configs);
        $definition = $container->getDefinition('abdou_lorem_ipsum.knpu_ipsum');
        if(null !== $config['word_provider']){

            $container->setAlias('abdou_lorem_ipsum.word_provider', $config['word_provider']);
        }
        $definition->setArgument(1, $config['unicorns_are_real']);
        $definition->setArgument(2, $config['min_sunshine']);
        //var_dump($config); die;
    }

    public function getAlias()
    {
        return "abdou_lorem_ips"; // TODO: Change the autogenerated stub
    }
}