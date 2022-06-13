<!--
ベースレイアウトの要素を継承する

    ベースレイアウトに試しに文字を入力すると
    ここには何もコードを書いていないのに
    文字が出力される
-->
@extends('layouts.base')

<!--
ベースレイアウトに書いた＠yield 'title' と連動している

    第二引数に書いたデータがhtmlとして出力される
    ベースレイアウトではh1タグの中に＠yield 'title'を書いている
-->
@section('title','ベースのyieldのtitleにたいとるって書いてみた')

@section('akira','ベースのyieldのakiraにあきらってかいてみた')

@section('footer','ふったー')

@section('menubar')
    @parent
    あいうえおかきくけこ
@endsection


@section('content')
<p>コンテンツのyieldとセクションディレクティブが連動している文字</p>
    @component('akira2')
    @endcomponent
@endsection
