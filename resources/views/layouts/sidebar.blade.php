<?php 
use App\ProductsCategory;
?>
<div class="desktop_show col_menuleft">
    <div class="top40"></div>
    <div class="col_menuleftbg">
        <div style="-moz-border: 1px 20px 1px 20px; -webkit-border-radius:1px 20px 1px 20px; border-radius:1px 20px 1px 20px; background:#3f808a; padding:7px 20px; margin-bottom:20px; font-size:20px; color:#fff; text-align:center;">Product Type</div>
        <div class="bd_top"></div>
       <!-- @php
        $cat=App\ProductsCategory::all();
        @endphp -->
        
        @foreach(App\ProductsCategory::all() as $item)
        <div class="productcat"><a href="{{route('searchbycategory',['id'=>$item->id])}}" >{{$item->title}}</a>
        </div>
        @endforeach
    <div class="top10">
    </div>
    <div class="clear"></div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>