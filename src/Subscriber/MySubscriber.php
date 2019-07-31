<?php declare(strict_types=1);

namespace Bc\BrandCrockCurrencySwitch\Subscriber;

use Shopware\Core\Checkout\Customer\CustomerEvents;
use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return[
            CustomerEvents::CUSTOMER_LOGIN_EVENT => 'onAccountLoaded'
        ];
    }

    public function onAccountLoaded(EntityLoadedEvent $event)
    {
        var_dump($event);
        exit;
        echo "shakeel";
        exit;
//        $exampleConfig = $this->systemConfigService->get('PluginQuickStart.config.CustomField');
//        return $exampleConfig;
        // Do something
        // E.g. work with the loaded entities: $event->getEntities()

       // $configName = $this->container->get('shopware.plugin.cached_config_reader')->getByPluginName('PluginQuickStart');
        //var_dump($configName);
      //die("sdfasdf");

      // return $this->renderStorefront('@Storefront/layout/header/actions/account-widget.html.twig', ['page' => $exampleConfig]);
    }
}