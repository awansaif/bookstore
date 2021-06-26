<div class="row">
    <div class="col-md-12">
        <nav>
            <ul class="nav justify-content-center p-2">
                <li>
                    <a class="dropdown-item" href="{{ env('APP_URL') }}">HOME</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('all-book') }}">BOOKS</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('e-book') }}">E-BOOK</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('all-author') }}">AUTHOR</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('PdfOrderShowPage') }}">PDF ORDERS</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('stationary') }}">STATIONARY</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('ShowGiftPage') }}">GIFTS</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('ShowNewsPage') }}">NEWS</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('ShowFaqPage','all') }}">FAQ</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('ShowAboutUs') }}">ABOUT US</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ Route('ShowContactUs')  }}">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
