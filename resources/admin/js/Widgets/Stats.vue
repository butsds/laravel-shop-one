<script setup lang="ts">
</script>

<template>
    <div id="stats">
        <ul>
            <li>
                <div>text_complete_status <span class="pull-right">complete_status %</span></div>
                <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ complete_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ complete_status }}%"> <span class="sr-only">{{ complete_status }}%</span></div>
                </div>
            </li>
            <li>
                <div>text_processing_status <span class="pull-right">processing_status%</span></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ processing_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ processing_status }}%"> <span class="sr-only">{{ processing_status }}%</span></div>
                </div>
            </li>
            <li>
                <div>text_other_status <span class="pull-right">other_status %</span></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ other_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ other_status }}%"> <span class="sr-only">{{ other_status }}%</span></div>
                </div>
            </li>
        </ul>
    </div>
</template>