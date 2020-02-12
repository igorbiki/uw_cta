<?php

namespace Drupal\uw_cta\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\link\Plugin\Field\FieldType\LinkItem;

/**
 * Plugin implementation of the 'ctafield_type' field type.
 *
 * @FieldType(
 *   id = "uw_cta_field",
 *   label = @Translation("UW CTA field"),
 *   description = @Translation("UW CTA field"),
 *   default_widget = "uw_cta_field_widget",
 *   default_formatter = "uw_cta_field_formatter"
 * )
 */
class CTAFieldItem extends LinkItem {

  /** {@inheritDoc} */
  public static function schema(FieldStorageDefinitionInterface $field_definition ) {
    $schema = parent::schema($field_definition);

    $schema['columns']['cta_type'] = [
      'type' => 'varchar',
      'length' => '255',
      'default' => '',
    ];

    $schema['columns']['cta_theme'] = [
      'type' => 'varchar',
      'length' => '255',
      'default' => '',
    ];

    $schema['columns']['cta_description'] = [
      'type' => 'text',
      'size' => 'normal',
      'not null' => FALSE,
    ];

    return $schema;
  }

  /** {@inheritDoc} */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition ) {
    $properties = parent::propertyDefinitions($field_definition);

    $properties['cta_type'] = DataDefinition::create('string')
      ->setLabel(new TranslatableMarkup('CTA Type'))
      ->setDescription(new TranslatableMarkup('Type of CTA, small, big.'));

    $properties['cta_theme'] = DataDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Theme'))
      ->setDescription(new TranslatableMarkup('Render using selected colour palette (theme).'));

    $properties['cta_description'] = DataDefinition::create('string')
      ->setLabel(new TranslatableMarkup('Description'))
      ->setDescription(new TranslatableMarkup('Text copy that will be rendered.'));

    return $properties;
  }

  /** {@inheritDoc} */
  public function getValue() {
    $parent = parent::getValue();

    return $parent;
  }
}
