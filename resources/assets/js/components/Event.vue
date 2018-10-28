<template>
    <table class="table">
        <tr class="table__row" v-for="(event, key) in events" :key=key @click=redirect(event.event_url)>
            <td class="table__td"> {{event.name}} {{event.url}} </td>
            <td class="table__td"> {{event.group.name}} </td>
            <!-- <td> {{event.venue.name}} - {{event.venue.address_1}} {{event.venue.city}}</td> -->
            <td class="table__td"> {{event.time}}</td>
        </tr>
    </table>
</template>
<script>
export default {
    props : ['events'],
    mounted() {
        console.log(this.events);
    },
    methods: {
        redirect : (url) => {
            console.log(url);
            // window.location.href = url;
        }
    }
}
</script>

