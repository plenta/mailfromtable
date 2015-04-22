# mailFromTable - contao extension

Inserts an email from the database for an ID in a form

Adds a new field (hidden) field type. It gets a table and column name. As form values only numeric values are accepted. When sending the form, a database lookup in that table for the given ID  (value) ist done, getting the email from the given column. If no value is found a fallback email address is returned.

Use the extension formrecipient to use the email from this field as recipient of the form.

You can use this to pass the id of the member/user of a record (page, article, catalog/metamodels entry, ...) to a form. (You might need inputvar for this.) The filled form will be delivered to the record owner now instead to a predefined email addres without having that email anywhere in the web page source code.

## Contributor

* Christian Barkowsky <hallo@christianbarkowsky.de>
* Jan Theofel