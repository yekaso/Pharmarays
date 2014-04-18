<!--
list of articles
-->
<div id="contentwrapper">
                <?php include 'adminnavpane.php';?>
    <div class="main_content">
                    <div class="row-fluid">
<?php


 $articlelist = '<br/><br/>'.(isset($page_links)? $page_links:"").'<br/>
                    <table ><thead >
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Drug Category</th>
                    <th>Time Created</th>
                    <th>Author</th>
                    <th>Action</th>
                    </thead><tbody>';
 
 if(isset($all_articles) && empty($all_articles)){
     $articlelist .= '<tr>
                        <td colspan="6"> NO ARTICLE HAS BEEN CREATED </td>
                        </tr>';
 }else{
     $count_table = 0;
     foreach($all_articles as $article){
          if ($count_table % 2 == 0) {
            $row = '<tr class="">';
        } else {
            $row = '<tr class="">';
        }
        $count_table++;
        $articlelist .= $row . '<td>'.$count_table.'</td>
                                <td>'.$article['head'].'</td>
                                <td></td>
                                <td>'.$article['txn_date'].'</td>
                                <td>'.(isset($article['author'])?$article['author']:"N/A").'</td>
                                <td>'. anchor('admin/adminpharm/redirect_to_managearticles/'.$article['id'],"View","style='color:black';text-decoration:underline;").
                                '<span>&nbsp;</span>'. anchor('admin/adminpharm/delete_article/'.$article['id'],"Delete","style='color:black';text-decoration:underline;");
                            
        
     }
     $articlelist .= '</table>';
 }
 $articlelist .=''; 
 
 echo $articlelist;
 //echo var_dump($all_articles);
?>
                    </div>
    </div>
</div>