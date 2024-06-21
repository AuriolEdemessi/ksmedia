<aside class="col-lg-3 split-sidebar">
            <nav class="sticky-top d-none d-lg-block">
              <ul class="nav nav-minimal flex-column" id="toc-nav">
                <li class="nav-item">
                  <a class="nav-link fs-lg" href="/manageposts">Posts</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link fs-lg" href="/team">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-lg" href="{{ route('authors.index') }}">Authors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-lg" href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-lg text-red" href="{{ route('logout') }}">Sign Out</a>
                </li>
              </ul>
            </nav>
          </aside>