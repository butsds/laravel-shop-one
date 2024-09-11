<script setup lang="ts">
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import {Menu} from "@/types/components/menu";
//import { route } from 'ziggy-js';

const props = defineProps<{
    menu: Menu
}>();

</script>

<template>
    <ul id="menu">
        <li v-for="item in menu.items" :key="item.id" :id="item.id">
            <template v-if="item.href">
                <a :href="route(item.href)">
                    <i :class="`fa ${item.icon} fw`"></i> {{ item.name }}
                </a>
            </template>

            <template v-else>
                <a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed"><i class="fa {{ menu.icon }} fw"></i> menu.name</a>
            </template>

            <!-- {% if menu.href %} -->
            <!-- {% else %} -->
            <!-- {% endif %} -->
            <!-- {% if menu.children %} -->
            <ul id="collapse{{ i }}" class="collapse">
                <!-- {% set j = 0 %} -->
                <!-- {% for children_1 in menu.children %} -->
                <li>
                    <!-- {% if children_1.href %} -->
                    <a href="{{ children_1.href }}">children_1.name</a>
                    <!-- {% else %} -->
                    <a href="#collapse{{ i }}-{{ j }}" data-toggle="collapse" class="parent collapsed">children_1.name</a>
                    <!-- {% endif %} -->

                    <!-- {% if children_1.children %} -->
                    <ul id="collapse{{ i }}-{{ j }}" class="collapse">
                        <!-- {% set k = 0 %} -->
                        <!-- {% for children_2 in children_1.children %} -->
                        <li>
                            <!-- {% if children_2.href %} -->
                            <a href="{{ children_2.href }}">children_2.name</a>
                            <!-- {% else %} -->
                            <a href="#collapse-{{ i }}-{{ j }}-{{ k }}" data-toggle="collapse" class="parent collapsed">children_2.name</a>
                            <!-- {% endif %} -->
                            <!-- {% if children_2.children %} -->
                            <ul id="collapse-{{ i }}-{{ j }}-{{ k }}" class="collapse">
                                <!-- {% for children_3 in children_2.children %} -->
                                <li><a href="{{ children_3.href }}">children_3.name</a></li>
                                <!-- {% endfor %} -->
                            </ul>
                            <!-- {% endif %} -->
                        </li>
                        <!-- {% set k = k + 1 %} -->
                        <!-- {% endfor %} -->
                    </ul>
                    <!-- {% endif %}  -->
                </li>
                <!-- {% set j = j + 1 %} -->
                <!-- {% endfor %} -->
            </ul>
            <!-- {% endif %} -->
        </li>
        <!-- {% set i = i + 1 %} -->
        <!-- {% endfor %} -->
    </ul>
</template>
