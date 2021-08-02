<?php


/**
 * Description of TransportSmtpFactory
 *
 * @author Felix Botta
 */

namespace Core\Factories;

use Zend\Mail\Transport\SmtpOptions;
use Interop\Container\ContainerInterface;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\ServiceManager\Factory\FactoryInterface;

class TransportSmtpFactory implements FactoryInterface {
    
    public function __invoke(ContainerInterface $container, $requestedName, mixed $options = null): object {
        $config = $container->get('config');
        $transport = new SmtpTransport();
        $options = new SmtpOptions($config['mail']);
        $transport->setOptions($options);
        
        return $transport;
    }

}
