<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import Main from '@/admin/Layouts/Main.vue';
    import PageHeader from '@/admin/Sections/PageHeader.vue';
    import ColumnLeft from '@/admin/Sections/ColumnLeft.vue';
    import Content from '@/admin/Sections/Content.vue';
    import LeftMenu from '@/admin/Menus/LeftMenu.vue';
    import Stats from '@/admin/Widgets/Stats.vue';
    import OrderCard from '@/admin/Widgets/OrderCard.vue';
</script>

<template>
    <Head title="Dashboard" />

    <Main>
        <ColumnLeft>
            <LeftMenu />
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
        </Content>
    </Main>
</template>
