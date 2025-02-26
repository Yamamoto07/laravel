# アプリケーション名
「冷蔵庫の食材管理アプリ」

# アプリケーション概要
冷蔵庫の食材の在庫を管理するアプリです。

# URL
http://laravelapp.sakura.ne.jp/laravelapp/public/login  
ゲストログイン画面には、メールアドレスとパスワードがすでに入力されています。  
そのままログインボタンをクリックして、ログインしてください。  
ログインすると食材一覧画面が表示されます。  

<img width="768" alt="ログインページ" src="https://user-images.githubusercontent.com/65486264/111150425-6c813c00-85d1-11eb-88e3-585f2cce00c5.png">

また、右上のguest_userをクリックするとログアウトが表示されるので、
クリックしてログアウトしてください。(ゲストログイン画面に戻ります。)  

<img width="767" alt="食材一覧ページ" src="https://user-images.githubusercontent.com/65486264/111150587-9dfa0780-85d1-11eb-9c9c-517614da5563.png">

# 利用方法
食材を購入したら、食材追加画面から食材名、数量、賞味期限を入力してください。  
食材を消費もしくは処分したら、食材一覧画面の削除ボタンから削除してください。  
食材一覧は賞味期限が近い順に並んでいます。

# 目指した課題解決
当アプリを通して冷蔵庫の中身を把握することで、下記の課題解決を目指しました。  
・食材の買い過ぎを防ぐ。  
・冷蔵庫にある食材をもう一度購入することを防ぐ。  
・賞味期限切れを防ぐ。  
また、レスポンシブ対応しているので、買い物先でもスマホから冷蔵庫の中身を確認できます。

# 使用技術
・HTML, CSS  
・PHP 7.3.24  
・Laravel 8.31.0  
・MySQL 8.0.23  
・Bootstrap 4.3.2

# サーバー
さくらインターネットのレンタルサーバーを利用しました。

# 機能一覧
・ユーザー登録、ログイン機能、パスワード再設定機能  
・CRUD機能(Create, Read, Update, Delete)  
・ユーザー認証機能  
・バリデーション機能  
・ページネーション機能
