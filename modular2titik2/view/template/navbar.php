</head>
<body>
    <!-- nav start -->
    <nav>
        <ul class="nbox">
            <li><abbr style="text-decoration: none;" title="made by ©renn"> </abbr></li>
            <li><a href="kelompok.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li style="padding: 0;" class="drop">
                <a href="#Daftar Tugas" class="drpbtn" onclick="dropfunc()">Daftar Tugas</a>
                <div class="drop-content" id="drop-content">
                    <a style="padding: 4px 0px;" href="tugas1.php">tugas 1</a>
                    <a style="padding: 4px 0px;" href="tugas2.php">tugas 2</a>
                    <a style="padding: 4px 0px;" href="tugas3.php">tugas 3</a>
                    <a style="padding: 4px 0px;" href="tugas4.php">tugas 4</a>
                    <a style="padding: 4px 0px;" href="tugas5.php">tugas 5</a>
                    <a style="padding: 4px 0px;" href="tugas6.php">tugas 6</a>
                    <a style="padding: 4px 0px;" href="tugas7.php">tugas 7</a>
                </div>
            </li>
            <li><a href="form-1.php">Tambah Data</a></li>
            <!-- <li><a href="form-edit.php">edit</a></li> -->
        </ul>
</nav>
<!-- nav end -->

<script>
    function dropfunc() {
        document.getElementById('drop-content').classList.toggle('show');
    }

    window.onclick = function(event) {
        if (!event.target.matches('.drpbtn')) {
            var dropdowns = document.getElementsByClassName('drop-content');
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>