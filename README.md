# My WP SCSS Starter テーマ

このテーマは、WordPress用のシンプルな日本語対応スターターキットです。  
SCSSとSwiper.jsに対応し、レスポンシブ対応も完備しています。

## 主な特徴

- SCSS（レスポンシブ、vw/rem変換対応）
- Swiper.js 統合済み（スライダー導入可能）
- ブレークポイントのカスタマイズ設計
- WordPress標準テンプレート構成（home, front-page, single, archive など）
- UTF-8 & 日本語対応済み

## ディレクトリ構成

```
assets/
├── css/         # コンパイル後CSS
├── js/          # スクリプト
│   └── swiper.js
├── scss/        # SCSSファイル
│   ├── _base.scss
│   └── style.scss
```

## 使用方法

1. このテーマを `/wp-content/themes/` に配置
2. 管理画面でテーマを有効化
3. `npx sass assets/scss/style.scss assets/css/style.css --watch` でSCSSをビルド

---

## ライセンス

MIT License
