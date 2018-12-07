<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- meta -->
  <title>{{$titlePage ?? config('app.name')}}</title>
  @include('layout._partials._styles')
</head>

<body>

  <header>
    @include('layout._partials._navbar')
    @include('layout._partials._header')
  </header>

  <main>
    <div class="wrapper ">
      <div class="main-panel">
        <div class="content">
          @yield('conteudo')
        </div>
      </div>
    </div>
  </main>

  <footer>
    @yield('footer')
    @include('layout._partials._footer')
  </footer>

  @include('layout._partials._scripts')
  @yield('scripts')

</body>
</html>