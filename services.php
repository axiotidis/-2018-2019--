<!DOCTYPE html>
<html><head><meta name="GCD" content="YTk3ODQ3ZWZhN2I4NzZmMzBkNTEwYjJl2b572d3aef216ddc42f1ca18dd2aabea"/>
  <meta charset="utf-8">
  <title>Αναζήτηση υπηρεσιών</title>
  <meta name="generator" content="Google Web Designer 5.0.4.0226">
  <link href="gwdpage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-page">
  <link href="gwdimage_style.css" rel="stylesheet" data-version="12" data-exports-type="gwd-image">
  <style type="text/css" id="gwd-text-style">p {
    margin: 0px;
}
h1 {
    margin: 0px;
}
h2 {
    margin: 0px;
}
h3 {
    margin: 0px;
}</style>
  <style type="text/css">html,
body {
    width: 100%;
    height: 100%;
    margin: 0px;
}
body {
    background-color: transparent;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    -moz-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    perspective: 1400px;
    -webkit-perspective: 1400px;
    -moz-perspective: 1400px;
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
}
.gwd-label-18aw {
    position: absolute;
    left: 0%;
    top: 8%;
    width: 100%;
    height: 5%;
    text-align: center;
    font-size: 28px;
}
.gwd-imagebutton-1p1q {
    position: absolute;
    left: 39.67%;
    top: 70.49%;
    width: 20.77%;
    height: 21.41%;
}
.gwd-label-qty0 {
    position: absolute;
    top: 90.98%;
    height: 3.06%;
    width: 19%;
    text-align: center;
    font-size: 18px;
    left: 40.5%;
}
.gwd-div-nd3q {
    position: absolute;
    top: 20.03%;
    height: 50%;
    width: 79%;
    left: 10%;
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
  <script data-source="googbase_min.js" data-version="4" data-exports-type="googbase" src="googbase_min.js"></script>
  <script data-source="gwd_webcomponents_min.js" data-version="6" data-exports-type="gwd_webcomponents" src="gwd_webcomponents_min.js"></script>
  <script data-source="gwdpage_min.js" data-version="12" data-exports-type="gwd-page" src="gwdpage_min.js"></script>
  <script data-source="gwdimage_min.js" data-version="12" data-exports-type="gwd-image" src="gwdimage_min.js"></script>
  <script data-source="gwdimagebutton_min.js" data-version="11" data-exports-type="gwd-imagebutton" src="gwdimagebutton_min.js"></script>
</head>

<body class="htmlNoPages">
  <label id="label_1" class="gwd-label-18aw">Αναζήτηση υπηρεσιών</label>
  <a href="mainMenu.php" class="">
    <gwd-imagebutton id="gwd-imagebutton_1" up-image="http://axiotidis.com:8085/pictures/return.png" over-image="http://axiotidis.com:8085/pictures/return.png" down-image="http://axiotidis.com:8085/pictures/return.png" scaling="contain" class="gwd-imagebutton-1p1q"></gwd-imagebutton>
  </a>
  <label id="label_2" class="gwd-label-qty0">Επιστροφή στο κεντρικό μενού</label>
  <div class="gwd-div-nd3q">
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
     
        <table class="data-table">
            <thead>
                <tr>
                    <th>A/A</th><th>ΥΠΗΡΕΣΙΑ</th><th>ΠΟΛΗ</th><th>ΟΔΟΣ</th><th>ΑΡΙΘΜΟΣ</th><th>ΤΑΧ_ΚΩΔ</th>
                    <th>ΤΗΛΕΦΩΝΟ</th><th>ΤΥΠΟΣ</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no 	= 1;
            while ($row = mysqli_fetch_array($query)){
			    echo '<tr>
					<td>'.$no.'</td><td>'.$row['servicename'].'</td><td>'.$row['city'].'</td>
                    <td>'.$row['address'].'</td><td>'.$row['number'].'</td><td>'.$row['postcode'].'</td>
                    <td>'.$row['phone'].'</td><td>'.$row['typeOfService'].'</td>
				</tr>';
			$no++;
            }
            ?>
		    </tbody>
        </table>
  </div>


</body></html>
