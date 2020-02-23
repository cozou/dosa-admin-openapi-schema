# DOSA-ADMIN-OPENAPI-SCHEMA

DOSA 連携 API 用のスキーマ定義ファイルを管理するリポジトリです。

- 仕様書
  - [https://cozou.github.io/dosa-admin-openapi-schema/docs](https://cozou.github.io/dosa-admin-openapi-schema/docs)
- OpenAPI 定義ファイル
  - [https://cozou.github.io/dosa-admin-openapi-schema/openapi.yaml](https://cozou.github.io/dosa-admin-openapi-schema/openapi.yaml)
- Github Pages
  - [https://cozou.github.io/dosa-admin-openapi-schema](https://cozou.github.io/dosa-admin-openapi-schema)
- リポジトリ
  - [https://github.com/cozou/dosa-admin-openapi-schema](https://github.com/cozou/dosa-admin-openapi-schema)

## Directory Structures

```
.
├── README.md
├── openapi.yaml - API定義ファイル
└── docs
    └── index.html - API仕様書
```

## Editor

### オンラインの Swagger Editor を利用する場合

[http://editor.swagger.io/](（http://editor.swagger.io/) の 「File > Import URL」 に 「OpenAPI 定義ファイル」 の URL を指定する。

### Swagger Editor をローカルで起動する場合

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

## Generate Node.js Client

```
$ docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -g typescript-axios -DnpmName=dosa-admin -i /local/openapi.yaml -o /local/dosa-admin-client
```
