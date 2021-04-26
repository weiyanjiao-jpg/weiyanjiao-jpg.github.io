<?php
//---------------------------用户自定义标签函数文件
function user_ShowListMorePage($num,$page,$dolink,$type,$totalpage,$line,$ok,$search=""){
    global $fun_r,$public_r;
    if($num<=$line)
    {
        $pager['showpage']='';
        return $pager;
    }
    $page_line=$public_r['listpagelistnum'];
    $snum=2;
 
    //上一页
    if($page<>1)
    {
        $toppage='<a href="'.$dolink.'index'.$type.'" class="page">'.$fun_r['startpage'].'</a>';    //首页
        $pagepr=$page-1;
        if($pagepr==1)
        {
            $prido="index".$type;
        }
        else
        {
            $prido="index_".$pagepr.$type;
        }
        $prepage='<a href="'.$dolink.$prido.'" class="page">'.$fun_r['pripage'].'</a>';     //上一页
    }
    //下一页
    if($page!=$totalpage)
    {
        $pagenex=$page+1;
        $nextpage='<a href="'.$dolink.'index_'.$pagenex.$type.'" class="page">'.$fun_r['nextpage'].'</a>';   //下一页
        $lastpage='<a href="'.$dolink.'index_'.$totalpage.$type.'" class="page">'.$fun_r['lastpage'].'</a>';    //最后一页
    }
    $starti=$page-$snum<1?1:$page-$snum;
    $no=0;
    for($i=$starti;$i<=$totalpage&&$no<$page_line;$i++)    //详细页码信息
    {
        $no++;
        if($page==$i)
        {
            $is_1="<a class='page now-page'>";    //当前
            $is_2="</a></span>";
        }
        elseif($i==1)
        {
            $is_1='<a href="'.$dolink.'index'.$type.'">';   //第一页
            $is_2="</a>";
        }
        else
        {
            $is_1='<a href="'.$dolink.'index_'.$i.$type.'">';    //其他页
            $is_2="</a>";
        }
        $returnstr.=$is_1.$i.$is_2;
    }
    $returnstr=$firststr.$toppage.$prepage.$returnstr.$nextpage.$lastpage; 
    $pager['showpage']=$returnstr;
    return $pager;
}
?>