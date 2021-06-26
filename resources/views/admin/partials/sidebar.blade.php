<ul class="accordion-menu m-0" style="height:860px">
    <li class="sidebar-title">
        Book Store
    </li>
    <li class="">
        <a href="{{ Route('admin.dashboard') }}"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">book</i>Book<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('/admin/book')}}">Books</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/category')}}">Book Categories</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/type')}}">Book Types</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/sale')}}">Book Sale</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/special')}}">Special Offer</a>
            </li>
            <li>
                <a href="{{URL::to('admin/book/flash')}}">Flash Sale</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">S</i>Stationary
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                {{-- <a href="{{ Route('stationary.index') }}">Stationary</a> --}}
            </li>
            <li>
                {{-- <a href="{{ Route('stationary-category.index') }}">Categories</a> --}}
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">G</i>Gift
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.gift.index') }}">Gift</a>
            </li>
            <li>
                <a href="{{ Route('admin.gift-category.index') }}">Categories</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">article</i>Orders<i
                class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('admin/orders')}}">Orders</a>
            </li>
            <li>
                <a href="{{ Route('admin.pdf-orders.index') }}">PDF Orders</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">article</i>Coupon<i
                class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('admin/coupon')}}">Coupon Code</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">article</i>Meta Tags<i
                class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('admin/meta-tags')}}">Meta Tags</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">person</i>Users<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('/admin/user')}}">Author</a>
            </li>
            <li>
                <a href="{{URL::to('/admin/client')}}">Client</a>
            </li>
            <li>
                <a href="{{URL::to('/admin/board-member')}}">Board Member</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">S</i>Slider<i class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{URL::to('admin/system-settings/main-slider')}}">Main Slider</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">article</i>News
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.news.index') }}">News</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="material-icons-outlined">question_answer</i>FAQ<i
                class="material-icons has-sub-menu">add</i></a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.faq.index') }}">FAQ</a>
            </li>
            <li>
                <a href="{{ Route('admin.faq-category.index') }}">FAQ Categories</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">B</i>
            Board Member
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.board-member.index') }}">Board Member</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">T</i>
            Testimonial
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.testimonial.index') }}">Testimonial</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="material-icons-outlined">content_copy</i>
            Site Profile
            <i class="material-icons has-sub-menu">add</i>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ Route('admin.site-profile.index') }}">Profile</a>
            </li>
        </ul>
    </li>
</ul>
