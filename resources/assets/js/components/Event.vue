<template>
  <table class="table">
    <tr
      class="table__row"
      v-for="(event, key) in events"
      :key="key"
      @click="redirect(event.event_url)"
    >
      <td class="table__td">{{event.name}} {{event.url}}</td>
      <td class="table__td">{{event.group.name}}</td>
      <td v-if="event.venue">{{event.venue.name}} - {{event.venue.address_1}} {{event.venue.city}}</td>
      <td v-else>-</td>
      <td class="table__td">{{event.time | formatTime}}</td>
    </tr>
  </table>
</template>
<script>
export default {
  props: ["events"],
  methods: {
    goto: function(url) {
      window.open(url, "_blank");
    }
  },
  filters: {
    formatTime: function(param) {
      let theDate = new Date(param);
      let hours = theDate.getHours();
      hours = (hours + 24) % 24;
      let period = hours < 12 ? "AM" : "PM";
      hours = hours % 12 || hours;
      let minutes =
        (theDate.getMinutes() < 10 ? "0" : "") + theDate.getMinutes();
      let days = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
      let day = days[theDate.getDay()];
      let date =
        theDate.getDate() + "/" + theDate.getMonth() + "/" + theDate.getYear();

      return day + " " + date + " @" + hours + ":" + minutes + " " + period;
    }
  }
};
</script>

