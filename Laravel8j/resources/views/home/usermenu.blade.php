
@auth
<div class="list-group list-group-flush">
    <h5 style="text-align:center" >USER PANEL</h5>

    <a href="{{route('myprofile')}}"
       class="list-group-item d-flex justify-content-between align-items-center bg-transparent">My Profile <i
            class='bx bx-user-circle fs-5'></i></a>
    <a href="{{route('user_orders')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">My Orders
        <i class='bx bx-cart-alt fs-5'></i></a>
    <a href="{{route('myreviews')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">My Reviews
        <i class='bx bx-comment-check fs-5'></i></a>
    <a href="{{route('user_shopcart')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">My ShopCart
        <i class='bx bx-credit-card fs-5'></i></a>
    <a href="{{route('user_products')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">My Product
        <i class='bx bxs-shopping-bag-alt fs-5'></i></a>
    <a href="{{route('logout')}}"
       class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i
            class='bx bx-log-out fs-5'></i></a>
    @php
        $userRoles = Auth::user()->roles->pluck('name');
    @endphp

     @if($userRoles->contains('admin'))

        <a href="{{route('adminhome')}}"
           class="list-group-item d-flex justify-content-between align-items-center bg-transparent" target="_blank">Admin Panel <i
                class='bx bx-home fs-5'></i></a>
    @endif
</div>

@endauth
