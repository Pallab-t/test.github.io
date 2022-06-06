<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/ja/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][0] = 'リッチテキストエディター';
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][1] = 'リッチテキストエディター、TinyMCEのさらに詳しい情報は<a href="http://www.tinymce.com/" title="TinyMCE by moxiecode" target="_blank" rel="noreferrer noopener">http://www.tinymce.com/</a>を参照してください。';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][0] = '挿入タグ';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][1] = '挿入タグのさらに詳しい情報は<a href="https://docs.contao.org/books/manual/current/en/04-managing-content/insert-tags.html" title="Contaoオンラインドキュメント" target="_blank" rel="noreferrer noopener">https://docs.contao.org/books/manual/current/en/04-managing-content/insert-tags.html</a>を参照してください。';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][0] = 'コードエディター';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][1] = 'コードエディター、Aceのさらに詳しい情報は<a href="http://ace.c9.io" title="Ace - The High Performance Code Editor for the Web" target="_blank" rel="noreferrer noopener">http://ace.c9.io</a>を参照して下さい。';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][0] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][1] = 'ContaoはPHPのdate()関数が解釈できる、すべての日付と時刻の書式をサポートしています。しかし、どのような入力でもUNIXタイムスタンプに確実に変換できるように、バックエンドでは数値の日付と時刻の書式(j, d, m, n, y, Y, g, G, h, H, i, s)だけ使用できます。<br><br><strong>サイト構造(ウェブサイトのルートのページ)で、フロントエンドでは様々な書式を使用できます。</strong><br><br><em>有効な日付と時刻の書式の例を示します:</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][0] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][1] = 'YYYY-MM-DD、国際規格ISO-8601、例: 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][0] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][1] = 'MM/DD/YYYY、英語の書式、例: 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][0] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][1] = 'DD.MM.YYYY、ドイツ語の書式、例: 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][0] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][1] = 'YY-M-D、先頭にゼロを付けない月と日、例: 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][0] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][1] = 'YYYYMMDD、タイムスタンプ, 例: 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][0] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][1] = '24時間表記の時間と分と秒、例: 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][0] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][1] = '12時間表記でゼロを付けない時間と分、例: 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][0] = '大きさの属性';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][1] = 'HTMLの<code>sizes</code>属性はオプションでメディアクエリと組み合わせて、画像の幅を指定します。幅の指定には、どのようなCSSの値でも使用できます。<br><br>例えば、<code>(max-width: 600px) 100vw, 50vw</code>は、画像の幅を小さな画面ではviewportの50%に、より大きな画面ではviewportの50%とにします。<br><br>そして<code>(max-width: 600px) calc(100vw - 20px), 500px</code>は、画像の幅を小さな画面ではviewportより20px小さく、より大きな画面では500pxにします。<br><br>さらに詳しいsizes属性の情報については<a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>を参照してください。';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][0] = '画素密度/<br>倍率';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][1] = 'sizes属性を指定していない場合は、この設定でサポートしたい画素密度を指定します。画像の寸法は自動的に調整します。例えば、<code>1x, 1.5x, 2x</code>は以下のHTMLのコードを生成します:<br><code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>sizes属性を指定してる場合は同じ大きさの画像を生成しますが、width記述子をsrcset属性に使用します。例えば、画素密度が<code>1x, 1.5x, 2x</code>の200ピクセルの画像は以下のHTMLのコードを生成します:<br><code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>さらに詳しいsrcset属性の情報については<a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>を参照してください。';
