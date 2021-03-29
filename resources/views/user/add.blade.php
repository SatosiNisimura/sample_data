<table>
    <form action="posts" method="post">
        {{csrf_field() }}
        <tr>
            <th>氏名（全角カタカナ）:</th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>メールアドレス:</th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="確認"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="reset" value="リセット"></td>
        </tr>
    </form>
</table>


