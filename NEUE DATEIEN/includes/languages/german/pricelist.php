<?php
define('TABLE_HEADING_PRODUCTS', 'Produkt');
define('TABLE_HEADING_MODEL', 'Modell');
define('TABLE_HEADING_MANUFACTURER', 'Hersteller');
define('TABLE_HEADING_WEIGHT', 'Gewicht');
define('TABLE_HEADING_PRICE_INC', 'incl. ');
define('TABLE_HEADING_PRICE_EX', 'excl. ');
define('TABLE_HEADING_NOTES_A', 'Anmerkung (A)');
define('TABLE_HEADING_NOTES_B', 'Anmerkung (B)');

define('TEXT_PL_PAGE', 'Seite: ');
define('TEXT_PL_HEADER_TITLE',  '%s Druckbare Preisliste');
define('TEXT_PL_HEADER_TITLE_PRINT', 'Druckbare Preisliste %s');
define('TEXT_PL_SCREEN_INTRO','%s Produkte ansehen, klicken Sie auf die Links für detaillierte Produktinformationen.');
define('TEXT_PL_NOTHING_FOUND', 'Keine Produkte oder Kategorien entsprechen Ihrer Anfrage, bitte treffen Sie eine andere Auswahl.');

define('STORE_NAME_ADDRESS_PL', str_replace("\n", " - ", STORE_NAME_ADDRESS));
define('TEXT_PL_AVAIL_TILL', 'Sonderangebot gültig bis: ');
define('TEXT_PL_SPECIAL', 'Sonderangebot ');
define('TEXT_PL_PRODUCT_HAS_NO_PRICE', '--.--');
define('TEXT_PL_CATEGORIES', 'Alle Kategorien');
define('NAVBAR_TITLE', 'Druckbare Preisliste');
define('TABLE_HEADING_SOH', 'Lagerbestand'); // bmoroney
define('TABLE_HEADING_ADDTOCART', 'In den Warenkorb legen');//Added by Vartan Kat for Add to cart button
define('PL_TEXT_GROUP_NOT_ALLOWED', 'Sorry, Sie dürfen diese Liste nicht sehen.');
define('PL_PRINT_ME', 'Diese Seite drucken');
define('TEXT_OPTIONS_AVAILABLE', 'verfügbare Optionen:');
define('TEXT_INCL', '-');
define('TEXT_OPTION_IS_FILE', 'Datei Upload');
define('TEXT_OPTION_IS_TEXT', 'Text Eingabe');
define('TEXT_OPTION_IS_PER_WORD', ', pro Wort');
define('TEXT_OPTION_FREE_WORDS', ', %u Wort(e) gratis.');   //-%u is filled in with the number of free words
define('TEXT_OPTION_IS_PER_LETTER', ', pro Buchstabe');
define('TEXT_OPTION_FREE_LETTERS', ', %u Buchstabe(n) gratis.');   //-%u is filled in with the number of free letters
