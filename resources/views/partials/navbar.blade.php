<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">JD Bookstore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}} " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === "Book List") ? 'active' : ''}} {{ ($title === "Top 10 Book") ? 'active' : ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Book
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/booklist">List of Book</a></li>
              <li><a class="dropdown-item" href="/top10">Top 10</a></li>
            </ul>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Ratings") ? 'active' : ''}} " href="/ratings">Ratings</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>