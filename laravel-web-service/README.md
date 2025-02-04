# Laravel開発練習用プロジェクト

## 目的

スキルトレーニングの課題として、Laravelプロジェクトを作成する。

## 主な内容

* webサービス紹介ページの構築
* お問い合わせフォームの実装
* ログイン認証の実装
* 管理者用画面の構築
* CRUD対応
* DB構築、連携

## 支給物
* 仕様要綱
* 画面デザイン
* 画像

## ログイン認証

ID：admin
PW：adminpass

## 作業履歴

### 2024.3.4～2024.3.13

* 新規登録処理
* 画像アップロード処理
* バリデーション対応
* カスタムバリデーション作成
* エラーメッセージの日本語対応
* 画像プレビュー


### 2024.3.14

* 編集画面の更新処理の修正
* ログイン済状態でのログイン画面表示時の処理を追加
* 金額入力方法の仕様追加に伴う修正およびテーブルカラムの追加
* 初期投入データの設定


### 2024.3.15

* プロジェクト内の.gitignoreファイルの削除
* 画像の重複登録対策
  * カスタムバリデーションの追加
  * エラーメッセージの設定
  * テーブルカラムを追加
  * 初期投入データのプログラム修正

### 2024.3.18

* 画像のハッシュ値の取得・保存処理