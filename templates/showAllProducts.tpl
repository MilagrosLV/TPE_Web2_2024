{include file="header.tpl"}
<div class="content">
    {foreach $products as $product}
        <h3 class="card-title"><a href="{BASE_URL}product/{$product->id_product}">{$product->product_name}</a></h3>
        <p> {$product->product_price} </p> <a href="{BASE_URL}category/{$product->id_category}">{$product->id_category}</a></p><br>
    {/foreach}
</div>
{include file="footer.tpl"}