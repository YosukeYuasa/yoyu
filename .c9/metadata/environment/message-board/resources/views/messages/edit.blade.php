{"filter":false,"title":"edit.blade.php","tooltip":"/message-board/resources/views/messages/edit.blade.php","undoManager":{"mark":33,"position":33,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $nessage->id }}のメッセージ編集ページ</h1>","    ","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' =>'put']) !!}","    ","        {!! Form::label('title','タイトル':)!!}","        {!! Form::text('title')!!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","    ","        {!! Form::submit('更新') !!}","    ","    {!! Form::close() !!}","","","@endsection"],"id":249}],[{"start":{"row":0,"column":0},"end":{"row":18,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}","","@endsection"],"id":250}],[{"start":{"row":6,"column":100},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":251},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":8},"action":"insert","lines":["    "],"id":252}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["<"],"id":253},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["d"],"id":254},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["i"]},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["v"]}],[{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":[" "],"id":255},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["c"]},{"start":{"row":7,"column":14},"end":{"row":7,"column":15},"action":"insert","lines":["l"]},{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["a"]},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["s"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["s"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["="]}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":21},"action":"insert","lines":["\"\""],"id":256}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["f"],"id":257},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["o"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["r"]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["m"]}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["-"],"id":258},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["g"]},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["r"]},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["o"]},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["u"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["p"]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "],"id":259},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":260}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"insert","lines":["    "],"id":261}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":12},"action":"insert","lines":["    "],"id":262}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":12},"action":"insert","lines":["    "],"id":263}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":69},"action":"insert","lines":[", null, ['class' => 'form-control']"],"id":264}],[{"start":{"row":11,"column":7},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":265},{"start":{"row":12,"column":0},"end":{"row":12,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"remove","lines":[" "],"id":266},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":[" "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"remove","lines":[" "]}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "],"id":267},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":268}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":269}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":270}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["<"],"id":271},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["d"],"id":272},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["i"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["v"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":[" "],"id":273},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["c"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["l"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["a"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["s"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["s"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["="]}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":21},"action":"insert","lines":["\"\""],"id":274}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["f"],"id":275},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["o"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["r"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["m"]}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["-"],"id":276},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["g"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["r"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["o"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["u"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["p"]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":12},"action":"insert","lines":["    "],"id":277}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":12},"action":"insert","lines":["    "],"id":278}],[{"start":{"row":13,"column":36},"end":{"row":13,"column":69},"action":"insert","lines":["null, ['class' => 'form-control']"],"id":279}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":61},"action":"insert","lines":[", ['class' => 'btn btn-default']"],"id":280}],[{"start":{"row":6,"column":4},"end":{"row":17,"column":25},"action":"remove","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","        <div class=\"form-group\">","            {!! Form::label('title', 'タイトル:') !!}","            {!! Form::text('title', null, ['class' => 'form-control']) !!}","","        <div class=\"form-group\">","            {!! Form::label('content', 'メッセージ:') !!}","            {!! Form::text('content'null, ['class' => 'form-control']) !!}","","        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","","    {!! Form::close() !!}"],"id":281},{"start":{"row":6,"column":4},"end":{"row":19,"column":33},"action":"insert","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}"]}],[{"start":{"row":6,"column":3},"end":{"row":19,"column":33},"action":"remove","lines":[" {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}"],"id":282},{"start":{"row":6,"column":3},"end":{"row":23,"column":10},"action":"insert","lines":[" <div class=\"row\">","        <div class=\"col-xs-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":10},"end":{"row":23,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528086608428,"hash":"2481f94f3a5bbf09262e7c0b1583d27a68e522c7"}