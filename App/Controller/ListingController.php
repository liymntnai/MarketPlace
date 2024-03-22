<?php declare(strict_types= 1);
namespace App\Controller;

use App\App;
use App\Model\Category;
use App\View;
class ListingController{
    private Category $category;
    public function __construct(){
        $this->category = new Category();
    }
    public function list_car():View{
        $list=$this->category->search('Cars');
        echo '<pre>';
        // print_r($list);
        echo '</pre>';

        return View::make("/listing.php", [$list]);
    }
    public function list_house():View{
        $list=$this->category->search('Housing');

        return View::make("/listing.php", [$list]);
    }
    public function list_electrical():View{

        $list=$this->category->search(11);
        return View::make("/listing.php", [$list]);
    }
    public function list_clothing():View{

        $list=$this->category->search(15);
        return View::make("/listing.php", [$list]);
        // return View::make("/listing.php", ["category"=>"category->find(cars)"]);
    }
    public function list_pc():View{

        $list=$this->category->search(12);
        // echo '<pre>';
        // print_r($list);
        // echo '</pre>';
        return View::make("/listing.php", [$list]);
    }
    public function list_smartphone():View{

        $list=$this->category->search(13);
        // echo '<pre>';
        // print_r($list);
        // echo '</pre>';
        return View::make("/listing.php", [$list]);
    }
}

// get(/)->Home->index
// get(invoice)->Invoice ->index