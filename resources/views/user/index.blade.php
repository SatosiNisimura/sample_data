<table>  {{--eleventh--}}
    <tr>
        <th>氏名</th>
        <th>メールアドレス</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->mail }}</td>
        </tr>
    @endforeach
</table>