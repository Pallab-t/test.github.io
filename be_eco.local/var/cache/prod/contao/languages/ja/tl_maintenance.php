<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/ja/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'データを消去';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = '消去や再作成したいデータを選択してください。';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = '作業';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = '説明';
$GLOBALS['TL_LANG']['tl_maintenance']['maintenanceMode'] = '保守モード';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'データを消去';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'データを消去しました。';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = '%sを入力してください。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = '検索のインデックスを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = "<code>tl_seach</code>と<code>tl_search_index</code> のテーブルを切り捨てます。その後、検索のインデックスを再構築しなければな\nりません(上を参照)。";
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = '復元のテーブルを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = '<code>tl_undo</code> のテーブルを切り捨てます。この作業は恒久的にこれらのレコードを削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'バージョンを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'レコードの以前のバージョンを保持している、 <code>tl_version</code> のテーブルを切り捨てます。この作業は恒久的にこれらのレコードを削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'システムログの消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'すべてのシステムログの項目を保持しているテーブル<code>tl_log</code>を切り捨てます。この処理で、これらのレコードを完全に削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][0] = 'クローラーのキューを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][1] = ' クロールのプロセスのキューの情報を保持している<code>tl_crawl_queue</code>のテーブルの内容を消去します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = '画像キャッシュの消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = '自動的に生成した画像を削除し、次に共有キャッシュを消去します。これで削除したリソースへのリンクはなくなります。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'スクリプトのキャッシュを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = '自動的に生成した拡張子が<code>.css</code>と<code>.js</code>のファイルを削除し、内部のスタイルシートを再作成して、そして共有キャッシュを消去します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = '共有キャッシュを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'フロントエンドのページのキャッシュ版を削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['search'][0] = '検索結果を消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['search'][1] = '検索結果のキャッシュ版を削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = '一時フォルダーを消去';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = '一時ファイルを削除します。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'XMLファイルを再作成';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'XMLファイル(サイトマップとフィード)を再作成してページキャッシュを消去します。これで削除したリソースへのリンクはなくなります。';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'シンボリックリンクを再作成';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = '<code>web/</code>フォルダー(ドキュメントルート)のシンボリックリンクを再作成します。';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'クローラー';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'クローラーを開始';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][0] = '有効な機能';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][1] = 'クローラーは見つけられるすべてのURLを巡回します。これらの結果に行いたいことを指定できます。';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][0] = 'フロントエンドのメンバー';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][1] = '保護したページのインデックスを行うために自動的にフロントエンドのメンバーにログインします。';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = '現在クローラーが動作中です。結果を見るには終了するまで待ってください。';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadDebugLog'] = 'デバッグログをダウンロード';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadSubscriberLog'] = 'ログをダウンロード';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = '検索インデックスを更新';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = '切れたリンクを検査';
