<?php
// File           japanese.inc.php / FirebirdWebAdmin
// Purpose        japanese strings definitions
// Author         Shue Miula <shue@xdip.com>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <03/08/08 06:03:00 lb>       
//
// $Id: japanese.inc.php,v 1.12 2005/10/05 19:51:58 lbrueckner Exp $

// strings used for the tabfolder menu
$menu_strings = array('Database' => 'データベース',
                      'Tables' => 'テーブル',
                      'Accessories' => 'アクセサリ',
                      'SQL' => 'SQL',
                      'Data' => 'データ',
                      'Users' => 'ユーザー',
                      'Admin' => '管理',
                      );

// the coordinates for the image area used by the tabfolder menu
$menu_coords = array('Database' => '8,0,89,31',
                     'Tables' => '91,0,152,31',
                     'Accessories' => '154,0,256,31',
                     'SQL' => '258,0,297,31',
                     'Data' => '299,0,344,31',
                     'Users' => '346,0,398,31',
                     'Admin' => '400,0,460,31',
                     );

// strings used as panel titles
$ptitle_strings = array('info' => '情報',
                        'db_login' => 'データベースにログインする',
                        'db_create' => 'データベース作成',
                        'db_delete' => 'データベース削除',
                        'db_systable' => 'システムテーブル',
                        'db_meta' => 'メタデータ',
                        'tb_show' => 'テーブルを見る',
                        'tb_create' => '新規テーブル作成',
                        'tb_modify' => 'テーブル修正',
                        'tb_delete' => 'テーブル削除',
                        'acc_index' => 'インデックス',
                        'acc_gen' => 'ジェネレータ',
                        'acc_trigger' => 'トリガー',
                        'acc_proc' => 'ストアド・プロシージャ',
                        'acc_domain' => 'ドメイン',
                        'acc_view' => 'Views',
                        'acc_udf' => 'User Defined Functions',
                        'acc_exc' => 'Exceptions',
                        'sql_enter' => 'コマンドやスクリプトを入力',
                        'sql_output' => '出力を見る',
                        'tb_watch' => 'テーブルを見る',
                        'dt_enter' => 'データを入力',
                        'dt_export' => 'Export Data',
                        'dt_import' => 'CSV Import',
                        'usr_user' => 'ユーザー',
                        'usr_role' => 'ロール',
                        'usr_grant' => '権限',
                        'usr_cust' => 'Customizing',
                        'adm_server' => 'サーバー状態',
                        'adm_dbstat' => 'データベース状態',
                        'adm_gfix' => 'データベースメンテナンス',
                        'adm_backup' => 'バックアップ',
                        'adm_restore' => '復元',
                        'Open' => '開く',
                        'Close' => '閉じる',
                        'Up' => '上へ',
                        'Top' => 'トップ',
                        'Bottom' => '一番下',
                        'Down' => '下へ',
                        );

// strings to inscribe buttons
$button_strings = array('Login' => 'ログイン',
                        'Logout' => 'ログアウト',
                        'Create' => '作成',
                        'Delete' => '削除',
                        'Select' => '選択',
                        'Save' => '保存',
                        'Reset' => 'リセット',
                        'Cancel' => 'キャンセル',
                        'Add' => '追加',
                        'Modify' => '修正',
                        'Ready' => '準備完了',
                        'Yes' => 'はい',
                        'No' => 'いいえ',
                        'DoQuery' => '問い合わせ実行',
                        'QueryPlan' => '問い合わせをプランする',
                        'Go' => 'ジャンプ!',
                        'DisplAll' => 'すべて表示',
                        'Insert' => '挿入',
                        'Export' => '書き出し',
                        'Import' => '読み込み',
                        'Remove' => '除去',
                        'Drop' => '削除',
                        'Set' => '設定',
                        'Clear' => '消去',
                        'SweepNow' => 'スイープする',
                        'Execute' => '実行',
                        'Backup' => 'バックアップ',
                        'Restore' => '復元',
                        'Reload' => '再読込',
                        'OpenAll' => 'すべて開く',
                        'CloseAll' => 'すべて閉じる',
                        'Defaults' => 'Set Defaults',
                        'Load' => 'Load',
                        );

