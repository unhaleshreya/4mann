<?php
// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use App\Models\Categories;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // <-- import Str
use DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Aluminium Composite Panels' => [
                ["name"=>'Metallic Flair Series',"sub_category_img"=>"assets/images/product/metalic-flair-series.png"],
                ["name"=>'Solid Series',"sub_category_img"=>"assets/images/product/solid-series.png"],
                ["name"=>'Sand Series',"sub_category_img"=>"assets/images/product/sand-series.png"],
                ["name"=>'Wooden Series',"sub_category_img"=>"assets/images/product/wooden-series.png"],
                ["name"=>'Stone Series',"sub_category_img"=>"assets/images/product/stone-series.png"],
                ["name"=>'Sparkle Series',"sub_category_img"=>"assets/images/product/sparkel-series.png"],
                ["name"=>'High Gloss Series',"sub_category_img"=>"assets/images/product/high-gloss-series.png"],
                ["name"=>'Marble Series',"sub_category_img"=>"assets/images/product/marble-series.png"],
                ["name"=>'Emerald Series',"sub_category_img"=>"assets/images/product/emerald-series.png"],
                ["name"=>'Crystal Series',"sub_category_img"=>"assets/images/product/crystal-series.png"],
                ["name"=>'Mirror Series',"sub_category_img"=>"assets/images/product/mirror-series.png"],


            ],
            'Fire Retardant ACP Panels' => [],
            '4MANN HPL' => [],
            '4MANN Honeycomb Panels' => [],
            'METAFULTE - Aluminium Composite Louvers' => [],
            'Other Building Materials' => []
        ];

        foreach ($categories as $categoryName => $subCategories) {
            $category = Categories::create([
                'name' => $categoryName,
                'slug' => Str::slug($categoryName), // generate unique slug
                'status' => 1,
                'has_subcategories' => 1,
            ]);

            foreach ($subCategories as $subCatName) {
                SubCategory::create([
                    'name' => $subCatName['name'],
                    'category_id' => $category->id,
                    'slug' => Str::slug($subCatName['name']), // generate unique slug
                    'sub_category_img' => $subCatName['sub_category_img'] // <-- add this line
                ]);
            }
        }
    }
}
