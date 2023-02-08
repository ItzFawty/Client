
</div>


</body>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            navpulldown: true,
            users: [
                {
                    Name: "Andrew Tate",
                    ID: "101010"
                },
            ]
        }
    })


    for(i = 0; i < 10; i++)
    {
        app.$data.users.push({Name: "Ande" + i + 1, ID: (i+1)*100})
    }
</script>
</html>