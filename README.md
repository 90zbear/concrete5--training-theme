# concrete5-training-theme
This was made ​​in bootstrap3, basic concrete 5 theme.

bootstrap3でconcrete5 5.7x用テーマを作る際のテンプレートです。
ざっくり作っただけなのでいじって使えばいいと思います。

page_theme.phpのgetThemeName()や、getThemeDescription()は適宜変更のうえ使用することを推奨。

## 現在の内容
- lessコンパイラが動く
- default、右サイドバー、左サイドバーの骨組み
- ヘッダやフッタはElemental風に分割

## 使い方
1. /application/themes/trainingディレクトリにすべてのファイルを入れる。
2. あとは管理画面から有効化。

## カスタムベースとしての使い方
1. おもむろにpage_theme.phpを開く
2. テーマ名や説明文を書き換える
3. インクルードするjs、cssなどを消したり追加したりする
4. フォルダ名にあわせて、いい感じにnamespaceを書き換える

