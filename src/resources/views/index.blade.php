@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input-name--text">
          <input type="text" name="first-name" placeholder="例：山田" value="{{ old('first-name') }}" />
        </div>
        <div class="form__error">
          @error('first-name')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__group-content">
        <div class="form__input-name--text">
          <input type="text" name="last-name" placeholder="例：太郎" value="{{ old('last-name') }}" />
        </div>
        <div class="form__error">
          @error('last-name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <input id="men" type="radio" name="gender" value="1" checked>
          <label for="men" name="gender" value="男性">男性</label>
          <input id="women" type="radio" name="gender" value="2">
          <label for="women" name="gender" value="女性">女性</label>
          <input id="other" type="radio" name="gender" value="3">
          <label for="other" name="gender" value="その他">その他</label>
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea class="form__input--textarea-address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">{{ old('address') }}</textarea>
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea class="form__input--textarea-build" name="building" placeholder="例:千駄ヶ谷マンション">{{ old('building') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
        </div>
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea class="form__input--textarea-content" name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection