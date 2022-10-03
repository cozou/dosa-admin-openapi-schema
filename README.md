# DOSA-ADMIN-OPENAPI-SCHEMA

DOSA 連携 API 用のスキーマ定義ファイルを管理するリポジトリです。

- 仕様書
  - [https://cozou.github.io/dosa-admin-openapi-schema/docs](https://cozou.github.io/dosa-admin-openapi-schema/docs)
- OpenAPI 定義ファイル
  - [https://cozou.github.io/dosa-admin-openapi-schema/build/openapi.yaml](https://cozou.github.io/dosa-admin-openapi-schema/build/openapi.yaml)
- Github Pages
  - [https://cozou.github.io/dosa-admin-openapi-schema](https://cozou.github.io/dosa-admin-openapi-schema)
- リポジトリ
  - [https://github.com/cozou/dosa-admin-openapi-schema](https://github.com/cozou/dosa-admin-openapi-schema)

## Directory Structures

```
.
├── README.md
├── build
│   └── openapi.yaml         API定義ファイル（ビルド）
├── components
│   ├── paths
│   └── schemas
├── docs
│   └── index.html           API仕様書
├── dosa-admin-client         クライアントライブラリ
├── index.html
└── openapi.yaml              API定義ファイル（元データ）
```

## Build

```
$ swagger-cli bundle -r openapi.yaml -t yaml -o build/openapi.yaml
```

## Mock Server

Mock Server の起動方法

```
$ npm install -g @stoplight/prism-cli
$ prism mock openapi.yaml
```

## Generate API Spec HTML

```
$ npm install -g redoc-cli
$ redoc-cli bundle build/openapi.yaml --options.menuToggle --options.pathInMiddlePanel -o docs/index.html
```

## Generate Node.js Client

```
$ docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -g typescript-axios --additional-properties=npmVersion=1.0.7,npmName=dosa-admin-client,modelPropertyNaming=original,allowUnicodeIdentifiers=true -i /local/build/openapi.yaml -o /local/dosa-admin-client
$ cd dosa-admin-client && git checkout .gitignore README.md package.json && yarn build && yarn jsdoc && cd -
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

3. `File > Import file` より `build/openapi.yaml` を読み込む
