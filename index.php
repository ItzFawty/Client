<?php include './header.php' ?>
<div id="app">

    <input type="text" v-model="UID">
    <button v-if="UID.length == 0">Create room</button>
    <button v-if="UID.length != 0 & !ready">Join room</button>
    <button v-if="ready && UID.length != 0">Ready</button>
</div>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            UID: "",
            ready: false
        }
    })
</script>
<?php include './footer.php' ?>