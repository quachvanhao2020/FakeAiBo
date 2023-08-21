<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        input_history();
    });
    function input_history(){
        var is = document.getElementsByTagName("input");
        for (const e of is) {
            var type = e.getAttribute("type");
            if(type == "password" || type == "checkbox") continue;
            var name = e.getAttribute("name");
            var cookie = getCookie("_"+name);
            if(cookie && e.value == ""){
                e.value = cookie;
            }
            e.addEventListener("change",(e)=>{
                e = e.target;
                setCookie("_"+e.getAttribute("name"),e.value);
            }); 
        }
    }
</script>