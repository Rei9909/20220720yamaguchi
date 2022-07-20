<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
<style>
  div{
    width:90%;
    margin:0 auto;
    font-size:16px;
  }
  h3{
    text-align:center;
    margin-top:30px;
  }
  form{
    width:100%;
  }
  input{
    margin-top:16px;
    height:24px
  }
  input.btn{
    background-color:black;
    color:white;
    height: 30px;
    width:100px;
    text-align:center;
  }

</style>
@section('title', 'index.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif

<div class=index>
  <h3>お問い合わせ</h3>
  <form action="/confirmation" method='GET'>
    @csrf
    <lavel>お名前</lavel>
    <input type="text" name="name"><input type="text" name="name">
    <br>
    <lavel>性別</lavel>
    <input type="radio" name="sex" value="male">男性
    <input type="radio" name="sex" value="female">女性
    <br>
    <lavel>メールアドレス</lavel>
    <input type="email" name="email">
    <br>
    <lavel>郵便番号</lavel>
    〒<input type="text" name="zip" pattern="\d{3}-\d{4}">
    <br>
    <lavel>住所</lavel>
    <input type="text" name="address">
    <br>
    <lavel>建物名</lavel>
    <input type="text" name="Building">
    <br>
    <lavel>ご意見</lavel>
    <input type="text" name="opinion" maxlength="120">
    <br>
    <input type="submit" value="確認" class="btn">
  </form>
</div>

@endsection