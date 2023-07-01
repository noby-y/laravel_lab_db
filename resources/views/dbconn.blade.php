<a href="/">Home</a>
<body>
    <?php
        if(DB::connection()->getPdo()){
            echo "<br>Successfully connected to DB and DB name is " . DB::connection()->getDatabaseName();
        }
    ?>
</body>
</html>