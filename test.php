<?php

$data = file_get_contents('sample.json');

$shopee = json_decode($data);

echo "item id =" . $shopee->item->shopid;
echo "<br>";
echo "shopid =" . $shopee->item->itemid;
echo "<br>";
echo "categories :";
echo "<br>";

// foreach($shopee->categories as $)
// {
//         echo "https://cf.shopee.co.id/file/" . $mydata . "<br>";

// }   

foreach($shopee->item->categories as $categories)
{
   //  foreach($categories->display_name as $values) {
   //      echo $values . "\n";
   //  }
   echo $categories->display_name . "<br>";

}   
// echo  $shopee->categories[0]->display_name;
// echo "<br>";
// echo  $shopee->categories[1]->display_name;
// echo "<br>";
// echo  $shopee->categories[2]->display_name;
echo "<br>";
echo "image:";
echo "<br>";

foreach($shopee->item->images as $mydata)
{
        echo "https://cf.shopee.co.id/file/" . $mydata . "<br>";

}   
// foreach($shopee as $shopees){
// echo "https://cf.shopee.co.id/file/" . $shopees->images[1];
// echo "<br>";
// echo "https://cf.shopee.co.id/file/" . $shopees->images[1];
// echo "<br>";
// echo "https://cf.shopee.co.id/file/" . $shopees->images[2];
// echo "<br>";
// echo "https://cf.shopee.co.id/file/" . $shopees->images[3];
echo "<br>";
echo "description:";
echo "<br>";
echo $shopee->item->description;
echo "<br>";
echo "currency =" . $shopee->item->currency;
echo "<br>";
echo "price before discount =" . $shopee->item->price_max_before_discount;
echo "<br>";
echo "price min =" . $shopee->item->price_min_before_discount;
echo "<br>";
echo "discount =" . $shopee->item->raw_discount . "%";
echo "<br>";
echo "brand =" . $shopee->item->brand;
echo "<br>";
echo "stock =" . $shopee->item->stock;
echo "<br>";
echo "Attributes:";
echo "<br>";
echo "brand =" . $shopee->item->brand;
echo "<br>";
echo "Recommended gender =" . $shopee->item->attributes[1]->value;
echo "<br>";
echo "Recommended Age =" . $shopee->item->attributes[2]->value;
echo "<br>";
echo "Material =" . $shopee->item->attributes[3]->value;