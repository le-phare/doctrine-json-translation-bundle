<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use LePhare\DoctrineJsonTranslation\Form\Type\TranslatedType;

return function (ContainerConfigurator $container) {
    $container->services()
        ->set('lephare_doctrine_json_translation.form.type.translated', TranslatedType::class)
        ->arg('$availableLocales', param('lephare_doctrine_json_translation.locales'))
        ->tag('form.type')
    ;
};
