
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
            ],
            messageInput: "",
            messages: [
                {
                    Name: "Camkou",
                    When: "Now",
                    Text: "To co je more vole",
                    You: true,
                },
                {
                    Name: "Fawdi",
                    When: "Now",
                    Text: "Ajta krajta",
                    You: false,
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