<?php

namespace Drupal\uw_cta\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\link\Plugin\Field\FieldFormatter\LinkFormatter;

/**
 * Plugin implementation of the 'cta_field_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "uw_cta_field_formatter",
 *   label = @Translation("Cta field formatter"),
 *   field_types = {
 *     "uw_cta_field"
 *   }
 * )
 */
class CtaFieldFormatter extends LinkFormatter {

  /** {@inheritDoc} */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = parent::viewElements($items, $langcode);
    $values = $items->getValue();

    foreach ($elements as $delta => $element) {
      $elements[$delta]['cta_type'] = [
        '#type' => 'markup',
        '#markup' => $this->t('Cty type: @cta', ['@cta' => $values[$delta]['cta_type']]),
      ];
      $elements[$delta]['cta_theme'] = [
        '#type' => 'markup',
        '#markup' => $this->t('Cty theme: @cta', ['@cta' => $values[$delta]['cta_theme']]),
      ];
      $elements[$delta]['cta_description'] = [
        '#type' => 'markup',
        '#markup' => $this->t('Cty description: @cta', ['@cta' => $values[$delta]['cta_description']]),
      ];
    }

    return $elements;
  }


}
