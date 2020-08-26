<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">All Products</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="/purchase">Purchase</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sales">Sales</a>
        </li>
    </ul>
  </div>
</nav>