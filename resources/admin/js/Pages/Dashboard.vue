<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import Main from '@/admin/Layouts/Main.vue';
    import PageHeader from '@/admin/Sections/PageHeader.vue';
    import ColumnLeft from '@/admin/Sections/ColumnLeft.vue';
    import Content from '@/admin/Sections/Content.vue';
    import LeftMenu from '@/admin/Menus/LeftMenu.vue';
    import Stats from '@/admin/Widgets/Stats.vue';
    import OrderCard from '@/admin/Widgets/OrderCard.vue';
    import WorldMap from '@/admin/Widgets/WorldMap.vue';
    import SalesAnalytics from '@/admin/Widgets/SalesAnalytics.vue';
    import ActivityInfo from '@/admin/Widgets/ActivityInfo.vue';
    import RecentInfo from '@/admin/Widgets/RecentInfo.vue';

    import {Menu, MenuItem} from "@/types/components/menu";

    const menu = <Menu>{
        name: 'Меню',
        items: [
            {
                id: 'menu-dashboard',
                icon: 'fa-dashboard',
                name: 'Панель состояния',
                href: 'login'
            }
        ]
    }

</script>

<template>
    <Head title="Dashboard" />

    <Main>
        <ColumnLeft>
            <div id="navigation" v-if="menu.name"><span class="fa fa-bars"></span> {{ menu.name }} </div>
            <LeftMenu :menu="menu" />
            <Stats />
        </ColumnLeft>
        <Content>
            <PageHeader />
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <OrderCard />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <OrderCard />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <OrderCard />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <OrderCard />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <WorldMap />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <SalesAnalytics />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <ActivityInfo />
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <RecentInfo />
                </div>
            </div>
        </Content>
    </Main>
</template>
