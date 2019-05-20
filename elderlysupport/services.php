<html>
    <head>
        <meta charset="UTF-8">
        <title>Services Presentation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>
            body {
                width: 70%;
                font-size: 14px;
                color: #343d44;
                font-family: "segoe-ui", "open-sans", tahoma, arial;
                padding: 0;
                margin: auto;
		    }

            .topnav {
                overflow: hidden;
                background-color: #cccccc;
                margin-bottom: 10px;
            }

            .topnav a {
                float: left;
                display: block;
                color: red;
                text-align: center;
                padding: 14px 100px 14px 14px;
                text-decoration: none;
                font-size: 17px;
            }

            .topnav a:hover {
                background-color: #00aaff;
                color: white;
            }

            .topnav .search-container {
                float: right;
            }

            .topnav input[type=text] {
                padding: 6px;
                margin-top: 8px;
                font-size: 17px;
                border: none;
            }

            .topnav .search-container button {
                float: right;
                padding: 8px 10px;
                margin-top: 8px;
                margin-right: 16px;
                background: red;
                font-size: 17px;
                border: none;
                cursor: pointer;
            }

            .topnav .search-container button:hover {
                background: #ccc;
            }

            @media screen and (max-width: 600px) {
                .topnav .search-container {
                    float: none;
                }
                .topnav a, .topnav input[type=text], .topnav .search-container button {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }
                .topnav input[type=text] {
                    border: 1px solid #ccc;  
                }
            }

            table {
                margin: auto;
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
                font-size: 12px;
            }

            h1 {
                margin: 25px auto 0;
                text-align: center;
                text-transform: uppercase;
                font-size: 17px;
            }

            table td {
                transition: all .5s;
            }
            
            /* Table */
            .data-table {
                border-collapse: collapse;
                font-size: 14px;
                min-width: 537px;
            }

            .data-table th, 
            .data-table td {
                border: 1px solid #e1edff;
                padding: 7px 17px;
            }
            .data-table caption {
                margin: 7px;
            }

            /* Table Header */
            .data-table thead th {
                background-color: #508abb;
                color: #FFFFFF;
                border-color: #6ea1cc !important;
                text-transform: uppercase;
            }

            /* Table Body */
            .data-table tbody td {
                color: #353535;
                text-align: center;
            }
            .data-table tbody td:first-child,
            .data-table tbody td:nth-child(4),
            .data-table tbody td:last-child {
                text-align: right;
            }

            .data-table tbody tr:nth-child(odd) td {
                background-color: #f4fbff;
            }
            .data-table tbody tr:hover td {
                background-color: #ffffa2;
                border-color: #ffff0f;
            }

            /* Table Footer */
            .data-table tfoot th {
                background-color: #e5f5ff;
                text-align: right;
            }
            .data-table tfoot th:first-child {
                text-align: left;
            }
            .data-table tbody td:empty
            {
                background-color: #ffcccc;
            }
        </style>
    </head>
    <body>
    <div class="topnav">
        <a href="http://axiotidis.com:8085/elderlysupport/select.html">Επιστροφή στο βασικό μενού</a>
        <a href="http://axiotidis.com:8085/elderlysupport/serviceregist.html">Προσθήκη Υπηρεσίας</a>
        <div class="search-container">
            <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <?php
        $db_host = 'localhost'; // Server Name
        $db_user = 'root'; // Username
        $db_pass = 'eap2019ge4'; // Password
        $db_name = 'eap2019ge4'; // Database Name

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {die ('Failed to connect to MySQL: ' . mysqli_connect_error());	}

        $sql = 'SELECT * FROM services';
		$query = mysqli_query($conn, $sql);

        if (!$query) {die ('SQL Error: ' . mysqli_error($conn));}
    ?>
     <h1>ΥΠΗΡΕΣΙΕΣ</h1>
        <table class="data-table">
            <thead>
                <tr>
                    <th>A/A</th><th>ΥΠΗΡΕΣΙΑ</th><th>ΠΟΛΗ</th><th>ΟΔΟΣ</th><th>ΑΡΙΘΜΟΣ</th><th>ΤΑΧ_ΚΩΔ</th>
                    <th>ΤΗΛΕΦΩΝΟ</th><th>ΤΥΠΟΣ</th><th>ΔΙΑΘΕΣΙΜΗ</th><th>ΕΠΕΞΕΡΓΑΣΙΑ</th><th>ΔΙΑΓΡΑΦΗ</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no 	= 1;
            while ($row = mysqli_fetch_array($query)){
			    echo '<tr>
					<td>'.$no.'</td><td>'.$row['servicename'].'</td><td>'.$row['city'].'</td>
                    <td>'.$row['address'].'</td><td>'.$row['number'].'</td><td>'.$row['postcode'].'</td>
                    <td>'.$row['phone'].'</td><td>'.$row['typeOfService'].'</td><td>'.$row['available'].'</td>
                    <td><a href=""><img src="edit.png" style="width:30px;height:30px;"></a></td>
                    <td><a href=""><img src="bin.png" style="width:30px;height:30px;"></a></td>
				</tr>';
			$no++;
            }
            ?>
		    </tbody>
        </table>
    </body>
</html>