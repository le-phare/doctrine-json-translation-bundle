# DoctrineJsonTranslationBundle

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)



## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

## Features

- Doctrine type to store translations in multiple locales in JSON format
- Symfony form type to edit translations

## Installation

```sh
composer require lephare/doctrine-json-translation-bundle
```

## Usage

### 1. Configure Doctrine

First, you need to register the custom `translated` type in your Doctrine configuration.

Add this to `config/packages/doctrine.yaml`:

```yaml
# config/packages/doctrine.yaml
doctrine:
    dbal:
        types: LePhare\DoctrineJsonTranslation\DBAL\TranslatedType
```

### 2. Use in an entity

```php
#[ORM\Column(type: 'translated')]
protected TranslatedField $title;
```

### 3. Use in a form

```php
use LePhare\DoctrineJsonTranslation\Form\Type\TranslatedType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TranslatedType::class)
        ;
    }
}
```