<?php

namespace Drupal\uw_cta\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\link\Plugin\Field\FieldWidget\LinkWidget;

/**
 * Plugin implementation of the 'uw_cta_field_widget' widget.
 *
 * @FieldWidget(
 *   id = "uw_cta_field_widget",
 *   module = "uw_cta",
 *   label = @Translation("Cta field widget"),
 *   field_types = {
 *     "uw_cta_field"
 *   }
 * )
 */
class CTAFieldWidget extends LinkWidget {

  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element += parent::formElement($items, $delta, $element, $form, $form_state);

    $item = $items[$delta];

    $element['cta_type'] = [
      '#type' => 'select',
      '#title' => $this->t('CTA text size'),
      '#options' => [
        'small' => $this->t('Small'),
        'normal' => $this->t('Normal'),
        'big' => $this->t('Big'),
      ],
      '#default_value' => $item->cta_type,
    ];

    $element['cta_theme'] = [
      '#type' => 'select',
      '#title' => $this->t('CTA theme'),
      '#options' => [
        'default' => $this->t('Default'),
        'org-math' => $this->t('Math'),
        'org-ahs' => $this->t('AHS'),
      ],
      '#default_value' => $item->cta_theme,
    ];

    $element['cta_description'] = [
      '#type' => 'textfield',
      '#title' => $this->t('CTA Text'),
      '#default_value' => $item->cta_description,
      '#size' => 80,
    ];

    return $element;
  }


}
