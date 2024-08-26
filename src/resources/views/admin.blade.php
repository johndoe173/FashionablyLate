@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

@section('access')
    <a class="logout" href="/login">
      logout
    </a>
@endsection

<div class="categories__content">
<div class="section__title">
  <h2>Admin</h2>
</div>
<form class="search-form">
  <div class="search-form__item">
    <input class="search-form__item-input" type="text" value="名前やメールアドレスを入力してください" onfocus="if (this.value == defaultValue) this.value = '';" onblur="if (!this.value) this.value = defaultValue"/>
    <select class="search-form__gender-select">
      <option value="">性別</option>
    </select>
    <select class="search-form__contact-select">
      <option value="">お問い合わせの種類</option>
    </select>
    <input class="search-form__date-input" type="date" />
  </div>
  <div class="search-form__button">
    <button class="search-form__button-submit" type="submit">検索</button>
  </div>
  <input class="search-form__reset-input" type="reset" value="リセット">
</form>
  <div class="categories-table">
    <table class="categories-table__inner">
      <tr class="categories-table__row">
      <th class="categories-table__header">
        <span class="categories-table__header-span">お名前</span>
        <span class="categories-table__header-span">性別</span>
        <span class="categories-table__header-span">メールアドレス</span>
        <span class="categories-table__header-span">お問い合わせの種類</span>
      </th>
      </tr>
    </table>
  </div>
</div>
@endsection