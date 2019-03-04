<?php
/**
 * Created by PhpStorm.
 * User: Sovon
 * Date: 9/25/2017
 * Time: 12:06 PM
 */
?>

<section class="sidebar-user-info">
    <div class="sidebar-user-info-inner">
        <a href="#" class="user-profile">
            <img src="{{ asset('dashboard/images/user-4.png') }}" class="img-circle img-corona" alt="user-pic" width="60" height="60">
                <span>
					<strong>{{ Auth::user()->name }}</strong>
					Page admin
                </span>
        </a>
        <ul class="user-links list-unstyled">
            <li>
                <a href="#" title="Edit profile">
                    <i class="linecons-user"></i> Edit profile
                </a>
            </li>
            <li class="logout-link">
                <a title="Log out" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</section>

<ul id="main-menu" class="main-menu">
    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


    <li>
        <a href="ui-widgets.html">
            <i class="fa fa-home"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="">
            <i class="fa fa-plus-square-o"></i>
            <span class="title">Add Percel</span>
        </a>
        <ul>
            <li>
                <a href="{{('')}}">
                    <span class="title">Inbox</span>
                </a>
            </li>
            <li>
                <a href="mailbox-compose.html">
                    <span class="title">Compose Message</span>
                </a>
            </li>
            <li>
                <a href="mailbox-message.html">
                    <span class="title">View Message</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="ui-widgets.html">
            <i class="linecons-truck"></i>
            <span class="title">Pickup</span>
        </a>
        <ul>
            <li>
                <a href="{{('pages/new-pickup')}}">
                    <span class="title">Inbox</span>
                </a>
            </li>
            <li>
                <a href="mailbox-compose.html">
                    <span class="title">Compose Message</span>
                </a>
            </li>
            <li>
                <a href="mailbox-message.html">
                    <span class="title">View Message</span>
                </a>
            </li>
        </ul>
    </li>
    <!--<li>-->
    <!--<a href="ui-widgets.html">-->
    <!--<img src="assets/icons/consignment.png" width="25" alt="" />-->
    <!--<span class="title">Consignment</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="ui-widgets.html">-->
    <!--<i class="fa fa-history"></i>-->
    <!--<span class="title">Order History</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="ui-widgets.html">-->
    <!--<i class="linecons-wallet"></i>-->
    <!--<span class="title">Wallet</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="ui-widgets.html">-->
    <!--<i class="fa fa-globe"></i>-->
    <!--<span class="title">Web Store</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="ui-widgets.html">-->
    <!--<i class="fa fa-facebook-square"></i>-->
    <!--<span class="title">Facebook Store</span>-->
    <!--</a>-->
    <!--</li>-->
    <li>
        <a href="mailbox-main.html">
            <i class="linecons-mail"></i>
            <span class="title">Mailbox </span>
            <span class="label label-success">5</span>
        </a>
        <ul>
            <li>
                <a href="mailbox-main.html">
                    <span class="title">Inbox</span>
                </a>
            </li>
            <li>
                <a href="mailbox-compose.html">
                    <span class="title">Compose Message</span>
                </a>
            </li>
            <li>
                <a href="mailbox-message.html">
                    <span class="title">View Message</span>
                </a>
            </li>
        </ul>
    </li>
</ul>




