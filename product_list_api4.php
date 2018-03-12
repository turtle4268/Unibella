<?php 
    require __DIR__. '/_db_connect.php';
    $page_name = 'product_list';

    $q_string=[];
    $per_page=12;
    $result=array(
        'success'=>false,
    );

    $realpage=isset($_GET['page'])?intval($_GET['page']):1;
        if($realpage<1) $realpage= 1;
        $page=$realpage-1;

    // $nowTens=isset($_GET['nowTens'])?intval($_GET['nowTens']):0;
    // $nowOnes=isset($_GET['nowOnes'])?intval($_GET['nowOnes']):1;

    $cate=isset($_GET['cate'])?intval($_GET['cate']):1;     //分類(預設雨傘:1 ,陽傘:2)
    $color=isset($_GET['color'])?intval($_GET['color']):0;
    $skeleton=isset($_GET['skeleton'])?intval($_GET['skeleton']):0;
    $auto=isset($_GET['auto'])?intval($_GET['auto']):0;
    $order=isset($_GET['order'])?$_GET['order']:" `sid` ASC ";


    $where=" WHERE `category_id`=$cate ";     //分類內清單
        if(!empty($cate)){
            $where.="AND `category_id`=$cate ";
            $q_string['cate']=$cate ;   //丟分類項進去
            //http_build_query($q_string)     產生cate=n&page=n的字串
        }
        if(!empty($color)){
            $where.="AND `color_id`=$color ";
            $q_string['color']=$color ;   //丟分類項進去
        }
        if(!empty($skeleton)){
            $where.="AND `function_id`=$skeleton ";
            $q_string['skeleton']=$skeleton ;   //丟分類項進去
        }
        if(!empty($auto)){
            $where.="AND `auto_id`=$auto ";
            $q_string['auto']=$auto ;   //丟分類項進去
        }

    // $order=" `sid` ASC ";
    $t_sql = "SELECT COUNT(1) FROM `products` $where";

    $t_result = $mysqli->query($t_sql);
    $t_rows = $t_result->fetch_row()[0];    //讀取筆數

    $t_pages = ceil($t_rows/$per_page); //總頁數

    $tens=floor($t_pages/10); 
    $ones=$t_pages%10;

    $c_sql = sprintf("SELECT * FROM `products` $where ORDER BY $order LIMIT %s, %s", ($page)*$per_page, $per_page);
    $c_result = $mysqli->query($c_sql);

    $data=array();
    while($row=$c_result->fetch_assoc()){
        $data[]=$row;
    }
    for($i=0;$i<$t_pages;$i++){
        $pages[]=$i;
    }
    
    $result['success']=true;
    $result['data']=$data;
    // $result['thispage']=$nowTens*10+($nowOnes+1);
    $result['totalPage']=$t_pages;
    $result['pages']=$pages;
    

    echo json_encode($result);
    /*$m_sql = "SELECT * FROM categories WHERE parent_sid=0 ORDER BY sid DESC";
    $m_result = $mysqli->query($m_sql);  */   //分類清單
