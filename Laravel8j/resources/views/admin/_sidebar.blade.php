<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets')}}/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <a href="{{route('adminhome')}}" class="logo-text">Synadmin</a>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">CATEGORY & PRODUCTS</li>
        <li>
            <a href="{{route('admin_category')}}">
                <div class="parent-icon"><i class='bx bx-layer' ></i>
                </div>
                Category
            </a>
        </li>
        <li>
            <a href="{{route('admin_products')}}">
                <div class="parent-icon"><i class="bx bx-cart-alt"></i>
                </div>
                Products
            </a>
        </li>

        <li class="menu-label">ORDERS INFORMATION</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-shopping-bags' ></i>
                </div>
                <div class="menu-title">ORDERS</div>
            </a>
            <ul>
                <li> <a href="{{route('admin_orders')}}"><i class="bx bx-right-arrow-alt"></i>All Orders</a>
                </li>
                <li> <a href="{{route('admin_order_list',['status'=>'new'])}}"><i class="bx bx-right-arrow-alt"></i>New Orders</a>
                </li>
                <li> <a href="{{route('admin_order_list',['status'=>'accepted'])}}"><i class="bx bx-right-arrow-alt"></i>Accepted Orders</a>
                </li>
                <li> <a href="{{route('admin_order_list',['status'=>'canceled'])}}"><i class="bx bx-right-arrow-alt"></i>Canceled Orders</a>
                </li>
                <li> <a href="{{route('admin_order_list',['status'=>'shipping'])}}"><i class="bx bx-right-arrow-alt"></i>Shipping Orders</a>
                </li>
                <li> <a href="{{route('admin_order_list',['status'=>'completed'])}}"><i class="bx bx-right-arrow-alt"></i>Completed Orders</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">USERS</li>
        <li>
            <a href="{{route('admin_users')}}">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                Users
            </a>
        </li>

        <li class="menu-label">MESSAGES</li>
        <li>
            <a href="{{route('admin_message')}}">
                <div class="parent-icon"><i class="bx bx-message-detail"></i>
                </div>
                Contact Messages
            </a>
        </li>

        <li class="menu-label">SETTINGS</li>
        <li>
            <a href="{{route('admin_setting')}}">
                <div class="parent-icon"><i class="bx bx-cog"></i>
                </div>
                Settings
            </a>
        </li>
        <li class="menu-label">REVİEWS</li>
        <li>
            <a href="{{route('admin_review')}}">
                <div class="parent-icon"><i class="bx bx-comment-check"></i>
                </div>
                Reviews
            </a>
        </li>
        <li class="menu-label">FAQS</li>
        <li>
            <a href="{{route('admin_faq')}}">
                <div class="parent-icon"><i class="bx bx-question-mark"></i>
                </div>
                Faqs
            </a>
        </li>
        <li class="menu-label">OTHERS</li>
        <li>
            <a href="https://codervent.com/synadmin/documentation/index.html" target="_blank">
                <div class="parent-icon"><i class='bx bx-file' ></i>
                </div>
                <div class="menu-title">Documentation</div>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class='bx bx-headphone' ></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