// strings on the database page
$db_strings = array('Database' => 'データベース',
                    'Host' => 'ホスト',
                    'Username' => 'ユーザー名',
                    'Password' => 'パスワード',
                    'Role' => 'ロール',
                    'Cache' => 'キャッシュ',
                    'Charset' => '文字コードセット',
                    'Dialect' => 'Dialect',
                    'Server' => 'Server',
                    'NewDB' => '新規データベース',
                    'PageSize' => 'ページサイズ',
                    'DelDB' => 'データベースの削除',
                    'SysTables' => 'システムテーブル',
                    'SysData' => 'システムデータ',
                    'FField' => 'フィルターするフィールド',
                    'FValue' => 'フィルターする値',
                    'Refresh' => 'Refresh',
                    'Seconds' => 'Seconds',
                    );

// strings on the table page
$tb_strings = array('Name' => '名称',
                    'Type' => 'データ型',
                    'Length' => 'バイト長',
                    'Prec' => '精度',
                    'PrecShort' => '精度',
                    'Scale' => 'スケール',
                    'Charset' => '文字コード',
                    'Collate' => '文字並び',
                    'Collation' => '文字並び順',
                    'NotNull' => 'ヌル不可',
                    'Unique' => '重複不可',
                    'Computed' => '演算項目',
                    'Default' => '規定値',
                    'Primary' => '規定インデックス',
                    'Foreign' => 'Foreign',
                    'TbName' => 'テーブル名',
                    'Fields' => 'フィールド',
                    'DefColumn' => 'コラムの設定',
                    'SelTbMod' => '選択テーブルの修正',
                    'DefNewCol' => '新規コラム定義',
                    'NewColPos' => '新規コラム位置',
                    'SelColDel' => '選択コラムの削除',
                    'SelColMod' => '選択コラムの修正',
                    'AddCol' => 'コラムの追加',
                    'SelTbDel' => '選択テーブルの削除',
                    'Datatype' => 'データ型',
                    'Size' => 'サイズ',
                    'Subtype' => 'サブタイプ',
                    'SegSiShort' => 'セグメントサイズ',
                    'Domain' => 'ドメイン',
                    'CompBy' => '演算項目',
                    'Table' => 'テーブル',
                    'Column' => 'コラム',
                    'Source' => 'ソース',
                    'Check' => 'チェック',
                    'Yes' => 'はい',
                    'DispCounts' => 'レコード数の表示',
                    'DispCNames' => 'constraint names',
                    'DispDef' => 'default values',
                    'DispComp' => 'computed values',
                    'DropPK' => 'Drop Primary Key',
                    'DropFK' => 'Drop Foreign Key',
                    'DropUq' => 'Drop Unique Constraint',
                    'FKName' => 'Foreign Key Name',
                    'OnUpdate' => 'On Update',
                    'OnDelete' => 'On Delete',
                    'Table1' => 'Table',
                    'Column1' => 'Column',
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => '新規インデックスの作成',
                     'ModIdx' => '%s インデックスの修正',
                     'Name' => '名称',
                     'Active' => 'アクティブ',
                     'Unique' => '重複不可',
                     'Sort' => '並べ替え',
                     'Table' => 'テーブル',
                     'Columns' => 'コラム',
                     'SelIdxMod' => '選択したインデックスを修正',
                     'SelIdxDel' => '選択したインデックスを削除',
                     'ColExpl' => 'コラムをカンマで区切る',
                     'Value' => '値',
                     'SetValue' => '値の設定',
                     'DropGen' => 'ジェネレータを削除',
                     'CreateGen' => '新規ジェネレータの作成',
                     'StartVal' => '開始値',
                     'CreateTrig' => '新規トリガーの作成',
                     'SelTrigMod' => '選択したトリガーを修正',
                     'SelTrigDel' => '選択したトリガーを削除',
                     'Type' => 'データ型',
                     'Pos' => '位置',
                     'Phase' => 'Phase',
                     'Position' => '位置',
                     'Status' => '状態',
                     'Source' => 'ソース',
                     'ModTrig' => '%s トリガーを修正する',
                     'CreateDom' => '新規ドメインの作成',
                     'SelDomDel' => '選択ドメインの削除',
                     'SelDomMod' => '選択ドメインの修正',
                     'Size' => 'サイズ',
                     'Charset' => '文字コード',
                     'Collate' => '文字並び',
                     'PrecShort' => '精度',
                     'Scale' => 'スケール',
                     'Subtype' => 'サブタイプ',
                     'SegSiShort' => 'セグメント',
                     'ModDomain' => '%s ドメインを修正',
                     'Generator' => 'ジェネレータ',
                     'Index' => 'インデックス',
                     'Trigger' => 'トリガー',
                     'Domain' => 'ドメイン',
                     'CreateProc' => 'プロシージャの作成',
                     'ModProc' => '%s プロシージャの修正',
                     'SelProcMod' => '選択プロシージャの修正',
                     'SelProcDel' => '選択プロシージャの削除',
                     'SP' => 'ストアドプロシージャ',
                     'Param' => 'パラメータ',
                     'Return' => '戻る',
                     'CreateView' => '新しいビューを作成する',
                     'SelViewDel' => '選択したビューを削除する',
                     'SelViewMod' => '選択したビューを修正する',
                     'CheckOpt' => 'チェックオプション付',
                     'ModView' => '%s ビューを修正する',
                     'Yes' => 'はい',
                     'No' => 'いいえ',
                     'Module' => 'Module',
                     'EPoint' => 'Entrypoint',
                     'IParams' => 'Input Parameters',
                     'Returns' => 'Returns',
                     'UDF' => 'user defined function',
                     'SelUdfDel' => 'Select function to delete',
                     'Exception' => 'Exception',
                     'Message' => 'Message',
                     'SelExcDel' => 'Select exception to delete',
                     'CreateExc' => 'Create new exception',
                     'SelExcMod' => 'Select exception to modify',
                     'ModExc' => 'Modify exception %s',
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => 'バッファからの値を表示',
                     'SelTable' => 'テーブルの選択',
                     'Config' => '設定',
                     'Column' => 'コラム',
                     'Show' => '表示',
                     'Sort' => '並べ替え',
                     'BlobLink' => 'BLOBにリンク',
                     'BlobType' => 'BLOB種別',
                     'Rows' => '行',
                     'Start' => '開始',
                     'Dir' => 'ディレクション',
                     'ELinks' => 'リンクの編集',
                     'DLinks' => 'リンクの削除',
                     'Asc' => '正順',
                     'Desc' => '逆順',
                     'Restrict' => '結果を制限する条件。 例えば… フィールド名>=1000',
                     'Prev' => '戻る',
                     'Next' => '次へ',
                     'End' => '最後',
                     'Total' => '合計',
                     'Edit' => '編集',
                     'Delete' => '削除',
                     'Yes' => 'はい',
                     'No' => 'いいえ',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars' => 'Text Blob Characters',
                     );

