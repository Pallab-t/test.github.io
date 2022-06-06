<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/ru/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][0] = 'Текстовый редактор';
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][1] = 'Для получения дополнительной информации о TinyMCE, посетите <a href="http://www.tinymce.com/" title="TinyMCE by moxiecode" target="_blank" rel="noreferrer noopener">http://www.tinymce.com/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][0] = 'Вставка тегов';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][1] = 'Для получения дополнительной информации о вставке тегов, посетите <a href="https://docs.contao.org/books/manual/current/en/04-managing-content/insert-tags.html" title="Онлайн документация Contao" target="_blank" rel="noreferrer noopener">https://docs.contao.org/books/manual/current/en/04-managing-content/insert-tags.html</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][0] = 'Редактор кода';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][1] = 'Для получения дополнительной информации об Ace, посетите <a href="http://ace.c9.io" title="Ace - высокопроизводительный редактор кода для Web" target="_blank" rel="noreferrer noopener">http://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][0] = 'Атрибут colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][1] = 'Contao поддерживает все форматы даты и времени, основанные на функции PHP date(). Однако, чтобы быть уверенным, что любые вводимые пользователем данные могут быть трансформированы в формат UNIX, вы можете использовать только числовой формат даты и времени (j, d, m, n, y, Y, g, G, h, H, i, s)<br /><br /><em>Вот некоторые примеры правильного формата даты и времени</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][0] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][1] = 'YYYY-MM-DD, интернациональный ISO-8601 (напр. 2005-01-28)';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][0] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][1] = 'MM/DD/YYYY, английский формат, напр. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][0] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][1] = 'DD.MM.YYYY, русский формат, напр. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][0] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][1] = 'YY-M-D, без разделительных нулей (напр. 05-1-28)';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][0] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][1] = 'YYYYMMDD, отметка времени (timestamp) (напр. 20050128)';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][0] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][1] = '24 часовой, с минутами и секундами (напр. 20:36:59)';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][0] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][1] = '12 часовой, без разделительных нулей и минут (напр. 8:36)';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][0] = 'Атрибут размеры (sizes)';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][1] = 'HTML-атрибут <code>sizes</code> определяет отображаемую ширину изображения, при необходимости в сочетании с медиа-запросом. Вы можете использовать любое значение CSS для определения ширины.<br><br>Напр. <code>(max-width: 600px) 100vw, 50vw</code> означает ширину изображения 100% от области просмотра для маленьких экранов и 50% от области просмотра для больших экранов.<br><br>И <code>(max-width: 600px) calc(100vw - 20px), 500px</code> означает, что ширина изображения на 20px меньше, чем область просмотра для маленьких экранов, и 500px для больших экранов.<br><br>Для получения дополнительной информации о размерах атрибута посетите <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][0] = 'Плотность пикселей/<br>коэффициенты масштабирования';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][1] = 'Если атрибут размеры (sizes) не определен, этот параметр просто определяет плотность пикселей, которую вы хотите поддерживать. Размеры изображений корректируются автоматически. Напр. <code>1x, 1.5x, 2x</code> создает следующий HTML-код:<br><code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>Если атрибут размеры (sizes) определен, генерируются те же размеры изображения, но для атрибута srcset используются дескрипторы ширины. Напр. изображение шириной 200 пикселей с плотностью <code>1x, 1.5x, 2x</code> создает следующий HTML-код:<br><code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>Для получения дополнительной информации о атрибуте srcset посетите <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';
