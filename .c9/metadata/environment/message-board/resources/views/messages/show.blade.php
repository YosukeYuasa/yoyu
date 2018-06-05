{"filter":false,"title":"show.blade.php","tooltip":"/message-board/resources/views/messages/show.blade.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    ","    <h1>id = {{ $message->id }}のメッセージ詳細ページ</h1>","    ","    <p>{{ $message->content }}</p>","    ","    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id]) !!}","    ","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"],"id":66}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"],"id":67}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":68},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "],"id":69}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":17},"action":"insert","lines":["link_to_route"],"id":70}],[{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["e"],"id":71},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["t"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["u"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["o"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["r"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["_"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["o"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["t"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["_"]},{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["k"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["n"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["i"]},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":["l"]}],[{"start":{"row":4,"column":4},"end":{"row":17,"column":12},"action":"insert","lines":["<table class=\"table table-bordered\">","        <tr>","            <th>id</th>","            <td>{{ $message->id }}</td>","        </tr>","        <tr>","            <th>タイトル</th>","            <td>{{ $message->title }}</td>","        </tr>","        <tr>","            <th>メッセージ</th>","            <td>{{ $message->content }}</td>","        </tr>","    </table>"],"id":72}],[{"start":{"row":19,"column":3},"end":{"row":22,"column":41},"action":"remove","lines":[" <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>タイトル: {{ $message->title }}</p>","    <p>メッセージ: {{ $message->content }}</p>"],"id":73},{"start":{"row":19,"column":2},"end":{"row":19,"column":3},"action":"remove","lines":[" "]},{"start":{"row":19,"column":1},"end":{"row":19,"column":2},"action":"remove","lines":[" "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":1},"action":"remove","lines":[" "]},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":74},"end":{"row":20,"column":106},"action":"insert","lines":[", ['class' => 'btn btn-default']"],"id":74}],[{"start":{"row":20,"column":103},"end":{"row":20,"column":104},"action":"remove","lines":["t"],"id":75},{"start":{"row":20,"column":102},"end":{"row":20,"column":103},"action":"remove","lines":["l"]},{"start":{"row":20,"column":101},"end":{"row":20,"column":102},"action":"remove","lines":["u"]},{"start":{"row":20,"column":100},"end":{"row":20,"column":101},"action":"remove","lines":["a"]},{"start":{"row":20,"column":99},"end":{"row":20,"column":100},"action":"remove","lines":["f"]},{"start":{"row":20,"column":98},"end":{"row":20,"column":99},"action":"remove","lines":["e"]},{"start":{"row":20,"column":97},"end":{"row":20,"column":98},"action":"remove","lines":["d"]}],[{"start":{"row":20,"column":97},"end":{"row":20,"column":98},"action":"insert","lines":["d"],"id":76},{"start":{"row":20,"column":98},"end":{"row":20,"column":99},"action":"insert","lines":["a"]},{"start":{"row":20,"column":99},"end":{"row":20,"column":100},"action":"insert","lines":["n"]},{"start":{"row":20,"column":100},"end":{"row":20,"column":101},"action":"insert","lines":["g"]},{"start":{"row":20,"column":101},"end":{"row":20,"column":102},"action":"insert","lines":["e"]},{"start":{"row":20,"column":102},"end":{"row":20,"column":103},"action":"insert","lines":["r"]}],[{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":[","],"id":77}],[{"start":{"row":23,"column":30},"end":{"row":23,"column":62},"action":"insert","lines":[", ['class' => 'btn btn-default']"],"id":78}],[{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"remove","lines":[","],"id":79}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":11},"end":{"row":26,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528085291665,"hash":"d8c483139f747895193c9959975daf0107746855"}