# Drupal module example: uw_cta
Creating new field type, with new formatter and widget. Using link field as parent (extending link field class). 

Adding folowing field columns:
* cta_type - varchar(255) - uses select field on add/edit form.
* cta_theme - varchar(255) - uses select field on add/edit form.
* cta_description - text(normal) - uses textfield add/edit form.

Formatter uses simple markup to display all field properties. 

Widget - defines html elements how add/edit form displays fields.

## To do
* Add field template
