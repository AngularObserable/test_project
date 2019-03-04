<?php
/**
 * Created by PhpStorm.
 * User: Shafiq
 * Date: 9/25/2017
 * Time: 12:06 PM
 */
?>

<section class="sidebar-user-info">
    <div class="sidebar-user-info-inner">
        <a href="#" class="user-profile">
            <img src="" class="img-circle img-corona" alt="user-pic" width="60" height="60">
            <span>
                <strong></strong>
            </span>
        </a>
        <ul class="user-links list-unstyled">
            <li>
                <a href="" title="Edit profile">
                    <i class="linecons-user"></i> Edit profile
                </a>
            </li>
            <li class="logout-link">
                <a title="">
                    <i class="fa-power-off"></i>
                </a>
               
            </li>
        </ul>
    </div>
</section>

<ul id="main-menu" class="main-menu">
    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


    <li>
        <a href="{{route('admin.dashboard')}}">
            <i class="fa fa-home"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>

    <li>
        <a href="{{route('admin.tag.index')}}">
            <i class="fa fa-graduation-cap"></i>
            <span class="title">Tag</span>
        </a>

    </li>
    <li>
        <a href="{{route('admin.category.index')}}">
            <i class="fa fa-graduation-cap"></i>
            <span class="title">Category</span>
        </a>

    </li>
    <li>
        <a href="{{route('admin.post.index')}}">
            <i class="fa fa-graduation-cap"></i>
            <span class="title">Posts</span>
        </a>

    </li>
    <li>
        <a href="{{route('admin.post.pending')}}">
            <i class="fa fa-graduation-cap"></i>
            <span class="title">Pending Posts</span>
        </a>

    </li>
    <li>
        <a href="{{route('admin.subscriber.index')}}">
            <i class="fa fa-graduation-cap"></i>
            <span class="title">Subscriber</span>
        </a>

    </li>
    <!--<li>-->
    <!--<a href="">-->
    <!--<img src="assets/icons/consignment.png" width="25" alt="" />-->
    <!--<span class="title">Consignment</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="">-->
    <!--<i class="fa fa-history"></i>-->
    <!--<span class="title">Order History</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="">-->
    <!--<i class="linecons-wallet"></i>-->
    <!--<span class="title">Wallet</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="">-->
    <!--<i class="fa fa-globe"></i>-->
    <!--<span class="title">Web Store</span>-->
    <!--</a>-->
    <!--</li>-->
    <!--<li>-->
    <!--<a href="">-->
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
            <!--<li>
                <a href="mailbox-message.html">
                    <span class="title">View Message</span>
                </a>
            </li>-->
        </ul>
    </li>
</ul>

