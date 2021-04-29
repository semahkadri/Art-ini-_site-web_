<?php

require_once 'C:/xampp/htdocs/demo/Semah/config.php';

    $connect = mysqli_connect('localhost','root','','artini');

    $record_per_page = 4;

    $page='';

    $output='';

    if (isset($_POST["page"])) {
        $page=$_POST["page"];
    }
    else {
        $page=1;
    }

    $start_from= ($page - 1) * $record_per_page;

    $query="SELECT * FROM produit LIMIT $start_from, $record_per_page";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }

    $output .=" 
    <table class='table table-responsive table-fluid' > 
        <thead>
          <tr>
            <th> ID produit </th>
            <th>Profile picture</th>
            <th>Nom du produit</th>
            <th>ID catégorie </th>
            <th>Prix produit</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
    ";
    while($row =  mysqli_fetch_array($result))
    {
        $output .='
            <tr>
                <th scope="row">' .$row["id_prod"]. '</th>
                <td><img src="' .$row["img_prod"]. '"</td>
                <td>' .$row["nom_prod"]. '</td>
                <td>' .$row["id_categorie"]. '</td>
                <td>' .$row["prix_prod"]. '</td>
                <td>
                <td>
                  <a href="modifierP.php?id_prod=' .$row["id_prod"]. '"> Edit </a>
                </td>
                <td>
                  <a href="produit.php?id_prod=' .$row["id_prod"]. '"> Delete </a> 
                </td>
            </tr>
        ';
    }
    $output .= '
        </tbody>
    </table> <br> <div align="center">
    ';

    $page_query = "SELECT * FROM produit ORDER BY id_prod DESC";

    $page_result = mysqli_query($connect, $page_query);

    $total_records = mysqli_num_rows($page_result);

    $total_pages = ceil($total_records/$record_per_page);
    
    $output .="
    <nav aria-label='Page navigation example'>
    <ul class='pagination justify-content-center'>
      
    ";

    for ($i=1; $i<=$total_pages; $i++) {
        $output .="<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px; solid #ccc; ' id='".$i."'> 
        
          <li class='page-item'><a class='page-link' href='#'>".$i."</a></li>
          </span>
        ";
    }

    $output .="
    
    </ul>
    </nav>
    ";

    echo $output;


?>