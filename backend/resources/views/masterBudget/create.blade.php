<h1>予算項目新規登録</h1>

<form action="/budget/master/store" method="post">
    @csrf
    タグ
    <select name="tag_id" id="tag_id">
        <option value="1">サンプル</option>
    </select>
    name
    <input type="text" name="name" id="name">
    description
    <input type="text" name="description" id="description">
    色
    <select name="color_id" id="color_id">
        <option value="1">サンプル</option>
    </select>
    <input type="submit" value="予算項目登録">
</form>