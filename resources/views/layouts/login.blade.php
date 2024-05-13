@include('layouts.app')
<div class="main-body">

    <div class="login-page">
        <div class="text-center my-2">
            <img style="object-fit: cover"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlfGbpGndfQmn_5PkAuiifyKRhDRL_GBSop4dxBhwMTydCQinEAsFspOG_hRogwXQeqDI&usqp=CAU"
                width="100" height="100" class="rounded-circle" alt="">
            <p class="text-black">Admin Panel</p>
        </div>
        <div class="form">

            <form class="login-form" method="POST" action="{{ route('login') }}">
                <input type="email" placeholder="username" name="username" required />
                <input type="password" placeholder="password" name="password" required />
                @csrf
                <button>login</button>

            </form>
        </div>
    </div>

</div>
