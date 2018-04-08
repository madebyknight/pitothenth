<html>
    <head>
        <title>Just For Fun</title>
        <meta charset="utf-8">
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>Scripts i've made just for fun</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <p><b>Name:</b> Pi to the Nth</p>
                    <p><b>Info:</b> Enter a number between 1 &amp; 20 to return pi to that digit.</p>
                    <input type="text" placeholder="15" id="pies">
                    <button type="submit" id="piSubmit">submit</button> 
                    <br>
                    <p id="piResults"></p>
                </div>
            </div>
        </div>
        
        
<script type="text/javascript">
    
    var piSubmit = document.getElementById("piSubmit");
    var piResults = document.getElementById("piResults");
    
    function piFinder(x) 
    {
        /*Grab "x" number from the input box*/
        x = document.getElementById('pies').value;
        /*Make sure "x" is a number between 1 and 20*/
        if (isNaN(x) || x < 1 || x > 20)
        {
    		alert('Enter a valid number between 1 and 20');
            return false;
        }
        /*Send the results to the screen*/
        piResults.innerHTML = (Math.PI).toFixed(x);
    }
    
    function piResuts()
    {
        /*Wait for the user to press submit*/
        piSubmit.addEventListener("click", piFinder);
    }
    piResuts();
</script>

    </body>
</html>