// strings on the data page
$dt_strings = array('SelTable' => 'テーブルの選択',
                    'Table' => 'テーブル',
                    'EditFrom' => '%1$s%2$sテーブルを編集',
                    'FileName' => 'ファイル名',
                    'EntName' => '名称入力',
                    'FileForm' => 'ファイル形式',
                    'ConvEmpty' => 'on import convert empty values to NULL',
                    'CsvForm1' => 'すべての値を引用符 (") で囲み、カンマで区切ります',
                    'CsvForm2' => '値中の引用符は二重引用符になります',
                    'CsvForm3' => 'データセットは改行(0x0a)で区切ります',
                    'ColConf' => 'Configuration for Column %1$s',
                    'ColFKLook' => 'Column for foreign key lookup',
                    'FKLookup' => 'foreign key lookup',
                    'IARow' => 'insert another row',
                    'INRow' => 'insert as a new row',
                    'Drop' => 'drop',
                    'ExpOptCsv' => 'CSV-Data',
                    'ExpOptExt' => 'External Table',
                    'ExpOptPhp' => 'PHP Code',
                    'ExpOptSql' => 'SQL',
                    'ExpOptXml' => 'XML',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb' => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile' => 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts' => 'General Options',
                    'ReplNull' => 'Replace <i>NULL</i> values by',
                    'DFormat' => 'Date format',
                    'TFormat' => 'Time format',
                    'CsvOpts' => 'CSV-Options',
                    'FTerm' => 'Fields terminated by',
                    'FEncl' => 'Fields enclosed by',
                    'FTEncl' => 'Field types to enclose',
                    'All' => 'all',
                    'Numeric' => 'numeric',
                    'FEsc' => 'Escape character',
                    'LTerm' => 'Lines terminated by',
                    'FNamesF' => 'Field names at first row',
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => '新規ユーザーの作成',
                     'ModUser' => 'ユーザー： %sを修正',
                     'UName' => 'ユーザー名',
                     'FName' => 'ファーストネーム',
                     'MName' => 'ミドルネーム',
                     'LName' => '姓',
                     'UserID' => 'ユーザーID',
                     'GroupID' => 'グループID',
                     'SysdbaPW' => 'SYSDBA パスワード',
                     'Required' => '作成・修正・削除に必要',
                     'USelMod' => '選択したユーザーを修正',
                     'USelDel' => '選択したユーザーを削除',
                     'Password' => 'パスワード',
                     'RepeatPW' => 'パスワードの確認',
                     'Name' => '名前',
                     'Owner' => 'オーナー',
                     'Members' => 'メンバー',
                     'Role' => 'ロール',
                     'User' => 'ユーザー',
                     'CreateRole' => '新規ロールの作成',
                     'RoleSelDel' => '選択したロールの削除',
                     'RoleAdd' => 'ロールに追加',
                     'RoleRem' => 'ロールから除去',
                     'ColSet' => 'Color Settings',
                     'CBg' => 'Background',
                     'CPanel' => 'Panel Frame',
                     'CArea' => 'Panel Background',
                     'CHeadline' => 'Headline Background',
                     'CMenubrd' => 'Menuborder',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg' => 'Iframe Background',
                     'CLink' => 'Links',
                     'CHover' => 'Links while Mouseover',
                     'CSelRow' => 'Selected Rows',
                     'CSelInput' => 'Selected Input Fields',
                     'CFirstRow' => 'Odd Table Rows',
                     'CSecRow' => 'Even Table Rows',
                     'Appearance' => 'Appearance',
                     'Language' => 'Language',
                     'Fontsize' => 'Fontsize in Points',
                     'TACols' => 'Textarea Columns',
                     'TARows' => 'Textarea Rows',
                     'IFHeight' => 'Iframe Height in Pixel',
                     'Attitude' => 'Attitude',
                     'AskDel' => 'Confirm deletion of objects and data',
                     'Yes' => 'はい',
                     'No' => 'いいえ',
                    );

