<script setup lang="ts">


</script>

<template>
    <div id="container">
        <header id="header" class="navbar navbar-static-top">
            <div class="container-fluid">
                <div id="header-logo" class="navbar-header">
                    <a href="/admin/dashboard" class="navbar-brand"><img src="/logo.png" alt="heading_title" title="heading_title" /></a>
                </div>
                <!--{% if logged %}-->
                <a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/image" id="user-profile" class="img-circle" />firstname  lastname <i class="fa fa-caret-down fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/profile"><i class="fa fa-user-circle-o fa-fw"></i>text_profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">text_store</li>
                        <!--{% for store in stores %}-->
                        <li><a href="store.href" target="_blank">store.name</a></li>
                        <!--{% endfor %}-->
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">text_help</li>
                        <li><a href="https://www.homepage.com" target="_blank"><i class="fa fa-opencart fa-fw"></i>text_homepage</a></li>
                        <li><a href="https://www.homepage.com" target="_blank"><i class="fa fa-file-text-o fa-fw"></i>text_documentation</a></li>
                        <li><a href="https://www.homepage.com" target="_blank"><i class="fa fa-comments-o fa-fw"></i>text_support</a></li>
                    </ul>
                </li>
                <li><a href="admin/logout"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">text_logout</span></a></li>
                </ul>
                <!--{% endif %}--> 
            </div>
        </header>
    
        <div id="content">
            <slot />
        </div>
        <footer id="footer">text_footer<br/>text_version</footer>
    </div>
</template>