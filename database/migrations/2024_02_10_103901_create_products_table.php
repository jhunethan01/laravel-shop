<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('weight')->nullable();
            $table->text('point_1')->nullable();
            $table->text('point_2')->nullable();
            $table->text('point_3')->nullable();
            $table->string('image')->nullable();
            $table->string('colour')->nullable();
            $table->string('material')->nullable();
            $table->string('range')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->tinyInteger('oven_safe')->nullable();
            $table->tinyInteger('dishwasher_safe')->nullable();
            $table->tinyInteger('wash_by_hand')->nullable();
            $table->integer('guarantee_period')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->timestamps();
        });

        DB::table('products')->insert([
            [
                "sku" => "7215",
                "product_name" => "Elite Tri-Ply Frying Pan",
                "weight" => 1916,
                "point_1" => "30cm frying pan featuring seamless 3mm tri-ply construction for ultimate performance",
                "point_2" => "Cutting edge design engineered for optimised induction cooking with safe rivetless CoolTouch&reg handle and helper handle, Uncoated 18/10 stainless steel interior that can handle high heat and lasts a lifetime",
                "point_3" => "Uncoated 18/10 stainless steel interior that can handle high heat and lasts a lifetime",
                "image" => "7215_C",
                "colour" => "Silver",
                "material" => "Stainless Steel Uncoated",
                "range" => "Elite Tri-ply",
                "size" => "30cm",
                "type" => "Frying Pans, Skillets",
                "oven_safe" => 1,
                "dishwasher_safe" => 1,
                "wash_by_hand" => 0,
                "guarantee_period" => 25,
                "price" => 79,
                "stock" => 395,
            ],
            [
                "sku" => "7718",
                "product_name" => "Professional Stainless Steel Frying Pan",
                "weight" => 2050,
                "point_1" => "30cm Uncoated frying pan",
                "point_2" => "Uncoated stainless steel interior with CoolTouch&reg",
                "point_3" => "Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg",
                "image" => "7718_1",
                "colour" => "Silver",
                "material" => "Stainless Steel Uncoated",
                "range" => "Professional Stainless Steel",
                "size" => "30cm",
                "type" => "Frying Pans, Skillets",
                "oven_safe" => 1,
                "dishwasher_safe" => 1,
                "wash_by_hand" => 1,
                "guarantee_period" => 25,
                "price" => 49,
                "stock" => 2300,
            ],
            [
                "sku" => "8726",
                "product_name" => "Professional Anodised Frying Pan",
                "weight" => 1170,
                "point_1" => "28cm Frying pan",
                "point_2" => "Forged, anodised aluminium body for strength and durability offering amazing heat distribution and energy efficient cooking, with CoolTouch&reg; handles",
                "point_3" => "Features premium 5 star ProCook Ultra Plus triple layer PFOA free non-stick coating",
                "image" => "8726_2",
                "colour" => "Grey",
                "material" => "Aluminium Non-Stick",
                "range" => "Professional Anodised",
                "size" => "28cm",
                "type" => "Frying Pans, Skillets",
                "oven_safe" => 1,
                "dishwasher_safe" => 1,
                "wash_by_hand" => 0,
                "guarantee_period" => 25,
                "price" => 40,
                "stock" => 1196,
            ],
            [
                "sku" => "9326",
                "product_name" => "ProCook Soho Cookware Frying Pan",
                "weight" => 1092,
                "point_1" => "Soho 24cm frying pan",
                "point_2" => "Finished in a deep blue and perfectly sized for your everyday frying needs",
                "point_3" => "Designed to transform your kitchen into a modern and inviting space",
                "image" => "9326_C",
                "colour" => "Blue",
                "material" => "Aluminium Ceramic Non-Stick",
                "range" => "Soho",
                "size" => "24cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 10,
                "price" => 29,
                "stock" => 717,
            ],
            [
                "sku" => "9328",
                "product_name" => "ProCook Soho Cookware Frying Pan",
                "weight" => 1092,
                "point_1" => "Soho 24cm frying pan",
                "point_2" => "Finished in a gorgeous green and perfectly sized for your everyday frying needs",
                "point_3" => "Designed to transform your kitchen into a modern and inviting space",
                "image" => "9328_C",
                "colour" => "Green",
                "material" => "Aluminium Ceramic Non-Stick",
                "range" => "Soho",
                "size" => "24cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 10,
                "price" => 29,
                "stock" => 772,
            ],
            [
                "sku" => "9330",
                "product_name" => "ProCook Soho Cookware Frying Pan",
                "weight" => 1092,
                "point_1" => "Soho 24cm frying pan",
                "point_2" => "Finished in a stylish coral and perfectly sized for your everyday frying needs",
                "point_3" => "Designed to transform your kitchen into a modern and inviting space",
                "image" => "9330_C",
                "colour" => "Silver",
                "material" => "Aluminium Ceramic Non-Stick",
                "range" => "Soho",
                "size" => "24cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 10,
                "price" => 29,
                "stock" => 938,
            ],
            [
                "sku" => "9332",
                "product_name" => "ProCook Soho Cookware Frying Pan",
                "weight" => 1092,
                "point_1" => "Soho 24cm frying pan",
                "point_2" => "Finished in a luxurious cream and perfectly sized for your everyday frying needs",
                "point_3" => "Designed to transform your kitchen into a modern and inviting space",
                "image" => "9332_C",
                "colour" => "Cream",
                "material" => "Aluminium Ceramic Non-Stick",
                "range" => "Soho",
                "size" => "24cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 10,
                "price" => 29,
                "stock" => 443,
            ],
            [
                "sku" => "9355",
                "product_name" => "Gourmet Non-Stick Frying Pan",
                "weight" => 990,
                "point_1" => "Perfect for all of your everyday frying tasks",
                "point_2" => "5 Star non-stick ceramic coating releases food quickly and easily",
                "point_3" => "Stay-cool handles ensure safer handling on the hob",
                "image" => "7675_C",
                "colour" => "Black",
                "material" => "Aluminium Ceramic Non-Stick",
                "range" => "Gourmet Non-Stick",
                "size" => "24cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 10,
                "price" => 19,
                "stock" => 3095,
            ],
            [
                "sku" => "9373",
                "product_name" => "Gourmet Stainless Steel Frying Pan",
                "weight" => 1463,
                "point_1" => "28cm Stainless steel frying pan",
                "point_2" => "Uncoated stainless steel interior with stay-cool handles for easy handling on the hob",
                "point_3" => "Made from 18/10 stainless steel for even heat distribution and great cooking results",
                "image" => "9373_C1",
                "colour" => "Silver",
                "material" => "Stainless Steel",
                "range" => "Gourmet Stainless Steel",
                "size" => "28cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 1,
                "wash_by_hand" => 0,
                "guarantee_period" => 10,
                "price" => 24,
                "stock" => 805,
            ],
            [
                "sku" => "9396",
                "product_name" => "Professional Stainless Steel Frying Pan",
                "weight" => 2045,
                "point_1" => "30cm Frying pan",
                "point_2" => "5 Star Plus non-stick ceramic coating releases food quickly and easily",
                "point_3" => "Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg handles",
                "image" => "7717_1",
                "colour" => "Silver",
                "material" => "Stainless Steel",
                "range" => "Professional Stainless Steel",
                "size" => "30cm",
                "type" => "Frying Pans",
                "oven_safe" => 1,
                "dishwasher_safe" => 0,
                "wash_by_hand" => 1,
                "guarantee_period" => 25,
                "price" => 54,
                "stock" => 476,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

// sku,product name,weight,point 1,point 2,point 3,image,colour,material,range,size,type,Overn safe,dishwasher safe,wash by hand,guarantee_period,price,stock
// 7215,Elite Tri-Ply Frying Pan,1916,30cm frying pan featuring seamless 3mm tri-ply construction for ultimate performance,Cutting edge design engineered for optimised induction cooking with safe rivetless CoolTouch&reg handle and helper handle,Uncoated 18/10 stainless steel interior that can handle high heat and lasts a lifetime,7215_C,Silver,Stainless Steel Uncoated,Elite Tri-ply,30cm,"Frying Pans, Skillets",1,1,0,25,79,395
// 7718,Professional Stainless Steel Frying Pan,2050,30cm Uncoated frying pan,Uncoated stainless steel interior with CoolTouch&reg,Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg,7718_1,Silver,Stainless Steel Uncoated,Professional Stainless Steel,30cm,"Frying Pans, Skillets",1,1,1,25,49,2300
// 8726,Professional Anodised Frying Pan,1170,28cm Frying pan,"Forged, anodised aluminium body for strength and durability offering amazing heat distribution and energy efficient cooking, with CoolTouch&reg; handles",Features premium 5 star ProCook Ultra Plus triple layer PFOA free non-stick coating,8726_2,Grey,Aluminium Non-Stick,Professional Anodised,28cm,"Frying Pans, Skillets",1,1,0,25,40,1196
// 9326,ProCook Soho Cookware Frying Pan,1092,Soho 24cm frying pan,Finished in a deep blue and perfectly sized for your everyday frying needs,Designed to transform your kitchen into a modern and inviting space,9326_C,Blue,Aluminium Ceramic Non-Stick,Soho,24cm,Frying Pans,1,0,1,10,29,717
// 9328,ProCook Soho Cookware Frying Pan,1092,Soho 24cm frying pan,Finished in a gorgeous green and perfectly sized for your everyday frying needs,Designed to transform your kitchen into a modern and inviting space,9328_C,Green,Aluminium Ceramic Non-Stick,Soho,24cm,Frying Pans,1,0,1,10,29,772
// 9330,ProCook Soho Cookware Frying Pan,1092,Soho 24cm frying pan,Finished in a stylish coral and perfectly sized for your everyday frying needs,Designed to transform your kitchen into a modern and inviting space,9330_C,Silver,Aluminium Ceramic Non-Stick,Soho,24cm,Frying Pans,1,0,1,10,29,938
// 9332,ProCook Soho Cookware Frying Pan,1092,Soho 24cm frying pan,Finished in a luxurious cream and perfectly sized for your everyday frying needs,Designed to transform your kitchen into a modern and inviting space,9332_C,Cream,Aluminium Ceramic Non-Stick,Soho,24cm,Frying Pans,1,0,1,10,29,443
// 9355,Gourmet Non-Stick Frying Pan,990,Perfect for all of your everyday frying tasks,5 Star non-stick ceramic coating releases food quickly and easily,Stay-cool handles ensure safer handling on the hob,7675_C,Black,Aluminium Ceramic Non-Stick,Gourmet Non-Stick,24cm,Frying Pans,1,0,1,10,19,3095
// 9373,Gourmet Stainless Steel Frying Pan,1463,28cm Stainless steel frying pan,Uncoated stainless steel interior with stay-cool handles for easy handling on the hob,Made from 18/10 stainless steel for even heat distribution and great cooking results,9373_C1,Silver,Stainless Steel,Gourmet Stainless Steel,28cm,Frying Pans,1,1,0,10,24,805
// 9396,Professional Stainless Steel Frying Pan,2045,30cm Frying pan,5 Star Plus non-stick ceramic coating releases food quickly and easily,Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg  handles,7717_1,Silver,Stainless Steel,Professional Stainless Steel,30cm,Frying Pans,1,0,1,25,54,476

// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`) VALUES (7215,'Elite Tri-Ply Frying Pan',1916,'30cm frying pan featuring seamless 3mm tri-ply construction for ultimate performance','Cutting edge design engineered for optimised induction cooking with safe rivetless CoolTouch&reg handle and helper handle','Uncoated 18/10 stainless steel interior that can handle high heat and lasts a lifetime','7215_C','Silver','Stainless Steel Uncoated','Elite Tri-ply','30cm','Frying Pans, Skillets',1,1,0,25,79,395);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (7718,'Professional Stainless Steel Frying Pan',2050,'30cm Uncoated frying pan','Uncoated stainless steel interior with CoolTouch&reg','Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg','7718_1','Silver','Stainless Steel Uncoated','Professional Stainless Steel','30cm','Frying Pans, Skillets',1,1,1,25,49,2300);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (8726,'Professional Anodised Frying Pan',1170,'28cm Frying pan','Forged, anodised aluminium body for strength and durability offering amazing heat distribution and energy efficient cooking, with CoolTouch&reg; handles','Features premium 5 star ProCook Ultra Plus triple layer PFOA free non-stick coating','8726_2','Grey','Aluminium Non-Stick','Professional Anodised','28cm','Frying Pans, Skillets',1,1,0,25,40,1196);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9326,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a deep blue and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9326_C','Blue','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,717);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9328,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a gorgeous green and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9328_C','Green','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,772);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9330,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a stylish coral and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9330_C','Silver','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,938);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9332,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a luxurious cream and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9332_C','Cream','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,443);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9355,'Gourmet Non-Stick Frying Pan',990,'Perfect for all of your everyday frying tasks','5 Star non-stick ceramic coating releases food quickly and easily','Stay-cool handles ensure safer handling on the hob','7675_C','Black','Aluminium Ceramic Non-Stick','Gourmet Non-Stick','24cm','Frying Pans',1,0,1,10,19,3095);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9373,'Gourmet Stainless Steel Frying Pan',1463,'28cm Stainless steel frying pan','Uncoated stainless steel interior with stay-cool handles for easy handling on the hob','Made from 18/10 stainless steel for even heat distribution and great cooking results','9373_C1','Silver','Stainless Steel','Gourmet Stainless Steel','28cm','Frying Pans',1,1,0,10,24,805);
// INSERT INTO products(`sku`,`product_name`,weight,`point_1`,`point_2`,`point_3`,`image`,`colour`,`material`,`range`,`size`,`type`,`oven_safe`,`dishwasher_safe`,`wash_by_hand`,`guarantee_period`,`price`,`stock`)  VALUES (9396,'Professional Stainless Steel Frying Pan',2045,'30cm Frying pan','5 Star Plus non-stick ceramic coating releases food quickly and easily','Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch&reg  handles','7717_1','Silver','Stainless Steel','Professional Stainless Steel','30cm','Frying Pans',1,0,1,25,54,476);