// strings on the admin page
$adm_strings = array('SysdbaPW' => 'SYSDBA パスワード',
                     'Required' => 'あなたがデータベースのオーナーではない場合に必要です',
                     'Sweeping' => 'スイープ',
                     'SetInterv' => 'スイープ間隔 (トランザクション数)',
                     'DBDialect' => 'データベースのDialect',
                     'Buffers' => 'キャッシュバッファ',
                     'AccessMode' => 'アクセスモード',
                     'WriteMode' => '書き込みモード',
                     'ReadWrite' => '読み書き可能',
                     'ReadOnly' => '書き込み不可',
                     'Sync' => '同期',
                     'Async' => '非同期',
                     'UseSpace' => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve' => 'reserve',
                     'DataRepair' => 'データ修復',
                     'Validate' => '有効なデータのみ',
                     'Full' => '完全に修復する',
                     'Mend' => '修復する',
                     'NoUpdate' => '修復しない',
                     'IgnoreChk' => 'チェックサムエラーを無視する',
                     'Transact' => 'トランザクション',
                     'Shutdown' => 'シャットダウン',
                     'Commit' => 'コミットする',
                     'Rollback' => 'ロールバックする',
                     'TwoPhase' => '二層復旧',
                     'AllLimbo' => 'すべての無効なトランザクション',
                     'NoConns' => '新規接続を使用しない',
                     'NoTrans' => '新規接続を使用する',
                     'Force' => '強制',
                     'ForSeconds' => '%s 秒間待つ',
                     'Reconnect' => 'シャットダウン後FirebirdWebAdminを接続しなおす',
                     'Rescind' => 'シャットダウンを取り消します',
                     'BTarget' => 'バックアップ先',
                     'FDName' => 'ファイル名或いはデバイス名',
                     'Options' => 'オプション',
                     'BConvert' => '外部ファイルを内部テーブルにコンバートする',
                     'BNoGC' => 'バックアップ中にガベージコレクションしない',
                     'BIgnoreCS' => 'バックアップ中はチェックサムエラーを無視する',
                     'BIgnoreLT' => 'バックアップ中は無効なトランザクションを無視する',
                     'BTransport' => '移行できない形式でバックアップ',
                     'BMDOnly' => 'メタデータのみバックアップ',
                     'BMDOStyle' => '旧形式のメタデータ',
                     'RSource' => '復元元',
                     'RTarget' => '復元先',
                     'TargetDB' => '対象データベース',
                     'NewFile' => '新しいファイルに復元する',
                     'RestFile' => '既存のファイルを置き換える',
                     'PageSize' => 'ページサイズ',
                     'UseAll' => 'すべてのデータページを100%埋めたデータべースに復元',
                     'OneAtTime' => 'テーブルごとに復元',
                     'IdxInact' => 'インデックスを無効化して復元',
                     'NoValidity' => '復元先データベースからデータ規約を削除する',
                     'KillShad' => '以前に定義されたシャドウファイルを作成しません',
                     'ConnAfter' => '復元されたデータベースにFirebirdWebAdminで接続する',
                     'Verbose' => 'Verbose',
                     'Analyze' => 'Analyze',
                     );

// strings for the info-panel
$info_strings = array('Connected' => 'は次のデータベースに接続しました：',
                      'ExtResult' => '次のコマンドの戻り値：',
                      'FBError' => '次のエラー：',
                      'ExtError' => '次の外部コマンドエラー：',
                      'Error' => 'エラー：',
                      'Warning' => '警告：',
                      'Message' => 'メッセージ：',
                      'ComCall' => 'コマンド呼び出し：',
                      'Debug' => 'デバッグ出力：',
                      'PHPError' => 'PHP エラー',
                      );

$MESSAGES = array('BLOB_BROKEN_INFO' => "BLOBサポートは壊れています。 (php4.0.2 と php4.0.3)。<br>\n"
                                            ."もしもBLOBサポートが必要ならPHPをアップデートして下さい。<br>\n",
                  'SP_CREATE_INFO' => 'FirebirdWebAdminはストアドプロシージャを作成しました "'.SP_LIMIT_NAME.'" Watch Table 関数により使用され '
                                            ."データベース内に保存されます。<br>\n"
                                            .'もしも、数人がFirebirdWebAdminを同時に使用する場合 '
                                            ."右のファイルのWATCHTABLE_METHODの値を変更して下さい。 inc/configuration.inc.php.<br>\n",
                  'EDIT_ADD_PRIMARY' => "If editing is enabled the primary key fields must be selected for showing in the watch table configuration.<br>\n"
                                            .'プログラムは必要なプライマリーインデックスフィールドを自動選択します。',
                  'CSV_IMPORT_COUNT' => "%1\$d 行が %2\$s からインポートれました。<br>\n",
                  'CONFIRM_TABLE_DELETE' => '本当に次のテーブルを削除して宜しいですか？： %s',
                  'CONFIRM_COLUMN_DELETE' => '本当に %2$sテーブルから %1$s を削除しても宜しいですか？',
                  'CONFIRM_DB_DELETE' => '本当に次のデータベースを削除して宜しいですか？： %s',
                  'CONFIRM_TRIGGER_DELETE' => '本当に次のトリガーを削除して宜しいですか？： %s',
                  'CONFIRM_DOMAIN_DELETE' => '本当に次のドメインを削除して宜しいですか？： %s',
                  'CONFIRM_INDEX_DELETE' => '本当に次のインデックスを削除して宜しいですか？： %s',
                  'CONFIRM_GEN_DELETE' => '本当に次のジェネレータを削除して宜しいですか？： %s',
                  'CONFIRM_USER_DELETE' => '本当に次のユーザーを削除して宜しいですか？： %s',
                  'CONFIRM_ROW_DELETE' => '本当に次の行を削除して宜しいですか？： %s %s',
                  'CONFIRM_SP_DELETE' => '本当に次のストアドプロシージャを削除して宜しいですか？： %s',
                  'CONFIRM_VIEW_DELETE' => '本当に次のビューを削除しますか？ %s',
                  'CONFIRM_UDF_DELETE' => 'Do you really want to delete the function %s?',
                  'CONFIRM_EXC_DELETE' => 'Do you really want to delete the exception %s?',
                  'NO_VIEW_SUPPORT' => "ビューの編集と削除は現在サポートされていません。<br>\n",
                  'CREATE_DB_SUCCESS' => "%s データベースの作成に成功しました。\n",
                  'HAVE_DEPENDENCIES' => ' %1$s %2$s: を削除する前に %3$s を削除して下さい。',
                  'COOKIES_NEEDED' => 'You have to enable cookies in your browser settings if you want to use the customizing feature!',
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS' => "あなたが選択したテーブルのBLOBフィールドは除外されました。<br>\n"
                                            ."ただ、テキストBLOBのCVS書き出しだけがサポートされています。<br>\n",
                  'CAN_NOT_IMPORT_BLOBS' => "あなたが選択したテーブルのBLOBフィールドは除外されました。<br>\n"
                                            ."ただ、テキストBLOBのCVS読込だけがサポートされています。<br>\n",
                  'SELECT_TABLE_FIRST' => "最初にテーブルを選択して下さい。<br>\n",
                  'SELECT_FILE_FIRST' => "最初に読込ファイルを指定して下さい。<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "ドメインベースでのコラムの変更はInterBaseではサポートされていません。<br>\n"
                                            ."アクセサリページでドメインを変更して下さい。<br>\n",
                  'CAN_NOT_EDIT_TABLE' => "選択されたテーブルの編集は出来ません。<br>\n"
                                            ."プライマリーキーを含むテーブルだけが編集可能です。<br>\n",
                  'CAN_NOT_DEL_TABLE' => "選択されたテーブルの削除は出来ません。<br>\n"
                                            ."プライマリーキーを含むテーブルだけが削除可能です。<br>\n",
                  'DEL_NO_PERMISSON' => "あなたは次のテーブルの削除・修正権を持っていません： %s<br>\n",
                  'EDIT_NO_PERMISSON' => "あなたは次のテーブルの削除・修正権を持っていません： %s<br>\n",
                  'CAN_NOT_ACCESS_DIR' => "ウェブサーバーは次のディレクトリへのアクセス権を持っていません： %s<br>\n",
                  'NAME_IS_KEYWORD' => "%s はInterBaseの予約語です。<br>\n",
                  'NAMES_ARE_KEYWORDS' => "%s はInterBaseの予約語です。<br>\n",
                  'NEED_SYSDBA_PW' => "ユーザーの追加・修正・削除にはSYSDBAのパスワードが必要です。<br>\n",
                  'PW_REQUIRED' => "パスワードが必要です。<br>\n",
                  'UN_REQUIRED' => "ユーザー名が必要です。<br>\n",
                  'PW_WRONG_REPEAT' => "パクワードの確認が違います。<br>\n",
                  'BAD_ISQLPATH' => "%s ではISQLバイナリは有効ではありません!<br>\n"
                                            ."inc/configuration.php中のバイナリパスをチェックして下さい。<br>\n",
                  'BAD_TMPPATH' => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n",
                  );

$ERRORS = array('CREATE_DB_FAILED' => '<b>%s</b>データベースの作成に失敗しました！',
                  'NO_DB_SELECTED' => '最初にデータベースを選択して下さい。<br>',
                  'WRONG_DB_SUFFIX' => 'データベース名は右の拡張子で終わらなければなりません： <b>%s</b>',
                  'DB_NOT_ALLOWED' => '<b>%s</b> のアクセスが無効です。<br>'
                                             .'(inc/configuration.php中の $ALLOWED_FILES と $ALLOWED_DIRS )',
                  'NO_IBASE_MODULE' => '<b>PHPのInterBaseサポートが無効になっています！</b><br>'
                                            .'右のオプションで再コンパイルして下さい。 --with-interbase[=DIR]<br>'
                                            .'或いは php.ini で interbase.so や interbase.dll をロードする設定にして下さい。',
                  'DISABLED_CMD' => 'SQLステートメントに含まれる "%s" は設定中に見つかりません！',
                  'BAD_BINPATH' => "右のコマンドが見つかりません！ <b>%s</b> \n"
                                            ."inc/configuration.inc.phpのBINPATHの値を確認して下さい。\n",
                  );

// charset encoding  for html output
$charset = 'UTF-8';
