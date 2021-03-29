@if (count($errors) > 0)   {{--third--}}
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style='color:red'>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<table>    {{--sixth--}}
    <form action="/" method="post">
        {{ csrf_field() }}
            <dl>
                <p style="font-weight: bold; font-family: sans-serif;">氏名：</p>
                <input name="name" value="{{$name}}" type="hidden">&ensp;{{$name}}
                <p style="font-weight: bold; font-family: sans-serif;">メールアドレス：</p>
                <input name="mail" value="{{$mail}}" type="hidden">&ensp;{{$mail}}
            </dl>
            <div><input type="submit" class="btn btn-primary" value="完了" /> &thinsp;<a href="/" class="btn btn-secondary">修正</a></div>
      </form>
</table>





