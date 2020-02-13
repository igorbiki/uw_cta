# Drupal module example: uw_cta
Creating new field type, with new formatter and widget. Using link field as parent (extending link field class). 

Adding folowing field columns:
* cta_type - varchar(255) - uses select field on add/edit form.
* cta_theme - varchar(255) - uses select field on add/edit form.
* cta_description - text(normal) - uses textfield add/edit form.

Formatter uses simple markup to display all field properties. 

Widget - defines html elements how add/edit form displays fields.

# How to use this
This is a Drupal module, to install clone this repo to /modules or /modules/custom folder inside your Drupal. Enable it using drush or UI. Once enabled it will add new field type. Try adding new field type called *UW CTA field* from the list of available fields. On display form and display tabs, there are formatter and widget for this new field.

Drupal version used: 8.8.2 


## To do
* Add field template
