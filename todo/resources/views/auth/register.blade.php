@extends("layouts.default")

@section("style")

<style>
    html,
    body {
    height: 100%;
    }

    body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    }

    .form-signin .checkbox {
    font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }

    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
    /* margin-bottom: 10px; */
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>
@endsection




@section("content")

<main class="form-signin">
  <form method="POST" action="{{route("register.post")}}">
  @csrf
    {{-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
    <h1 class="h3 mb-3 fw-normal">
    Create your account:</h1>

     <div class="form-floating">
      <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Enter name">
      <label for="floatingInput">
      Full name</label>
      @error('name')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">
      Email address</label>
      @error('email')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">
      Password</label>
      @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    @if(session()->has("success"))
      <div class="alert alert-success">
        {{session()->get("success")}}
      </div>
    @endif
    <button class="w-100 btn btn-lg btn-primary" type="submit">
      Register
    </button>
    <p class="mt-5 mb-3 text-muted">© 2025</p>
  </form>
</main>

@endsection