# DOSA-ADMIN-OPENAPI-SCHEMA

DOSA 連携 API 用のスキーマ定義ファイルです。

## Directory Structures

```
.
├── README.md
├── form_post_sample - フォーム連携サンプルコード
│   ├── README.md
│   ├── index.html
│   └── index.php
├── openapi.yaml - API定義ファイル
└── docs
    └── index.html - API仕様書
```

## Editor

1. Docker で起動

   ```
   $ docker pull swaggerapi/swagger-editor
   $ docker run -d -p 8080:8080 swaggerapi/swagger-editor
   ```

2. ブラウザでアクセス

   [http://localhost:8080](http://localhost:8080)

3. `File > Import file` より `openapi.yaml` を読み込む

## Mock Server

Mock Server の起動方法

1. apisprout をダウンロード

   [https://github.com/danielgtaylor/apisprout/releases](https://github.com/danielgtaylor/apisprout/releases)

2. 起動
   ダウンロードしたファイルを解凍先で実行

   ```
   $ ./apisprout openapi.yaml
   ```

## Generate API Spec HTML

```
$ swagger-codegen generate -i openapi.yaml -l html2 -o docs/
```
